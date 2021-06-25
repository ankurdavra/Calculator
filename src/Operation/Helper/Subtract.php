<?php

namespace App\Operation\Helper;

class Subtract implements SimpleOperationInterface
{
    public function runCalculation($firstNumber, $secondNumber)
    {
        $output = ($firstNumber - $secondNumber);

        return number_format((float)$output, 1, '.', '');
    }
}
