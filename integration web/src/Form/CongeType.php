<?php

namespace App\Form;

use App\Entity\Conge;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CongeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('dateconge',DateType::class , array('label' => 'Date conge ',
        'data' => new \DateTime("now")))
            ->add('motifconge')
            ->add('nbjourconge')
            ->add('employe')
            -> add ( 'submit' , SubmitType::class );

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Conge::class,
        ]);
    }
}
