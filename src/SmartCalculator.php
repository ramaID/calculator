<?php

namespace Uyab\Calculator;

class SmartCalculator extends BasicCalculator
{
    public function calculate(string $expression): int|string
    {
        // $parts = explode(' ', $expression);
        $parts = preg_split('#([+\-*/])#', $expression, -1, PREG_SPLIT_DELIM_CAPTURE);
        $number1 = (int)$parts[0];
        $number2 = (int)$parts[2];

        // return match($parts[1]) {
        //     '+' => $result = $this->add($parts[0], $parts[2]),
        //     '-' => $result = $this->subtract($parts[0], $parts[2]),
        //     '*' => $result = $this->multiply($parts[0], $parts[2]),
        //     '/' => $result = $this->divide($parts[0], $parts[2]),
        // };

        if ($parts[1] === '+') {
            $result = $this->add($number1, $number2);
        } elseif ($parts[1] === '-') {
            $result = $this->subtract($number1, $number2);
        } elseif ($parts[1] === '*') {
            $result = $this->multiply($number1, $number2);
        } elseif ($parts[1] === '/') {
            $result = $this->divide($number1, $number2);
        }

        return $result;
    }
}
