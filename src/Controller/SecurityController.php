<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Form\PasswordChangeType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityController extends AbstractController
{

    //////////////////////////////////////////////////
    ////////// INSCRIPTION (REGISTRATION) ///////////

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher)
    {

        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user, ['add' => true]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) :

            $mdp = $hasher->hashPassword($user, $user->getPassword());
            $user->setPassword($mdp);

            $manager->persist($user);
            $manager->flush();
            $this->addFlash('success', 'Votre inscription est bien validée');

            return $this->redirectToRoute('login');

        endif;




        return $this->render('security/register.html.twig', [
            'form' => $form->createView()
        ]);
    }






    /////////////////////  MODIFICATION PROFILE USER ///////////////////////
    ///////////////////////////////////////////////////////////////////////

    /**
     * @Route("/modifProfil", name="modifProfil")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function modifProfil(Request $request, EntityManagerInterface $manager, UserRepository $userRepository)
    {

        $user = $this->getUser();
        
        $form = $this->createForm(RegistrationType::class, $user, ['edit' => true]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) :


            $manager->persist($user);

            $manager->flush();

            $this->addFlash('success', 'Votre profil a bien été modifié');

            return $this->redirectToRoute('profil');

        endif;


        return $this->render('security/modifProfil.html.twig', [
            'form' => $form->createView(),

        ]);
    }









    //////////////////////////////////////////////////
    /////////////////// LOGIN ////////////////////////

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('security/login.html.twig', []);
    }



    //////////////////////////////////////////////////
    /////////////////// LOGOUT ////////////////////////

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
    }




    ///////////////////////////////////////////////////////////
    /////////////////// RESET PASSWORD ////////////////////////

    // 1 //  ENVOI FORMULAIRE AVEC TOKEN

    /**
     * @Route("/resetForm", name="resetForm")
     * @Route("/resetToken", name="resetToken")
     */
    public function resetForm(UserRepository $repository, Request $request, EntityManagerInterface $manager, MailerInterface $mailer)
    {

        if (!empty($_POST)) {

            $email = $request->request->get('email');

            $user = $repository->findOneBy(['email' => $email]);

            if (!$user) {
                $this->addFlash('danger', 'Aucun compte à cette adresse email');
                return $this->redirectToRoute('resetForm');
            } else {
                $id = $user->getId();
                $token = uniqid();
                $user->setToken($token);

                $manager->persist($user);
                $manager->flush();


                $email = (new TemplatedEmail())
                    ->from('dorancosalle78@gmail.com')
                    ->to($email)
                    ->subject('Demande de Rénitialisation de mot de passe')
                    ->htmlTemplate('home/email_template.html.twig');

                // INSERTION LOGO
                $cid = $email->embedFromPath('logo.jpg', 'logo');

                // CONTENU DU MESSAGE
                $email->context([

                    'message' => 'Vous venez de faire une demande rénitialisation de mot de passe, cliquez ci-dessous',
                    'nom' => '',
                    'prenom' => '',
                    'subject' => 'Demande de Rénitialisation de mot de passe',
                    'from' => 'dorancosalle78@gmail.com',
                    'cid' => $cid,
                    'liens' => 'http://127.0.0.1:8001/resetPassword/' . $token . '/' . $id,
                    'objectif' => 'Rénitialiser',

                ]);


                $mailer->send($email);
                $this->addFlash('success', 'Un email de récupération vien de vous etre envoyé par email');
                return $this->redirectToRoute('home');
            }
        }

        // RENVOI LA PAGE FORMULAIRE RESET
        return $this->render('security/resetForm.html.twig', []);
    }


    // 2 //  FORMULAIRE RESET

    /**
     * @Route("/resetPassword/{token}/{id}", name="resetPassword")
     * @Route("/finalReset", name="finalReset")
     */
    public function resetPassword(UserRepository $repository, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher, $token = null, $id = null)
    {
        // VERIFICATION TOKEN & ID
        if ($token && $id) {

            $user = $repository->findOneBy(['token' => $token, 'id' => $id]);

            if ($user) {

                // (SI TRUE) RENVOI DE LA PAGE PASSWORD RESET
                return $this->render('security/resetPassword.html.twig', [

                    'id' => $id
                ]);
            } else {
                // (SI FALSE) MESSAGE ERREUR
                $this->addFlash('danger', 'Une érreur s\'est produite, veuillez réitérer une demande de rénitialisation');
                return $this->redirectToRoute('resetForm');
            }
        }

        // VERIFICATION DU $_POST
        if (!empty($_POST)) {

            $id = $request->request->get('id');
            $password = $request->request->get('password');
            $confirmPassword = $request->request->get('confirmPassword');

            if ($password !== $confirmPassword) {
                $this->addFlash('danger', 'Les mots de passe ne correspondent pas');
                return $this->redirectToRoute('finalReset', [
                    'id' => $id
                ]);
            } else {

                $user = $repository->find($id);
                $mdp = $hasher->hashPassword($user, $password);

                $user->setPassword($mdp);
                $user->setToken(null);

                $manager->persist($user);
                $manager->flush();


                $this->addFlash('success', 'Mot de passe rénitialisé, connecter vous à présent');

                // RENVOI LA PAGE LOGIN
                return $this->redirectToRoute('login');
            }
        }
    }






    /////////////////////////////////////////////////////////////////
    ////////////////// MODIFICATION MDP UTILISATEUR ////////////////

    /**
     * @Route("/modifPassword", name="modifPassword")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function modifPassword(Request $request, UserRepository $repository, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher)
    {
        $user = $this->getUser();
        //dd($user);



        if (!empty($_POST)) {

            $oldPpassword = $request->request->get('password');
            $newPassword = $request->request->get('newPassword');
            $confirmPassword = $request->request->get('confirmPassword');

            if ($newPassword == $confirmPassword) {
                if ($hasher->isPasswordValid($user, $oldPpassword)) {


                    $password = $hasher->hashPassword($user, $newPassword);

                    $user->setPassword($password);

                    $manager->persist($user);
                    $manager->flush();

                    $this->addFlash('success', 'Mot de passe modifié avec succès');

                    return $this->redirectToRoute('profil');
                }
            } else {
                $this->addFlash('danger', 'Les mots de passe ne sont pas identiques');
            }
        }


        return $this->render('security/modifPassword.html.twig', []);
    }
}
