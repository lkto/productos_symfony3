<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('category', EntityType::class,
          array(
                'label_format' => '* Categoría',
                'class' => 'AppBundle:Category',
                'choice_label' => 'name',
                'attr'    =>array('class'=>'form-control')
              )
        )
        ->add('brand', EntityType::class,
          array(
                'label_format' => '* Marca',
                'class' => 'AppBundle:Brand',
                'choice_label' => 'name',
                'attr'    =>array('class'=>'form-control')
              )
        )->add('code', TextType::class, array('label_format' => '* Código (único, no puede contener carácteres especiales ni espacios, longitud entre 4 y 10 carácteres )','attr'=>array('class'=>'form-control')))
        ->add('name', TextType::class, array('label_format' => '* Nombre (único, debe contener mínimo 4 caracteres )','attr'=>array('class'=>'form-control')))
        ->add('description', TextareaType::class, array('label_format' => '* Descripción','attr'=>array('class'=>'form-control')))
        ->add('price', MoneyType::class, array('label_format' => '* Precio (Debe ser un número válido)','attr'=>array( 'class'=>'form-control')))
        ->add('Guardar', SubmitType::class) ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_product';
    }


}
