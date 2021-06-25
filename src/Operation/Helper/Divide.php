<?php

namespace App\Operation\Helper;

class Divide implements SimpleOperationInterface
{
    public function runCalculation($firstNumber, $secondNumber)
    {
        if($secondNumber == 0) {
            return 0;
        }

        $output = ($firstNumber / $secondNumber);

        return number_format((float)$output, 3, '.', '');
    }
}
