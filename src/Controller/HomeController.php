<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Order;
use App\Entity\Detail;
use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Delivery;
use App\Form\ProductType;
use App\Form\CategoryType;
use App\Form\PasswordChangeType;
use App\Repository\UserRepository;
use App\Repository\OrderRepository;
use App\Repository\PromoRepository;
use App\Repository\StockRepository;
use App\Repository\ProductRepository;
use App\Service\Panier\PanierService;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SubCategoryRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;



class HomeController extends AbstractController
{
    ////////////////////////////////////////////////////////////////////////////
    ////////////////////////////  AFFICHAGE PRODUIT ///////////////////////////

    #[Route('/', name: 'home')]
    public function home(ProductRepository $repository): Response
    {

        // ici nous allons récupérer l'integralité des produits enregistrée en BDD
        // requete de SELECT * FROM product
        // pour le requetes de SELECT il nous faut injecter en dépendance le repository de product ProductRepository et utiliser sa methode findAll() presente d'origine

        $products = $repository->findAll();


        return $this->render('home/home.html.twig', [

            'products' => $products

        ]);
    }

    ////////////////////////////////////////////////////////////////////////////
    ////////////////////////////  MAILER ///////////////////////////////////////

    /**
     * @Route("/emailForm", name="emailForm")
     */
    public function emailForm()
    {


        return $this->render('home/email_form.html.twig', []);
    }

    ////////////////////////////////////////////////////////////////////////////
    ////////////////////////////  ENVOI ////////////////////////////////////////

    /**
     * @Route("/emailSend", name="emailSend")
     */
    public function emailSend(Request $request, MailerInterface $mailer)
    {

        if (!empty($_POST)) :

            $message = $request->request->get('message');
            $nom = $request->request->get('surname');
            $prenom = $request->request->get('name');
            $motif = $request->request->get('need');
            $from = $request->request->get('email');

            //

            $email = (new TemplatedEmail())
                ->from($from)
                ->to('dorancosalle78@gmail.com')
                ->subject($motif)
                ->htmlTemplate('home/email_template.html.twig');

            // INSERTION LOGO
            $cid = $email->embedFromPath('logo.jpg', 'logo');

            $email->context([

                'message' => $message,
                'nom' => $nom,
                'prenom' => $prenom,
                'subject' => $motif,
                'from' => $from,
                'cid' => $cid,
                'liens' => 'http://127.0.0.1:8001',
                'objectif' => 'Accéder au site',

            ]);


            $mailer->send($email);

            return $this->redirectToRoute('home', []);

        endif;
    }


    ////////////////////////////////////////////////////////////////////////////
    //////////////////////////// AJOUTER AU PANIER ////////////////////////////

    /**
     * @Route("/addCart/{id}/{param}", name="addCart")
     */
    public function addCart(PanierService $panierService, $id, $param)
    {
        $panierService->add($id);

        // dd($panierService->fullCart());

        if ($param == 'home') {
            return $this->redirectToRoute('home');
        } else {
            return $this->redirectToRoute('cart');
        }


        return $this->redirectToRoute('home');
    }


    /**
     * @Route("/cart", name="cart")
     */
    public function cart(PanierService $panierService)
    {
        $affiche = true;
        $items = $panierService->fullCart();
        $total = $panierService->Total();



        return $this->render('home/cart.html.twig', [

            'items' => $items,
            'total' => $total,
            'titre' => 'Mon panier',
            'affiche' => $affiche

        ]);
    }



    /////////////////////////////////////////////////////////////////////
    ///////////////// REDIRECTION //////////////////////////////////////

    /**
     * @Route("/removeCart/{id}", name="removeCart")
     */
    public function removeCart(PanierService $panierService, $id)
    {
        $panierService->remove($id);

        return $this->redirectToRoute('cart');
    }


    /////////////////////////////////////////////////////////////////////
    ///////////////// SUPPRESSION PANIER ////////////////////////////////

    /**
     * @Route("/deleteCart/{id}", name="deleteCart")
     */
    public function deleteCart(PanierService $panierService, $id)
    {
        $panierService->delete($id);

        return $this->redirectToRoute('cart');
    }


    /////////////////////////////////////////////////////////////////////
    ///////////////// VIDER LE PANIER ///////////////////////////////////

    /**
     * @Route("/destroyCart", name="destroyCart")
     */
    public function destroyCart(Request $request, PanierService $panierService)
    {

        // $request->cookies->set('panierDestroy', $panierService->fullCart());

        $panierService->destroy();

        return $this->redirectToRoute('home');
    }


    /////////////////////////////////////////////////////////////////////
    ///////////////// FILTRE PRODUIT ///////////////////////////////////



