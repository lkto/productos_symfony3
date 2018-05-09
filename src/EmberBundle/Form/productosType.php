<?php

namespace EmberBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class productosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
      ->add('codigo')
      ->add('nombre')
      ->add('descripcion')
      ->add('marcaId', EntityType::class,
          array(
                'label_format' => '* Marca',
                'class' => 'EmberBundle:marca',
                'choice_label' => 'nombre',
                'attr'    =>array('class'=>'form-control')
              )
        )
      ->add('categoriaId', EntityType::class,
          array(
                'label_format' => '* Categoría',
                'class' => 'EmberBundle:categoria',
                'choice_label' => 'nombre',
                'attr'    =>array('class'=>'form-control')
              )
        )

      ->add('precio')  
      ->add('Guardar', SubmitType::class) ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EmberBundle\Entity\productos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'emberbundle_productos';
    }


}
