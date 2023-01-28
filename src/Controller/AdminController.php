<?php

namespace App\Controller;

use DateTime;
use App\Entity\Size;
use App\Entity\Color;
use App\Entity\Order;
use App\Entity\Promo;
use App\Entity\Stock;
use App\Entity\Detail;
use App\Form\SizeType;
use App\Entity\Product;
use App\Form\ColorType;
use App\Entity\Category;
use App\Entity\Delivery;
use App\Entity\Suppliers;
use App\Form\ProductType;
use App\Form\CategoryType;
use App\Entity\SubCategory;
use App\Form\SuppliersType;
use App\Form\SubCategoryType;
use App\Repository\SizeRepository;
use App\Repository\ColorRepository;
use App\Repository\OrderRepository;
use App\Repository\PromoRepository;
use App\Repository\StockRepository;
use App\Repository\ProductRepository;
use App\Service\Panier\PanierService;
use App\Repository\CategoryRepository;
use App\Repository\DeliveryRepository;
use App\Repository\SuppliersRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SubCategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;




/**
 * @IsGranted("ROLE_ADMIN")
 * 
 */
class AdminController extends AbstractController
{

    ////////////////////////////  AJOUT PRODUIT ////////////////////////////////////////

    /**
     * @Route("/addProduct", name="addProduct")
     */
    public function addProduct(Request $request, EntityManagerInterface $manager)
    {
        // ici nous allons creer un formulaire via le packager de symfony, au péalable nous avons renseigné à twig d'utiliser bootstrap 5 dans config/package/twig.yaml, en copiant   form_themes: ['bootstrap_5_layout.html.twig'] sous default_path

        // ici on instancie un nouvel objet product, vide a present, que le formulaire de symfony remplira automatiquement à la soumission du formulaire 
        $product = new Product();

        // nous avons crée une classe ProductType (dans form/ProductType) qui permet de generer le formulaire d'ajout de produit, il faut dans le controlleur importer cette classe et relier le formulaire a notre instanciation d'entité product
        $form = $this->createForm(ProductType::class, $product, ['add' => true]);
        //Param : Form:ProductType  , Entity: $product= new Product()

        // on va chercher dans l'objet handlerequest qui permet de recuperer chaques données saisies des champs de formulaire. Il s'assure de la coordinantion entre productType et $product afin de générer les bons setteurs pour chaques propriete de l'entité
        // les donnees du formulaire transitant en POST il nous faut appeler la classe REQUEST (de http/foundation) qui permet de véhiculer les informations des superglobales ($_GET, $_POST, $_COOKIE...)
        $form->handleRequest($request);


        // ici on va informer par la condition if que si le bouton submit a été pressé et que le donnees du formulaire sont conforme à notre entité  et à nos contraintes, il peut faire intervenir doctrine (notre ORM) et son manager pour preparer puis executer la requete
        if ($form->isSubmitted() && $form->isValid()) :

            // on recupere ici tte les donnees de notre input file ayant pour name=>"picture"
            $file = $form->get('picture')->getData();


            //ici on place une condition pour verifier qu'une photo a bien été uploadée
            if ($file) :
                $fileName = date('YmdHis') . '-' . uniqid() . '-' . $file->getClientOriginalName();

                // envoie dans public/upload

                try {

                    $file->move($this->getParameter('upload_directory'), $fileName);
                    // la methode move attend 2 parametres  et permet de déplacer le fichier des fichiers temporaires du server vers un emplacement défini
                    // param1 : emplacement défini, parametrer au préalable dans config/services.yaml
                    // upload_directory : '%kernel.project_dir%/public/upload'
                    //param 2 : le nom du fichier à déplacer
                } catch (FileException $exception) {
                    $this->redirectToRoute('addProduct', [
                        'erreur' => $exception
                    ]);
                }
                // l'ojet $product n'etant pas setter sur l'information picture (picture etant un input de type file et les donnees attendu en bdd etant de type string=> le nom du ficher)
                $product->setPicture($fileName);

                // on demande au manager de Doctrine de preparer la requete
                $manager->persist($product);

                // on execute les requetes
                $manager->flush($product);

                // Affichage message
                $this->addFlash('success', 'Le produit a bien été enregistré, merci de renseigner les stocks');

                foreach ($product->getColors() as $color) :
                    foreach ($product->getSizes() as $size) :
                        $stock = new Stock();
                        $stock->setProduct($product)->setSize($size)->setColor($color);
                        $manager->persist($stock);

                    endforeach;
                endforeach;
                $manager->flush();

                // redirection après insert vers 
                return $this->redirectToRoute('listStock');



            endif;



        endif;


        return $this->render('admin/addProduct.html.twig', [
            'form' => $form->createView(),
            'titre' => 'Ajout de produit'

        ]);
    }