    /**
     * @Route("/filterProduct/{param}", name="filterProduct")
     * @Route("/filterValidate", name="filterValidate")
     */
    public function filterProduct(ProductRepository $productRepository, Request $request, SubCategoryRepository $categoryRepository, CategoryRepository $subcategoryRepository, $param = null)
    {


        $categories = $categoryRepository->findAll();
        $affichage = 'categorie';
        $products = $productRepository->findBy(['gender' => $param], ['price' => 'ASC']);
        //dd($request->request);

        $sousCategories = "";

        if (!empty($_POST)) :
            $param = $request->request->get('section');
            $prixmax = $request->request->get('prixmax');
            // etape 1 txt
            if (isset($_POST['cat']) && $_POST['cat'] !== 'all') :
                $cat = $categoryRepository->find($request->request->get('cat'));
                //dd($cat);
                $affichage = 'sousCategorie';
                $sousCategories = $subcategoryRepository->findBy(['subCategory' => $cat]);
            //dd($sousCategories);
            endif;
            // etape 2 txt
            if (isset($_POST['subCat']) && $_POST['subCat'] !== 'all') :
                $subCat = $subcategoryRepository->find($request->request->get('subCat'));

                $affichage = 'sousCategorie';
                $sousCategories = $subcategoryRepository->findBy(['subCategory' => $subCat->getSubCategory()]);
            endif;

            //dd($_POST);


            // user n'a rien saisi
            if (isset($_POST['cat']) && $_POST['cat'] == 'all' && $_POST['prixmax'] == '0') :

                $products = $productRepository->findBy(['gender' => $param], ['price' => 'ASC']);

            endif;

            // user a séléctionnez la catégorie mais pas de prix
            if (isset($_POST['cat']) && $_POST['cat'] !== 'all' && $_POST['prixmax'] == '0') :
                //dd($cat);

                $products = $productRepository->findByCategory($param, $cat);

            endif;

            // user a selectionné le prix mais pas la catégorie
            if (isset($_POST['cat']) && $_POST['cat'] == 'all' && $_POST['prixmax'] !== '0') :

                $products = $productRepository->findByPrice($prixmax, $param);

            endif;

            //user a selectionné le prix et la categorie
            if (isset($_POST['cat']) && $_POST['cat'] !== 'all' && $_POST['prixmax'] !== '0') :
                //dd($prixmax);
                $products = $productRepository->findByCategoryPrice($param, $cat, $prixmax);
            //dd($products);
            endif;

            // user a séléctionnez la souscatégorie mais pas de prix
            if (isset($_POST['subCat']) && $_POST['subCat'] !== 'all' && $_POST['prixmax'] == '0') :
                $products = $productRepository->findBy(['category' => $subCat]);
            endif;
            // user a selectionné le prix mais pas la souscatégorie
            if (isset($_POST['subCat']) && $_POST['subCat'] == 'all' && $_POST['prixmax'] !== '0') :
                $products = $productRepository->findByPrice($prixmax, $param);
            endif;
            // user a selectionné le prix et la souscategorie
            if (isset($_POST['subCat']) && $_POST['subCat'] !== 'all' && $_POST['prixmax'] !== '0') :
                $products = $productRepository->findByPriceSubCategory($prixmax, $param, $subCat);
            endif;
            return $this->render('home/filterProduct.html.twig', [
                'products' => $products,
                'categories' => $categories,
                'affichage' => $affichage,
                'param' => $param,
                'sousCategories' => $sousCategories
            ]);

        endif;


        return $this->render('home/filterProduct.html.twig', [
            'products' => $products,
            'categories' => $categories,
            'affichage' => $affichage,
            'param' => $param,
            'sousCategories' => $sousCategories
        ]);
    }




    /////////////////////////////////////////////////////////////////////
    ///////////////// VERIFICATION VALIDITÉ CODE PROMO //////////////////

    /**
     * @Route("/verifPromo", name="verifPromo")
     *
     */
    public function verifPromo(Request $request, PromoRepository $promoRepository, PanierService $panierService)
    {

        $affiche = true;
        if (!empty($_POST)) :
            $code = $request->request->get('code');
            $promo = $promoRepository->findOneBy(['code' => $code]);

            if ($promo) :
                $start = $promo->getStartDate();
                $end = $promo->getEndDate();
                //   dd($start < new \DateTime());
                if ($start <= new \DateTime() && $end >= new \DateTime()) :
                    $remise = 0;
                    $panier = $panierService->fullCart();


                    if ($promo->getSection() !== null) :
                        if ($promo->getType() == 0) :
                            foreach ($panier as $item) :
                                //dd($promo->getSection(), $item['product']->getGender());
                                if (strtolower($promo->getSection()) == strtolower($item['product']->getGender())) :
                                    $remise += $item['product']->getPrice() * $promo->getValue() / 100;
                                endif;
                            endforeach;
                        else :
                            $remise = $promo->getValue();
                        endif;
                    endif;
                    if ($promo->getCategory() !== null) :
                        if ($promo->getType() == 0) :
                            foreach ($panier as $item) :
                                if ($promo->getCategory() == $item['product']->getCategory()) :
                                    $remise += $item['product']->getPrice() * $promo->getValue() / 100;
                                endif;
                            endforeach;
                        else :
                            $remise = $promo->getValue();
                        endif;
                    endif;
                    if ($promo->getSubCategory() !== null) :
                        if ($promo->getType() == 0) :
                            foreach ($panier as $item) :
                                if ($promo->getSubCategory() == $item['product']->getCategory()->getSubCategory()) :
                                    $remise += $item['product']->getPrice() * $promo->getValue() / 100;
                                endif;
                            endforeach;
                        else :
                            $remise = $promo->getValue();
                        endif;
                    endif;
                    if ($remise !== 0) :
                        $affiche = false;
                        $this->addFlash('success', 'votre remise est appliquée');
                    endif;
                    $total = $panierService->Total();
                    $totalRemise = $total - $remise;
                    return $this->render('home/cart.html.twig', [
                        'remise' => $remise,
                        'affiche' => $affiche,
                        'items' => $panier,
                        'total' => $total,
                        'totalRemise' => $totalRemise,
                        'titre' => 'Mon panier'

                    ]);


                else :
                    $this->addFlash('danger', 'Code promo invalide');
                    return $this->redirectToRoute('cart');
                endif;


            else :
                $this->addFlash('danger', 'Code promo invalide');
                return $this->redirectToRoute('cart');
            endif;

        endif;


        return $this->redirectToRoute('cart');
    }



