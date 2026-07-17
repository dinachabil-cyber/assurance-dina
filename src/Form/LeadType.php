<?php

namespace App\Form;

use App\Entity\Lead;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LeadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom',
                    'class' => 'w-full rounded-lg border border-gray-300 px-4 py-3 text-base text-slate-900 placeholder:text-gray-400 outline-none transition-colors duration-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20',
                ],
            ])

            ->add('prenom', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Prénom',
                    'class' => 'w-full rounded-lg border border-gray-300 px-4 py-3 text-base text-slate-900 placeholder:text-gray-400 outline-none transition-colors duration-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20',
                ],
            ])

            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Email',
                    'class' => 'w-full rounded-lg border border-gray-300 px-4 py-3 text-base text-slate-900 placeholder:text-gray-400 outline-none transition-colors duration-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20',
                ],
            ])

            ->add('telephone', TelType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Téléphone',
                    'class' => 'w-full rounded-lg border border-gray-300 px-4 py-3 text-base text-slate-900 placeholder:text-gray-400 outline-none transition-colors duration-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lead::class,
        ]);
    }
}