<?php

namespace Tests\App\Operation;

use App\Entity\Calculator;
use App\Model\CalculatorOperation;
use PHPUnit\Framework\TestCase;

class CalculatorOperationTest extends TestCase
{

    public function testPerformCalculationSimpleOperation()
    {
        $entity = new Calculator();
        $entity->setOperand('add');
        $entity->setFirstNumber('1');
        $entity->setSecondNumber('2');

        $unit = new CalculatorOperation($entity);

        $this->assertEquals(3, $unit->performCalculation());

    }

    public function testPerformCalculationComplexOperation()
    {
        $entity = new Calculator();
        $entity->setOperand('squareRoot');
        $entity->setFirstNumber('4');

        $unit = new CalculatorOperation($entity);

        $this->assertEquals(2.000, $unit->performCalculation());

    }
}
