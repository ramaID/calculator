<?php

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use Uyab\Calculator\SmartCalculator;
use PHPUnit\Framework\TestCase;

#[CoversClass(SmartCalculator::class)]
class SmartCalculatorTest extends TestCase
{
    #[DataProvider('expressionProvider')]
    public function testExpression($expression, $result): void
    {
        $calculator = new SmartCalculator();
        $this->assertEquals($result, $calculator->calculate($expression));
    }

    public static function expressionProvider(): array
    {
        return [
            ['1 + 1', 2],
            ['1+1', 2],
            ['2 - 1', 1],
            ['2-1', 1],
            ['2 * 3', 6],
            ['2*3', 6],
            ['4 / 2', 2],
            ['4/2', 2],
            ['4 / 0', "Infinity"],
            ['4/0', "Infinity"],
        ];
    }
}
