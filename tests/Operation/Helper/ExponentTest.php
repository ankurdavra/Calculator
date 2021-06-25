<?php

namespace Tests\App\Operation\Helper;

use App\Operation\Helper\Exponent;
use PHPUnit\Framework\TestCase;

class ExponentTest extends TestCase
{
    public function testExponent()
    {
        $add = new Exponent();
        $result = $add->runCalculation(1);

        $this->assertEquals(2.718, $result);
    }
}