    ////////////////////////////  LISTE PRODUIT ////////////////////////////////////////

    /**
     * @Route("/listProduct", name="listProduct")
     */
    public function listProduct(ProductRepository $repository)
    {
        $products = $repository->findAll();

        return $this->render('admin/listProduct.html.twig', [
            'products' => $products
        ]);
    }



    ////////////////////////////  MODIFICATION PRODUIT ////////////////////////////////////////

    /**
     * @Route("/editProduct/{id}", name="editProduct")
     */
    public function editProduct(Request $request, EntityManagerInterface $manager, Product $product, StockRepository $stockRepository)
    {


        $form = $this->createForm(ProductType::class, $product, ['edit' => true]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) :

            $file = $form->get('editPicture')->getData();

            if ($file) :
                $fileName = date('YmdHis') . '-' . uniqid() . '-' . $file->getClientOriginalName();

                try {

                    $file->move($this->getParameter('upload_directory'), $fileName);
                    unlink($this->getParameter('upload_directory') . '/' . $product->getPicture());
                } catch (FileException $exception) {
                    $this->redirectToRoute('editProduct', [
                        'erreur' => $exception
                    ]);
                }

                $product->setPicture($fileName);


            endif;

            $manager->persist($product);


            foreach ($product->getColors() as $color) :
                foreach ($product->getSizes() as $size) :
                    $find  = $stockRepository->findOneBy(['product' => $product, 'size' => $size, 'color' => $color]);
                    if (!$find) :
                        $stock = new Stock();
                        $stock->setProduct($product)->setSize($size)->setColor($color);
                        $manager->persist($stock);
                    endif;
                endforeach;
            endforeach;


            $manager->flush($product);

            $this->addFlash('success', 'Le produit a bien été modifié');

            return $this->redirectToRoute('listProduct');

        endif;


        return $this->render('admin/editProduct.html.twig', [
            'form' => $form->createView(),
            'titre' => 'Modification de produit',
            'product' => $product

        ]);
    }




    ////////////////////////////  SUPPRESSION PRODUIT ////////////////////////////////////////

    /**
     * @Route("/deleteProduct/{id}", name="deleteProduct")
     */
    public function deleteProduct(EntityManagerInterface $manager, Product $product)
    {

        unlink($this->getParameter('upload_directory') . '/' . $product->getPicture());
        $manager->remove($product);
        $manager->flush();

        $this->addFlash('success', 'Le produit a bien été supprimé');
        return $this->redirectToRoute('listProduct');
    }


    ////////////////////////////  AJOUT & EDITION CATEGORIE ////////////////////////////////////////

    /**
     * @Route("/category", name="category")
     * @Route("/editCategory/{id}", name="editCategory")
     */
    public function category(Request $request, EntityManagerInterface $manager, CategoryRepository $repository, $id = null)
    {

        $categories = $repository->findAll();


        if (!empty($id)) :
            $category = $repository->find($id);
        else :
            $category = new Category();
        endif;



        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) :

            $manager->persist($category);
            $manager->flush();

            if (!empty($id)) :
                $this->addFlash('success', 'sous-catégorie modifiée');
            else :
                $this->addFlash('success', 'sous-catégorie ajoutée');
            endif;


            return $this->redirectToRoute('category');

        endif;



