<?php

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use Uyab\Calculator\SmartCalculator;
use PHPUnit\Framework\TestCase;
use Uyab\Calculator\Terbilang;

#[CoversClass(SmartCalculator::class)]
#[CoversClass(Terbilang::class)]
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

    #[DataProvider('terbilangExpressionProvider')]
    public function testCalculateAndDisplayAsTerbilang($expression, $expectedTerbilang): void
    {
        $calculator = new SmartCalculator();

        $this->assertEquals($expectedTerbilang, $calculator->calculateAndDisplayAsTerbilang($expression));
    }

    public static function terbilangExpressionProvider(): array
    {
        return [
            ['2 + 2', 'empat'],
            ['10 - 5', 'lima'],
            ['3 * 4', 'dua belas'],
            ['8 / 2', 'empat'],
            ['6 / 2', 'tiga'],
            ['10 / 2', 'lima'],
            ['15 / 3', 'lima'],
        ];
    }
}
