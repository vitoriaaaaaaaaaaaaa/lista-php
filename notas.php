<?php

$nome = readline("Aluno:");

$num1 =(float) readline ("primeira nota:");
$num2 =(float) readline ("segunda nota:");

$soma = $num1 + $num2;

$divisao = $soma / 2;

if ($divisao >= 7) {
    echo "$nome, aprovado(a)\n" . PHP_EOL;
} else {
    echo "$nome, reprovado(a)\n" . PHP_EOL;
}
