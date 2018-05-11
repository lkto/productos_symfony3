<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\CategoryType;


class CategoryController extends Controller
{
	/**
     * @Route("/category", name="all_category")
     */
    public function AllAction()
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
        // find *all* products
        $category = $repository->findAll();
        //dump($products);
        //die();
        return $this->render('Category/all.html.twig',array("category" => $category));
    }

    /**
     * @Route("category/new", name="new_category")
     */
    public function newAction(Request $request)
    {
        $form = $this -> createForm(CategoryType::class);


        $form -> handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $category = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
     $em = $this->getDoctrine()->getManager();
     $em->persist($category);
     $em->flush();
     $this->addFlash(
            'add',
            'Categoria guardada correctamente'
        );
        
        return $this->redirectToRoute('all_category');
      }

         
        return $this->render('Category/new.html.twig',array("form" => $form->createView() ));


    }

     /**
     * @Route("/category/edit/{id}", name="edit_category")
     */
    public function EditAction($id)
    {

     $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
    $category = $repository->findOneById($id);

    if (!$category) {
          
    }

    $form = $this ->createEditForm($category);

    return $this->render('Category/edit.html.twig', array('category' => $category , 'form' => $form->createView()) );       
    }

    private function createEditForm($entity){


        $form = $this -> createForm(CategoryType::class, $entity , array('action'=>$this->generateUrl('update_category', array('id' => $entity->getId())), 'method' => 'PUT'));

        return $form;
    }

     /**
     * @Route("/category/update/{id}", name="update_category")
     */
    public function UpdateAction($id, Request $request)
    {
       
    $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
    $category = $repository->findOneById($id);
        
    if (!$category) {
          
    }

    $form = $this ->createEditForm($category);
    $form -> handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
    $category = $form->getData();

    $em = $this->getDoctrine()->getManager();
    //$em->persist($products);

     $em->flush();
     $this->addFlash(
            'update',
            'Categoria modificada correctamente'
        );
     return $this->redirectToRoute('all_category');

      }

      $this->addFlash(
            'warning',
            'A ocurrido un error al intentar modificar la categoria'
        );

      return $this->render('Category/edit.html.twig', array('category' => $category , 'form' => $form->createView()) );
      

    }

     /**
     * @Route("/category/show/{id}", name="show_category")
     */
    public function showAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
        // find *all* products
        $category = $repository->findOneById($id);

        return $this->render('Category/show.html.twig',array("category" => $category));
    }

    /**
     * @Route("/category/delete/{id}", name="delete_category")
     */
    public function deleteAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
        // find *all* products
        $category = $repository->findOneById($id);

        return $this->render('Category/delete.html.twig',array("category" => $category));
    }

     /**
     * @Route("/category/delete2/{id}", name="delete_category2")
     */
    public function eliminarAction($id)
    {

    $repository1 = $this->getDoctrine()->getRepository('AppBundle:Product');
    $products = $repository1->findOneBycategory($id);
    if (!$products) {
       $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
    $category = $repository->findOneById($id);
   
    $em = $this->getDoctrine()->getManager();
     
    $em->persist($category);  

    $em->remove($category);

    $em->flush();

    $this->addFlash(
            'delete',
            'Categoria eliminada correctamente'
        );
     
    return $this->redirectToRoute('all_category');
    }
    else
    {

        $this->addFlash(
            'warning',
            'A ocurrido un error al intentar eliminar la categoria'
        );
        return $this->redirectToRoute('delete_category', array('id' => $id));
    }

    
  
   
}

}
