<?php

namespace EmberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EmberBundle\Entity\productos;
use EmberBundle\Form\productosType;
use Symfony\Component\HttpFoundation\Request;


class EventosController extends Controller
{
    
     /**
     * @Route("/", name="all_productos")
     */
    public function AllAction()
    {

    	$repository = $this->getDoctrine()->getRepository('EmberBundle:productos');
    	// find *all* products
		$products = $repository->findAll();
        //dump($products);
        //die();
        return $this->render('EmberBundle:Productos:all.html.twig',array("productos" => $products));
    }

     /**
     * @Route("/new", name="new_productos")
     */
    public function newAction(Request $request)
    {
        $form = $this -> createForm(productosType::class);


        $form -> handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $products = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
     $em = $this->getDoctrine()->getManager();
     $em->persist($products);
     $em->flush();

     $this->addFlash(
            'add',
            'Producto guardada correctamente'
        );

        return $this->redirectToRoute('all_productos');
      }

        return $this->render('EmberBundle:Productos:new.html.twig',array("form" => $form->createView() ));


    }

   
     /**
     * @Route("/edit/{id}", name="edit_productos")
     */
    public function EditAction($id)
    {

     $repository = $this->getDoctrine()->getRepository('EmberBundle:productos');
    $productos = $repository->findOneByCodigo($id);

    if (!$productos) {
          
    }

    $form = $this ->createEditForm($productos);

    return $this->render('EmberBundle:Productos:edit.html.twig', array('producto' => $productos , 'form' => $form->createView()) );       
    }

    private function createEditForm(productos $entity){


        $form = $this -> createForm(productosType::class, $entity , array('action'=>$this->generateUrl('update_productos', array('id' => $entity->getCodigo())), 'method' => 'PUT'));

        return $form;
    }

      /**
     * @Route("/update/{id}", name="update_productos")
     */
    public function UpdateAction($id, Request $request)
    {
       
    $repository = $this->getDoctrine()->getRepository('EmberBundle:productos');
    $productos = $repository->findOneByCodigo($id);
        
    if (!$productos) {
          
    }

$form = $this ->createEditForm($productos);
$form -> handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {
    $products = $form->getData();

    $em = $this->getDoctrine()->getManager();
    //$em->persist($products);

     $em->flush();
     $this->addFlash(
            'update',
            'Producto modificada correctamente'
        );
     return $this->redirectToRoute('all_productos');

      }

       $this->addFlash(
            'warning',
            'A ocurrido un error al intentar modificar el producto'
        );
      return $this->render('EmberBundle:Productos:edit.html.twig', array('producto' => $productos , 'form' => $form->createView()) );
      

    }





    /**
     * @Route("/show/{id}", name="show_productos")
     */
    public function showAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('EmberBundle:productos');
        // find *all* products
        $products = $repository->findOneByCodigo($id);

        return $this->render('EmberBundle:Productos:show.html.twig',array("producto" => $products));
    }


       /**
     * @Route("/delete/{id}", name="delete_productos")
     */
    public function deleteAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('EmberBundle:productos');
        // find *all* products
        $products = $repository->findOneByCodigo($id);

        return $this->render('EmberBundle:Productos:delete.html.twig',array("producto" => $products));
    }

     /**
     * @Route("/eliminar/{id}", name="eliminar_productos")
     */
    public function eliminarAction($id)
    {
         $repository = $this->getDoctrine()->getRepository('EmberBundle:productos');
    $productos = $repository->findOneByCodigo($id);
    $em = $this->getDoctrine()->getManager();
    $em->persist($productos);  
    $em->remove($productos);
    $em->flush();

    $this->addFlash(
            'delete',
            'Producto eliminada correctamente'
        );
    return $this->redirectToRoute('all_productos');
   
}
}
