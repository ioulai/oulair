<?php

namespace App\Form;

use App\Entity\Flight;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FlightType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,array('label'=>'Type de vol (jet, helicopter,...) :','required'=>true))
            ->add('description',TextareaType::class,array('label'=>'description'))
            ->add('image', FileType::class,array('label'=>'Ajouter une image'))
            ->add('departure',TextType::class,array('label'=>'Lieu du depart :','required'=>true))
            ->add('arrive',TextType::class,array('label'=>'Lieu d\'arrivé :','required'=>true))
            ->add('hourDeparture',TimeType::class,array('label'=>'Heure de départ','widget'=>'single_text'))
            ->add('dateDeparture',DateType::class,array('widget'=>'single_text','label'=>'Date de départ'))
            ->add('dateArrive',DateType::class,array('widget'=>'single_text', 'label'=>'Date d\'arrivée'))
            ->add('price',IntegerType::class,array('label'=>'Prix du vol :'))
            ->add('nbPlace',IntegerType::class,array('label'=>'Places disponibles : '))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Flight::class,
        ]);
    }
}
