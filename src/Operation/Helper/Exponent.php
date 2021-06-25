<?php

namespace App\Operation\Helper;

class Exponent implements ExponentialOperationInterface
{
    public function runCalculation($firstNumber)
    {
        $output = exp($firstNumber);

        return number_format((float)$output, 3, '.', '');
    }
}
