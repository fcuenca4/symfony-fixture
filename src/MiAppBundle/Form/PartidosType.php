<?php

namespace MiAppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartidosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaPartido', 'date')
            ->add('resultEq1')
            ->add('resultEq2')
            ->add('observacion')
            ->add('termino')
            ->add('idArbitro')
            ->add('idEditor')
            ->add('idEquipo1')
            ->add('idEquipo2')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MiAppBundle\Entity\Partidos'
        ));
    }
}
