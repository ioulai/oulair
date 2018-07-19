<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',TextType::class)
            ->add('name',TextType::class,array('label'=>'Nom - Prenom'))
            ->add('password',PasswordType::class)
            ->add('mail',EmailType::class)
            ->add('role',CheckboxType::class,array('label'=>'Possedez vous un Avion ?','required'=>false));
        $builder->get('role')
            ->addModelTransformer(new CallbackTransformer(
                function ($roleAsString){
                    return in_array( 'ROLE_CLIENT_AVION',$roleAsString);
                },
                function ($roleAsBoolean){
                    return $roleAsBoolean === true ? ['ROLE_CLIENT_AVION']: ['ROLE_CLIENT'];
                }
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
