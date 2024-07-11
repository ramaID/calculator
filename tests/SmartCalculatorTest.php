<?php

use PHPUnit\Framework\Attributes\CoversClass;
use Uyab\Calculator\SmartCalculator;
use PHPUnit\Framework\TestCase;

#[CoversClass(SmartCalculator::class)]
class SmartCalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $calculator = new SmartCalculator();
        $result = $calculator->calculate("1 + 2");
        $this->assertEquals(3, $result);
    }

    public function testSubtract(): void
    {
        $calculator = new SmartCalculator();
        $result = $calculator->calculate("2 - 1");
        $this->assertEquals(1, $result);
    }

    public function testMultiply(): void
    {
        $calculator = new SmartCalculator();
        $result = $calculator->calculate("2 * 3");
        $this->assertEquals(6, $result);
    }

    public function testDivide(): void
    {
        $calculator = new SmartCalculator();
        $result = $calculator->calculate("6 / 3");
        $this->assertEquals(2, $result);
    }

    public function testDivideByZero(): void
    {
        $calculator = new SmartCalculator();
        $result = $calculator->calculate("6 / 0");
        $this->assertEquals("Infinity", $result);
    }

    public function testAddWithoutSpace(): void
    {
        $calculator = new SmartCalculator();
        $result = $calculator->calculate("1+2");
        $this->assertEquals(3, $result);
    }

    public function testSubtractWithoutSpace(): void
    {
        $calculator = new SmartCalculator();
        $result = $calculator->calculate("2-1");
        $this->assertEquals(1, $result);
    }

    public function testMultiplyWithoutSpace(): void
    {
        $calculator = new SmartCalculator();
        $result = $calculator->calculate("2*3");
        $this->assertEquals(6, $result);
    }

    public function testDivideWithoutSpace(): void
    {
        $calculator = new SmartCalculator();
        $result = $calculator->calculate("6/3");
        $this->assertEquals(2, $result);
    }

    public function testDivideByZeroWithoutSpace(): void
    {
        $calculator = new SmartCalculator();
        $result = $calculator->calculate("6/0");
        $this->assertEquals("Infinity", $result);
    }
}
