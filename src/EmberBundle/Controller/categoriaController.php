<?php

namespace EmberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EmberBundle\Entity\categoria;
use EmberBundle\Form\categoriaType;
use Symfony\Component\HttpFoundation\Request;

class categoriaController extends Controller
{
   
    /**
     * @Route("/categoria", name="all_categoria")
     */
    public function AllAction()
    {

        $repository = $this->getDoctrine()->getRepository('EmberBundle:categoria');
        // find *all* products
        $categoria = $repository->findAll();
        //dump($products);
        //die();
        return $this->render('EmberBundle:Categoria:all.html.twig',array("categoria" => $categoria));
    }

    /**
     * @Route("categoria/new", name="new_categoria")
     */
    public function newAction(Request $request)
    {
        $form = $this -> createForm(categoriaType::class);


        $form -> handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $categoria = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
     $em = $this->getDoctrine()->getManager();
     $em->persist($categoria);
     $em->flush();
     $this->addFlash(
            'add',
            'Categoria guardada correctamente'
        );
        
        return $this->redirectToRoute('all_categoria');
      }

         
        return $this->render('EmberBundle:Categoria:new.html.twig',array("form" => $form->createView() ));


    }

     /**
     * @Route("/categoria/edit/{id}", name="edit_categoria")
     */
    public function EditAction($id)
    {

     $repository = $this->getDoctrine()->getRepository('EmberBundle:categoria');
    $categoria = $repository->findOneById($id);

    if (!$categoria) {
          
    }

    $form = $this ->createEditForm($categoria);

    return $this->render('EmberBundle:Categoria:edit.html.twig', array('categoria' => $categoria , 'form' => $form->createView()) );       
    }

    private function createEditForm(categoria $entity){


        $form = $this -> createForm(categoriaType::class, $entity , array('action'=>$this->generateUrl('update_categoria', array('id' => $entity->getId())), 'method' => 'PUT'));

        return $form;
    }

     /**
     * @Route("/categoria/update/{id}", name="update_categoria")
     */
    public function UpdateAction($id, Request $request)
    {
       
    $repository = $this->getDoctrine()->getRepository('EmberBundle:categoria');
    $categoria = $repository->findOneById($id);
        
    if (!$categoria) {
          
    }

    $form = $this ->createEditForm($categoria);
    $form -> handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
    $categoria = $form->getData();

    $em = $this->getDoctrine()->getManager();
    //$em->persist($products);

     $em->flush();
     $this->addFlash(
            'update',
            'Categoria modificada correctamente'
        );
     return $this->redirectToRoute('all_categoria');

      }

      $this->addFlash(
            'warning',
            'A ocurrido un error al intentar modificar la categoria'
        );

      return $this->render('EmberBundle:Categoria:edit.html.twig', array('categoria' => $categoria , 'form' => $form->createView()) );
      

    }


    /**
     * @Route("/categoria/show/{id}", name="show_categoria")
     */
    public function showAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('EmberBundle:categoria');
        // find *all* products
        $categoria = $repository->findOneById($id);

        return $this->render('EmberBundle:Categoria:show.html.twig',array("categoria" => $categoria));
    }

    /**
     * @Route("/categoria/delete/{id}", name="delete_categoria")
     */
    public function deleteAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('EmberBundle:categoria');
        // find *all* products
        $categoria = $repository->findOneById($id);

        return $this->render('EmberBundle:Categoria:delete.html.twig',array("categoria" => $categoria));
    }

     /**
     * @Route("/categoria/eliminar/{id}", name="eliminar_categoria")
     */
    public function eliminarAction($id)
    {

    $repository1 = $this->getDoctrine()->getRepository('EmberBundle:productos');
    $productos = $repository1->findOneBycategoriaId($id);
    if (!$productos) {
       $repository = $this->getDoctrine()->getRepository('EmberBundle:categoria');
    $categoria = $repository->findOneById($id);
   
    $em = $this->getDoctrine()->getManager();
     
    $em->persist($categoria);  

    $em->remove($categoria);

    $em->flush();

    $this->addFlash(
            'delete',
            'Categoria eliminada correctamente'
        );
     
    return $this->redirectToRoute('all_categoria');
    }
    else
    {

        $this->addFlash(
            'warning',
            'A ocurrido un error al intentar eliminar la categoria'
        );
        return $this->redirectToRoute('delete_categoria', array('id' => $id));
    }

    
  
   
}


    
}
