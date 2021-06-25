<?php

namespace Tests\App\Operation\Helper;

use App\Model\Helper\Add;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
    public function testAdd()
    {
        $add = new Add();
        $result = $add->runCalculation(10, 20);

        $this->assertEquals(30, $result);
    }
}
