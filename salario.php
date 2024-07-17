<?php

function calcularReajusteSalarial($salarioAtual) {
    if ($salarioAtual <= 280.00) {
        $percentual = 20;
    } elseif ($salarioAtual > 280.00 && $salarioAtual <= 700.00) {
        $percentual = 15;
    } elseif ($salarioAtual > 700.00 && $salarioAtual <= 1500.00) {
        $percentual = 10;
    } else {
        $percentual = 5;
    }
    
    $valorAumento = ($salarioAtual * $percentual) / 100;
    $novoSalario = $salarioAtual + $valorAumento;
    
    echo "Salário antes do reajuste: R$ " . number_format($salarioAtual, 2, ',', '.') . "\n";
    echo "Percentual de aumento aplicado: " . $percentual . "%\n";
    echo "Valor do aumento: R$ " . number_format($valorAumento, 2, ',', '.') . "\n";
    echo "Novo salário após o reajuste: R$ " . number_format($novoSalario, 2, ',', '.') . "\n";
}