    /**
     *@Route("/detailProduct/{id}/{size}/{color}",defaults={"size"=null, "color"=null}, name="detailProduct")
     *@Route("/detailProducta/{id}/{color}/{size}",defaults={"size"=null, "color"=null}, name="detailProducta")
     */
    public function detailProduct(Product $product, $color = null, $size = null)
    {


        return $this->render('home/detailProduct.html.twig', [
            'product' => $product, 'color' => $color, 'size' => $size
        ]);
    }




    /**
     *@Route("/addTempColor/{id}/{color}/{size}", defaults={"size"=null} ,name="addTempColor")
     *
     */
    public function addTempColor(PanierService $panierService, $id, $color)
    {

        $panierService->addColor($id, $color);



        return $this->redirectToRoute('detailProduct', [
            'id' => $id, 'color' => $color, 'size' => null
        ]);
    }



    /**
     *@Route("/addTempSize/{id}/{size}/{color}",defaults={"color"=null}, name="addTempSize")
     *
     */
    public function addTempSize(PanierService $panierService, $id, $size)
    {

        $panierService->addSize($id, $size);


        return $this->redirectToRoute('detailProduct', [
            'id' => $id, 'size' => $size, 'color' => null
        ]);
    }



    /**
     *@Route("/addTempToCart/{id}", name="addTempToCart")
     *
     */
    public function addTempToCart(PanierService $panierService, $id)
    {

        $retour = $panierService->addTempCart();
        //dd($retour);
        if ($retour) :
            $this->addFlash('danger', $retour);
        endif;
        return $this->redirectToRoute('detailProduct', [
            'id' => $id, 'size' => null, 'color' => null
        ]);
    }




    /**
     * @Route("/order", name="order")
     *
     */
    public function order(EntityManagerInterface $manager, PanierService $panierService, StockRepository $stockRepository)
    {
        $panier = $panierService->fullCart();

        foreach ($panier as $item => $value) :
            $stock = $stockRepository->findOneBy(['product' => $value['product'], 'size' => $value['size'], 'color' => $value['color']]);
            if ($stock->getQuantity() < $value['quantity']) :
                $this->addFlash('danger', 'la commande est interrompu,le stock est insuffisant pour ' . $value['product']->getTitle() . '. Stock restant: ' . $stock->getQuantity());
                return $this->redirectToRoute('cart');
            endif;
        endforeach;
        $order = new Order();
        $order->setUser($this->getUser());
        $order->setDate(new \DateTime());


        $delivery = new Delivery();

        $delivery->setStatus(0);
        $delivery->setPredictedDate(new \DateTime('now +3day'));
        $order->setDelivery($delivery);



        foreach ($panier as $item => $value) :
            $stock = $stockRepository->findOneBy(['product' => $value['product'], 'size' => $value['size'], 'color' => $value['color']]);

            $stock->setQuantity($stock->getQuantity() - $value['quantity']);
            $manager->persist($stock);
            // dd($value['product']);
            $achat = new Detail();
            $achat->setProduct($value['product']);
            $achat->setQuantity($value['quantity']);
            $achat->setOrders($order);
            //$manager->clear($achat);
            $manager->merge($achat);



        endforeach;
        $manager->persist($order);
        $manager->persist($delivery);
        $manager->flush();
        $panierService->destroy();
        $this->addFlash('success', 'Merci pour votre achat, suivez votre commande dans votre espace membre');

        return $this->redirectToRoute('home', []);
    }




    /////////////////////////////////////////////////////////////////
    ////////////////// AFFICHAGE COMPTE UTILISATEUR ////////////////

    /**
     * @Route("/profil", name="profil")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function profil()
    {

        $user = $this->getUser();

        return $this->render('security/profil.html.twig', [

            'user' => $user,
        ]);
    }
}
