<?php

namespace EmberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EmberBundle\Entity\marca;
use EmberBundle\Form\marcaType;
use Symfony\Component\HttpFoundation\Request;

class marcaController extends Controller
{
   
    /**
     * @Route("/marca", name="all_marca")
     */
    public function AllAction()
    {

        $repository = $this->getDoctrine()->getRepository('EmberBundle:marca');
        // find *all* products
        $marca = $repository->findAll();
        //dump($products);
        //die();
        return $this->render('EmberBundle:Marca:all.html.twig',array("marca" => $marca));
    }

    /**
     * @Route("marca/new", name="new_marca")
     */
    public function newAction(Request $request)
    {
        $form = $this -> createForm(marcaType::class);


        $form -> handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $marca = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
     $em = $this->getDoctrine()->getManager();
     $em->persist($marca);
     $em->flush();
     $this->addFlash(
            'add',
            'Marca guardada correctamente'
        );
        
        return $this->redirectToRoute('all_marca');
      }

       

        return $this->render('EmberBundle:Marca:new.html.twig',array("form" => $form->createView() ));


    }

     /**
     * @Route("/marca/edit/{id}", name="edit_marca")
     */
    public function EditAction($id)
    {

     $repository = $this->getDoctrine()->getRepository('EmberBundle:marca');
    $marca = $repository->findOneById($id);

    if (!$marca) {
          
    }

    $form = $this ->createEditForm($marca);

    return $this->render('EmberBundle:Marca:edit.html.twig', array('marca' => $marca , 'form' => $form->createView()) );       
    }

    private function createEditForm(marca $entity){


        $form = $this -> createForm(marcaType::class, $entity , array('action'=>$this->generateUrl('update_marca', array('id' => $entity->getId())), 'method' => 'PUT'));

        return $form;
    }

     /**
     * @Route("/marca/update/{id}", name="update_marca")
     */
    public function UpdateAction($id, Request $request)
    {
       
    $repository = $this->getDoctrine()->getRepository('EmberBundle:marca');
    $marca = $repository->findOneById($id);
        
    if (!$marca) {
          
    }

    $form = $this ->createEditForm($marca);
    $form -> handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
    $marca = $form->getData();

    $em = $this->getDoctrine()->getManager();
    //$em->persist($products);

     $em->flush();
     $this->addFlash(
            'update',
            'Marca modificada correctamente'
        );
     return $this->redirectToRoute('all_marca');

      }
       $this->addFlash(
            'warning',
            'A ocurrido un error al intentar modificar la marca'
        );
      return $this->render('EmberBundle:Marca:edit.html.twig', array('marca' => $marca , 'form' => $form->createView()) );
      

    }


    /**
     * @Route("/marca/show/{id}", name="show_marca")
     */
    public function showAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('EmberBundle:marca');
        // find *all* products
        $marca = $repository->findOneById($id);

        return $this->render('EmberBundle:Marca:show.html.twig',array("marca" => $marca));
    }

    /**
     * @Route("/marca/delete/{id}", name="delete_marca")
     */
    public function deleteAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('EmberBundle:marca');
        // find *all* products
        $marca = $repository->findOneById($id);

        return $this->render('EmberBundle:Marca:delete.html.twig',array("marca" => $marca));
    }

     /**
     * @Route("/marca/eliminar/{id}", name="eliminar_marca")
     */
    public function eliminarAction($id)
    {

    $repository1 = $this->getDoctrine()->getRepository('EmberBundle:productos');
    $productos = $repository1->findOneBymarcaId($id);
    if (!$productos) {
       $repository = $this->getDoctrine()->getRepository('EmberBundle:marca');
    $marca = $repository->findOneById($id);
   
    $em = $this->getDoctrine()->getManager();
     
    $em->persist($marca);  

    $em->remove($marca);

    $this->addFlash(
            'delete',
            'Marca eliminada correctamente'
        );

    $em->flush();
     
    return $this->redirectToRoute('all_marca');
    }
    else
    {

        $this->addFlash(
            'warning',
            'A ocurrido un error al intentar eliminar la marca'
        );
        return $this->redirectToRoute('delete_marca', array('id' => $id));
    }

    
  
   
}


    
}
