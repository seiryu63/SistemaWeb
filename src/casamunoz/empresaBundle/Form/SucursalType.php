<?php

namespace casamunoz\empresaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SucursalType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreSucursal')
            ->add('ubicacion')
            ->add('descripcionSucursal')
            ->add('mun')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'casamunoz\empresaBundle\Entity\Sucursal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'casamunoz_empresabundle_sucursal';
    }
}
