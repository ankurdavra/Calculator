<?php

namespace App\Operation\Helper;

class SquareRoot implements ExponentialOperationInterface
{
    public function runCalculation($firstNumber)
    {
        $output = sqrt($firstNumber);

        return number_format((float)$output, 3, '.', '');
    }
}
