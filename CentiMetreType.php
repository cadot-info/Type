<?php

namespace App\Form\Type;

use App\Form\Type\MetreType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CentiMetreType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'currency' => 'cm '
        ]);
    }

    public function getParent(): string
    {
        return MetreType::class;
    }
}
