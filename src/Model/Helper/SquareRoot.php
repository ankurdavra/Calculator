<?php

namespace App\Model\Helper;

class SquareRoot implements ExponentialOperationInterface
{
    public function runCalculation($firstNumber)
    {
        $output = sqrt($firstNumber);

        return number_format((float)$output, 3, '.', '');
    }
}
