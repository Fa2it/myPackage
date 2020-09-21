<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ashu\Aba\Calculator;

class CalculatorTest extends TestCase
{
    private $cal;

    public function setUp():void
    {
      $this->cal = new Calculator();
      // code...
    }
    public function testAdd(): void
    {
        $this->assertEquals( 10, $this->cal->add(4,6));
    }
}
