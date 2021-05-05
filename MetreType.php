<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MetreType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'scale' => 2,
            'grouping' => false,
            'rounding_mode' => \NumberFormatter::ROUND_HALFUP,
            'divisor' => 1,
            'currency' => 'm  ',
            'compound' => false,
            'html5' => false
        ]);
    }

    public function getParent(): string
    {
        return MoneyType::class;
    }
}
