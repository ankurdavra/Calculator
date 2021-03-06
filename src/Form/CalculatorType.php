<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstNumber')
            ->add('operand', ChoiceType::class, array(
                'choices' => array(
                    '+' => 'add',
                    '-' => 'subtract',
                    '*' => 'multiply',
                    '/' => 'divide',
                    'sqrt' => 'squareRoot',
                    'exp' => 'exponent'
                )
            ))
            ->add('secondNumber')
            ->add('Calculate', SubmitType::class);
    }
}
