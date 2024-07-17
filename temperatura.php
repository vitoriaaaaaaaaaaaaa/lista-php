<?php
function converterParaFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Solicitar temperatura em graus Celsius do usuário
$celsius = (float) readline("Insira a temperatura em graus Celsius: ");

// Converter para Fahrenheit
$fahrenheit = converterParaFahrenheit($celsius);

// Exibir resultado
echo "A temperatura em Fahrenheit é: " . number_format($fahrenheit, 2, ',', '.') . "\n";

