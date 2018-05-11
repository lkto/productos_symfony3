<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Brand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\BrandType;


class BrandController extends Controller
{
	/**
     * @Route("/brand", name="all_brand")
     */
    public function AllAction()
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Brand');
        // find *all* products
        $brand = $repository->findAll();
        //dump($products);
        //die();
        return $this->render('Brand/all.html.twig',array("brand" => $brand));
    }

     /**
     * @Route("brand/new", name="new_brand")
     */
    public function newAction(Request $request)
    {
        $form = $this -> createForm(BrandType::class);


        $form -> handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $brand = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
     $em = $this->getDoctrine()->getManager();
     $em->persist($brand);
     $em->flush();
     $this->addFlash(
            'add',
            'Marca guardada correctamente'
        );
        
        return $this->redirectToRoute('all_brand');
      }

       

        return $this->render('Brand/new.html.twig',array("form" => $form->createView() ));


    }

    /**
     * @Route("/brand/edit/{id}", name="edit_brand")
     */
    public function EditAction($id)
    {

     $repository = $this->getDoctrine()->getRepository('AppBundle:Brand');
    $brand = $repository->findOneById($id);

    if (!$brand) {
          
    }

    $form = $this ->createEditForm($brand);

    return $this->render('Brand/edit.html.twig', array('brand' => $brand , 'form' => $form->createView()) );       
    }

    private function createEditForm($entity){


        $form = $this -> createForm(brandType::class, $entity , array('action'=>$this->generateUrl('update_brand', array('id' => $entity->getId())), 'method' => 'PUT'));

        return $form;
    }

     /**
     * @Route("/brand/update/{id}", name="update_brand")
     */
    public function UpdateAction($id, Request $request)
    {
       
    $repository = $this->getDoctrine()->getRepository('AppBundle:Brand');
    $brand = $repository->findOneById($id);
        
    if (!$brand) {
          
    }

    $form = $this ->createEditForm($brand);
    $form -> handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
    $brand = $form->getData();

    $em = $this->getDoctrine()->getManager();
    //$em->persist($products);

     $em->flush();
     $this->addFlash(
            'update',
            'marca modificada correctamente'
        );
     return $this->redirectToRoute('all_brand');

      }
       $this->addFlash(
            'warning',
            'A ocurrido un error al intentar modificar la marca'
        );
      return $this->render('EmberBundle:brand:edit.html.twig', array('brand' => $brand , 'form' => $form->createView()) );
      

    }

     /**
     * @Route("/brand/show/{id}", name="show_brand")
     */
    public function showAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Brand');
        // find *all* products
        $brand = $repository->findOneById($id);

        return $this->render('Brand/show.html.twig',array("brand" => $brand));
    }

    /**
     * @Route("/brand/delete/{id}", name="delete_brand")
     */
    public function deleteAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Brand');
        // find *all* products
        $brand = $repository->findOneById($id);

        return $this->render('Brand/delete.html.twig',array("brand" => $brand));
    }

     /**
     * @Route("/brand/delete2/{id}", name="delete_brand2")
     */
    public function eliminarAction($id)
    {

    $repository1 = $this->getDoctrine()->getRepository('AppBundle:Product');
    $products = $repository1->findOneByBrand($id);
    if (!$products) {
       $repository = $this->getDoctrine()->getRepository('AppBundle:Brand');
    $brand = $repository->findOneById($id);
   
    $em = $this->getDoctrine()->getManager();
     
    $em->persist($brand);  

    $em->remove($brand);

    $this->addFlash(
            'delete',
            'Marca eliminada correctamente'
        );

    $em->flush();
     
    return $this->redirectToRoute('all_brand');
    }
    else
    {

        $this->addFlash(
            'warning',
            'A ocurrido un error al intentar eliminar la marca'
        );
        return $this->redirectToRoute('delete_brand', array('id' => $id));
    }

    
  
   
 }

}