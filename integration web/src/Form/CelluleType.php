<?php

namespace App\Form;

use App\Entity\Cellule;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CelluleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


            ->add('idcellule')
            ->add('dispo', CheckboxType::class, [
                'label'    => 'disponibilite',
                'required' => false,
            ])
            ->add('Submit' , SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cellule::class,
        ]);
    }
}
