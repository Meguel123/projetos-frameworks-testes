<?php

require __DIR__ . '/vendor/autoload.php';

use App\Calculator;

$calc = new Calculator();

echo "10 + 5 = " . $calc->add(10, 5) . PHP_EOL;
echo "10 - 5 = " . $calc->subtract(10, 5) . PHP_EOL;
echo "10 * 5 = " . $calc->multiply(10, 5) . PHP_EOL;
echo "10 / 5 = " . $calc->divide(10, 5) . PHP_EOL;

try {
    $calc->divide(10, 0);
} catch (DivisionByZeroError $e) {
    echo "Erro: " . $e->getMessage() . PHP_EOL;
}