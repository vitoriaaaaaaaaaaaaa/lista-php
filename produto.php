<?php

$num1 = (float) readline ("Informe o valor do produto:");
$num2 = (float) readline ("Informe o valor do produto:");
$num3 = (float) readline ("Informe o valor do produto:");

if ($num1 < $num2  && $num1 < $num3) {
    echo "o produto com maior cuto beneficio é o produto de valor $num1\n" .PHP_EOL;
} elseif ($num2 < $num1 && $num2 < $num3) {
    echo "o produto com maior cuto beneficio é o produto de valor $num2\n" .PHP_EOL;
} elseif ($num3 < $num1 && $num3 < $num2) {
    echo "o produto com maior cuto beneficio é o produto de valor $num3\n" .PHP_EOL;
}
 