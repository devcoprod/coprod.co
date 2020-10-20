<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class, [
                'label' => 'E-mail'
            ])
            ->add('roles')
            // ->add('password')
            ->add('isVerified')
            ->add('firstname')
            ->add('lastname')
            ->add('avatar')
            ->add('isOrganization')
            ->add('organizationName')
            ->add('isAssociate')
            ->add('isWorker')
            ->add('bornAt')
            ->add('bornCity')
            ->add('bornCounty')
            ->add('bornCountry')
            ->add('nationality')
            ->add('nirpp')
            ->add('gender')
            ->add('siren')
            ->add('siret')
            ->add('rcs')
            ->add('userRoles')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
