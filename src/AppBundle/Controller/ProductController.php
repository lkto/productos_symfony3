<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ProductType;


class ProductController extends Controller
{
	  /**
     * @Route("/", name="all_products")
     */
    public function AllAction()
    {



    	$repository = $this->getDoctrine()->getRepository('AppBundle:Product');
    	// find *all* products
		$products = $repository->findAll();
        //dump($products);
        //die();
        return $this->render('Products/all.html.twig',array("products" => $products));
    }

    /**
     * @Route("/new", name="new_products")
     */
    public function newAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm('AppBundle\Form\ProductType', $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            $this->addFlash('message','Agregado correctamente');
            return $this->redirectToRoute('show_productos', array('id' => $product->getId()));
        }
        return $this->render('Products/new.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));



    }


    /**
     * @Route("/show/{id}", name="show_productos")
     */
    public function showAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        // find *all* products
        $products = $repository->findOneById($id);

        return $this->render('Products/show.html.twig',array("product" => $products));
    }


     /**
     * @Route("/edit/{id}", name="edit_product")
     */
    public function EditAction($id)
    {

     $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        // find *all* products
     $products = $repository->findOneById($id);

     if (!$products) {
          
    }

    $form = $this ->createEditForm($products);

    return $this->render('Products/edit.html.twig', array('product' => $products , 'form' => $form->createView()) );       
    }

    private function createEditForm($entity){


        $form = $this -> createForm(productType::class, $entity , array('action'=>$this->generateUrl('update_products', array('id' => $entity->getId())), 'method' => 'PUT'));

        return $form;
    }

      /**
     * @Route("/update/{id}", name="update_products")
     */
    public function UpdateAction($id, Request $request)
    {
       
    $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
    $products = $repository->findOneById($id);
        
    

$form = $this ->createEditForm($products);
$form -> handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {
    $products = $form->getData();

    $em = $this->getDoctrine()->getManager();
    //$em->persist($products);

     $em->flush();
     $this->addFlash(
            'update',
            'Producto modificado correctamente'
        );
     return $this->redirectToRoute('all_products');

      }

       $this->addFlash(
            'warning',
            'A ocurrido un error al intentar modificar el producto'
        );
      return $this->render('Products/edit.html.twig', array('product' => $products , 'form' => $form->createView()) );
      

    }


       /**
     * @Route("/delete/{id}", name="delete_productos")
     */
    public function deleteAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        // find *all* products
        $products = $repository->findOneById($id);

        return $this->render('Products/delete.html.twig',array("product" => $products));
    }

     /**
     * @Route("/delete2/{id}", name="delete_productos2")
     */
    public function eliminarAction($id)
    {
         $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
    $products = $repository->findOneById($id);
    $em = $this->getDoctrine()->getManager();
    $em->persist($products);  
    $em->remove($products);
    $em->flush();

    $this->addFlash(
            'delete',
            'Producto eliminado correctamente'
        );
    return $this->redirectToRoute('all_products');
   
	}




}