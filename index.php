<?php

require_once __DIR__ . '/vendor/autoload.php';

use Uyab\Calculator\BasicCalculator;

$calculator = new BasicCalculator();
echo $calculator->add(10, 2) . PHP_EOL;

$smartCalculator = new Uyab\Calculator\SmartCalculator();
echo $smartCalculator->calculateAndDisplayAsTerbilang('333 * 222');
