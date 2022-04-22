<?php

namespace App\Form;

use App\Entity\Cellule;
use App\Entity\Reservation;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricule')
            ->add('datef', DateTimeType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'date_label' => 'Starts On',
            ])
            ->add('dated', DateTimeType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'date_label' => 'Starts On',
            ])
            ->add('idCell', EntityType::class, array(
                'class' => Cellule::class,
                'query_builder' => function (EntityRepository $entityRepository) {
                    return $entityRepository->createQueryBuilder('u')
                        ->where('u.dispo=1');
                }
            ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
