<?php

namespace App\Operation;

use App\Entity\Calculator;
use App\Operation\Helper\Add;
use App\Operation\Helper\Subtract;
use App\Operation\Helper\Multiply;
use App\Operation\Helper\Divide;
use App\Operation\Helper\SquareRoot;
use App\Operation\Helper\Exponent;

class CalculatorOperation
{
    private $calculator;

    public function __construct(Calculator $calculator)
    {
       $this->calculator = $calculator;
    }

    public function performCalculation()
    {
        switch ($this->calculator->getOperand())
        {
            case "add":
                $operation = new Add();
                break;
            case "subtract":
                $operation = new Subtract();
                break;
            case "multiply":
                $operation = new Multiply();
                break;
            case "divide":
                $operation = new Divide();
                break;
            case "squareRoot":
                $operation = new SquareRoot();
                break;
            case "exponent":
                $operation = new Exponent();
                break;
        }

        if($this->calculator->getOperand() == 'squareRoot' || $this->calculator->getOperand() == 'exponent') {
            $this->calculator->setSecondNumber(null);
            $output = $operation->runCalculation($this->calculator->getFirstNumber());
        } else {
            $output = $operation->runCalculation(
                $this->calculator->getFirstNumber(),
                $this->calculator->getSecondNumber()
            );
        }

        return $output;
    }
}
