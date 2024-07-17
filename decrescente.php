<?php

$num1 = (float) readline ("Informe o numero:");
$num2 = (float) readline ("Informe o numero:");
$num3 = (float) readline ("Informe o numero:");

if ($num1 > $num2 && $num2 > $num3) {
    echo "$num1,  $num2,  $num3\n" .PHP_EOL;
} elseif ($num1 > $num3 && $num3 > $num2) {
    echo "$num1, $num3, $num2\n" .PHP_EOL;
} elseif ($num2 > $num1 && $num1 > $num3) {
    echo "$num2, $num1, $num3\n" .PHP_EOL;
} elseif ($num2 > $num3 && $num3 > $num1) {
    echo "$num2, $num3, $num1\n" .PHP_EOL;   
} elseif ($num3 > $num1 && $num1 > $num2) {
    echo "$num3, $num1, $num2\n" .PHP_EOL;
} elseif ($num3 > $num2 && $num2 > $num1) {
    echo "$num3, $num2, $num1\n" .PHP_EOL;
}