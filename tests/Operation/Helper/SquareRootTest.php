<?php

namespace Tests\App\Operation\Helper;

use App\Model\Helper\SquareRoot;
use PHPUnit\Framework\TestCase;

class SquareRootTest extends TestCase
{
    public function testAdd()
    {
        $add = new SquareRoot();
        $result = $add->runCalculation(4);

        $this->assertEquals(2.000, $result);
    }
}
