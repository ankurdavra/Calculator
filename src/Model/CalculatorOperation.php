<?php

namespace App\Model;

use App\Entity\Calculator;
use App\Model\Helper\Add;
use App\Model\Helper\Subtract;
use App\Model\Helper\Multiply;
use App\Model\Helper\Divide;
use App\Model\Helper\SquareRoot;
use App\Model\Helper\Exponent;

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