        return $this->render('admin/category.html.twig', [
            'form' => $form->createView(),
            'categories' => $categories,
            'titre' => 'Gestion sous-catégories'

        ]);
    }


    ////////////////////////////  SUPPRESSION CATEGORIE ////////////////////////////////////////


    /**
     * @Route("/deleteCategory/{id}", name="deleteCategory")
     */
    public function deleteCategory(Category $category, EntityManagerInterface $manager)
    {
        $manager->remove($category);
        $manager->flush();
        $this->addFlash('success', 'sous-catégorie supprimée');


        return $this->redirectToRoute('category', []);
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////  AJOUT & EDITION SOUS-CATEGORIE ////////////////////////////////////////

    /**
     * @Route("/subCategory", name="subCategory")
     * @Route("/editSubCategory/{id}", name="editSubCategory")
     */
    public function subCategory(Request $request, EntityManagerInterface $manager, SubCategoryRepository $repository, $id = null)
    {

        $subCategories = $repository->findAll();


        if (!empty($id)) :
            $subCategory = $repository->find($id);
        else :
            $subCategory = new SubCategory();
        endif;



        $form = $this->createForm(SubCategoryType::class, $subCategory);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) :

            $manager->persist($subCategory);
            $manager->flush();

            if (!empty($id)) :
                $this->addFlash('success', 'Catégorie modifiée');
            else :
                $this->addFlash('success', 'Catégorie ajoutée');
            endif;


            return $this->redirectToRoute('subCategory');

        endif;



        return $this->render('admin/subCategory.html.twig', [
            'form' => $form->createView(),
            'subCategories' => $subCategories,
            'titre' => 'Gestion catégories'

        ]);
    }


    ////////////////////////////  SUPPRESSION SOUS-CATEGORIE ////////////////////////////////////////


    /**
     * @Route("/deleteSubCategory/{id}", name="deleteSubCategory")
     */
    public function deleteSubCategory(SubCategory $subCategory, EntityManagerInterface $manager)
    {
        $manager->remove($subCategory);
        $manager->flush();
        $this->addFlash('success', 'Catégorie supprimée');


        return $this->redirectToRoute('subCategory', []);
    }


    



    ////////////// LISTE DES COMMANDES //////////////////////
    ////////////////////////////////////////////////////////
    /**
     *@Route("/listOrder", name="listOrder")
     *
     */
    public function listOrder(OrderRepository $repository)
    {

        $orders = $repository->findAll();

        return $this->render('admin/listOrder.html.twig', [
            'orders' => $orders
        ]);
    }


    ////////////// DETAIL COMMANDE  + STATUT LIVRAISON //////////////////////
    ////////////////////////////////////////////////////////////////////////

    /**
     *@Route("/detailOrder/{id}", name="detailOrder")
     *
     */
    public function detailOrder(OrderRepository $orderRepository, DeliveryRepository $deliveryRepository, Request $request, EntityManagerInterface $manager, $id)
    {
        // AFFICHAGE DETAIL COMMANDE
        $order = $orderRepository->find($id);

        // MàJ STATUT LIVRAISON
        if (!empty($_POST)) {
            $delivery = $order->getDelivery();
            $predictedDate = $request->request->get('predictedDate');
            $status = $request->request->get('status');
            $delivery->setPredictedDate(new DateTime($predictedDate));
            $delivery->setStatus($status);

            $manager->persist($delivery);
            $manager->flush();
            $this->addFlash('success', 'Livraison mise à jour');

            return $this->render('admin/detailOrder.html.twig', [
                'order' => $order
            ]);
        }

        return $this->render('admin/detailOrder.html.twig', [
            'order' => $order
        ]);
    }


    ////////////// LISTE PROMO  //////////////////////
    ////////////////////////////////////////////////////

    /**
     * @Route("/listPromo", name="listPromo")
     */
    public function listPromo(PromoRepository $repository)
    {

        $promos = $repository->findBy([], ['startDate' => 'DESC']);


        return $this->render('admin/listPromo.html.twig', [
            'promos' => $promos
        ]);
    }


    ////////////// AJOUT PROMO  //////////////////////
    ////////////////////////////////////////////////////

    /**
     * @Route("/addPromo/{param}", name="addPromo")
     *
     */
    public function addPromo(CategoryRepository $subCategoryRepository, SubCategoryRepository $categoryRepository, Request $request, EntityManagerInterface $manager, ProductRepository $productRepository, $param)
    {

        $categories = $categoryRepository->findAll();
        $subCategories = $subCategoryRepository->findAll();

        if (!empty($_POST)) :

            $code = $request->request->get('code');
            $startDate = $request->request->get('startDate');
            $endDate = $request->request->get('endDate');
            $type = $request->request->get('type');
            $value = $request->request->get('value');

            $promo = new Promo();
            $promo->setCode($code);
            $promo->setType($type);
            $promo->setValue($value);

            //dd($_POST);
            if (empty($startDate)) :
                $promo->setStartDate(null);
            else :
                $promo->setStartDate(new \DateTime($startDate));
            endif;

            if (empty($endDate)) :
                $promo->setEndDate(null);
            else :
                $promo->setEndDate(new \DateTime($endDate));
            endif;

            if ($param == 'section') :
                $products = $productRepository->findBy(['gender' => $request->request->get('section')]);

                $promo->setSection($request->request->get('section'));

                foreach ($products as $product) :
                    $product->setPromo($promo);
                    $manager->persist($product);

                endforeach;


            endif;
            if ($param == 'category') :
                $category = $categoryRepository->find($request->request->get('category'));
                $promo->setSubCategory($category);

            endif;
            if ($param == 'subCategory') :
                $subCategory = $subCategoryRepository->find($request->request->get('subCategory'));
                $promo->setCategory($subCategory);

            endif;
            $manager->persist($promo);
            $manager->flush();

            $this->addFlash('success', 'Code promo ajouté');
            return $this->redirectToRoute('listPromo');

        endif;

        return $this->render('admin/addPromo.html.twig', [
            'param' => $param,
            'categories' => $categories,
            'subCategories' => $subCategories
        ]);
    }


    ////////////// EDITION PROMO  //////////////////////
    ////////////////////////////////////////////////////

    /**
     *@Route("/editPromo/{id}/{param}", name="editPromo")
     *@Route("editParam")
     * 
     */
    public function editPromo(CategoryRepository $subCategoryRepository, SubCategoryRepository $categoryRepository, Request $request, EntityManagerInterface $manager, ProductRepository $productRepository, PromoRepository $promoRepository, $id, $param)
    {

        $categories = $categoryRepository->findAll();
        $subCategories = $subCategoryRepository->findAll();

        $promo = $promoRepository->find($id);


        if (!empty($_POST)) :
            $code = $request->request->get('code');
            $startDate = $request->request->get('startDate');
            $endDate = $request->request->get('endDate');
            $type = $request->request->get('type');
            $value = $request->request->get('value');

            $promo->setCode($code);
            $promo->setType($type);
            $promo->setValue($value);


            if (empty($startDate)) :
                $promo->setStartDate(null);
            else :
                $promo->setStartDate(new \DateTime($startDate));
            endif;

            if (empty($endDate)) :
                $promo->setEndDate(null);
            else :
                $promo->setEndDate(new \DateTime($endDate));
            endif;

            if ($param == 'section') :
                $products = $productRepository->findBy(['gender' => $request->request->get('section')]);
                $promo->setCategory(null);
                $promo->setsubCategory(null);

                $promo->setSection($request->request->get('section'));

                foreach ($products as $product) :
                    $product->setPromo($promo);
                    $manager->persist($product);

                endforeach;


            endif;
            if ($param == 'category') :
                $category = $categoryRepository->find($request->request->get('category'));
                $promo->setSubCategory($category);

                $promo->setCategory(null);
                $promo->setSection(null);

            endif;
            if ($param == 'subCategory') :
                $subCategory = $subCategoryRepository->find($request->request->get('subCategory'));
                $promo->setCategory($subCategory);

                $promo->setsubCategory(null);
                $promo->setSection(null);

            endif;
            $manager->persist($promo);
            $manager->flush();

            $this->addFlash('success', 'Code promo modifié');
            return $this->redirectToRoute('listPromo');


        endif;


        return $this->render('admin/editPromo.html.twig', [
            'promo' => $promo,
            'param' => $param,
            'categories' => $categories,
            'subCategories' => $subCategories
        ]);
    }



    ////////////// SUPPRESSION CODE PROMO  //////////////////////
    ////////////////////////////////////////////////////

    /**
     * @Route("/deletePromo/{id}", name="deletePromo")
     */
    public function deletePromo(PromoRepository $promoRepository, EntityManagerInterface $manager, ProductRepository $productRepository, $id)
    {


        $promo = $promoRepository->find($id);


        if ($promo->getSection() !== null) {

            $products = $productRepository->findBy(['gender' => $promo->getSection()]);
        }

        foreach ($products as $product) {
            $product->setPromo(null);
            $manager->persist($product);
        }



        $manager->remove($promo);
        $manager->flush();

        $this->addFlash('success', 'Code promo supprimé');

        return $this->redirectToRoute('listPromo');
    }





    /**
     * @Route("/stock/{id}", name="stock")
     *
     */
    public function stock(Request $request, Stock $stock, EntityManagerInterface $manager, $id)
    {


        if (!empty($_POST)) :

            $value = $request->request->get('value');



            $stock->setQuantity($value);

            $manager->persist($stock);
            $manager->flush();
            $this->addFlash('success', 'stock déclaré');
            return $this->redirectToRoute('listStock');


        endif;


        return $this->render('admin/stock.html.twig', [
            'stock' => $stock
        ]);
    }



    /**
     * @Route("/listStock", name="listStock")
     *
     */
    public function listStock(StockRepository $stockRepository)
    {

        $stocks = $stockRepository->findBy([], ['product' => 'ASC']);

        return $this->render('admin/listStock.html.twig', [
            'stocks' => $stocks
        ]);
    }


    /**
     *@Route("/searchRef", name="searchRef")
     *
     */
    public function searchRef(Request $request, StockRepository $stockRepository)
    {

        $search = $request->request->get('search');
        $stocks = $stockRepository->findBySearch($search);


        return $this->render('admin/listStock.html.twig', [
            'stocks' => $stocks
        ]);
    }



    /**
     * @Route("/listSuppliers", name="listSuppliers")
     * @Route("/editSuppliers/{id}", name="editSuppliers")
     */
    public function addSuppliers(Request $request, EntityManagerInterface $manager, SuppliersRepository $repository, $id = null)
    {

        $suppliers = $repository->findAll();

        if (!empty($id)) {
            $supplier = $repository->find($id);
        } else {
            $supplier = new Suppliers();
        }

        $form = $this->createForm(SuppliersType::class, $supplier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($supplier);
            $manager->flush();

            if (!empty($id)) {
                $this->addFlash('success', 'Fournisseur modifié');
            } else {
                $this->addFlash('success', 'Fournisseur ajouté');
            }

            return $this->redirectToRoute('listSuppliers');
        }

        return $this->render('admin/listSuppliers.html.twig', [
            'form' => $form->createView(),
            'suppliers' => $suppliers,
            'titre' => 'Gestion des fournisseurs'
        ]);
    }

    /**
     * @Route("/deleteSuppliers/{id}", name="deleteSuppliers")
     *
     */
    public function deleteSuppliers(Suppliers $suppliers, SuppliersRepository $repository, EntityManagerInterface $manager, $id)

    {
        $suppliers = $repository->find($id);

        $manager->remove($suppliers);
        $manager->flush();

        $this->addFlash('success', 'Le fournisseur a bien été supprimé');

        return $this->redirectToRoute('listSuppliers');
    }






    /**
     * @Route("/listSize", name="listSize")
     * @Route("/editSize/{id}", name="editSize")
     */
    public function listSize(SizeRepository $repository, EntityManagerInterface $manager, Request $request, $id = null)
    {

        $sizes = $repository->findAll();

        if (!empty($id)) {
            $size = $repository->find($id);
        } else {
            $size = new Size();
        }




        $form = $this->createForm(SizeType::class, $size);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($size);
            $manager->flush();

            if (!empty($id)) {
                $this->addFlash('success', 'Taille modifiée');
            } else {
                $this->addFlash('success', 'Taille ajoutée');
            }


            return $this->redirectToRoute('listSize');
        }


        return $this->render('admin/listSize.html.twig', [
            'form' => $form->createView(),
            'sizes' => $sizes,
            'titre' => 'Gestion des tailles'
        ]);
    }

    /**
     * @Route("/deleteSize/{id}", name="deleteSize")
     */
    public function deleteSize(Size $size, EntityManagerInterface $manager)
    {
        $manager->remove($size);
        $manager->flush();
        $this->addFlash('success', 'Taille supprimée');


        return $this->redirectToRoute('listSize');
    }




    /**
     * @Route("/color", name="color")
     * @Route("/editColor/{id}",name="editColor")
     */
    public function color(Request $request, EntityManagerInterface $manager, ColorRepository $repository, $id = null)

    {
        $colors = $repository->findAll();

        if (!empty($id)) :
            $color = $repository->find($id);
        else :
            $color = new Color();
        endif;

        $form = $this->createForm(ColorType::class, $color);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) :

            $manager->persist($color);
            $manager->flush();

            if (!empty($id)) :
                $this->addFlash('success', 'couleur modifiée');
            else :
                $this->addFlash('success', 'couleur ajoutée');
            endif;

            return $this->redirectToRoute('color');

        endif;

        //dd($form);
        return $this->render('admin/color.html.twig', [
            'form' => $form->createView(),
            'colors' => $colors,
            'title' => 'Gestion des couleurs'

        ]);
    }

    /**
     * @Route("/deleteColor/{id}" ,name="deleteColor")
     */
    public function deleteColor(Color $color, EntityManagerInterface $manager)
    {
        $manager->remove($color);
        $manager->flush();
        $this->addFlash(
            'success',
            'couleur supprimée'
        );

        return $this->redirectToRoute('color');
    }
}
