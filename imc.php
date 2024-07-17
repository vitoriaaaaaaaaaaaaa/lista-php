<?php
function calcularIMC($peso, $altura) {

    $imc = $peso / ($altura * $altura);
    
    if ($imc < 18.5) {
        $categoria = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $categoria = "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        $categoria = "Sobrepeso";
    } else {
        $categoria = "Obeso";
    }
    

    echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . "\n";
    echo "Categoria: " . $categoria . "\n";
}


$peso = (float) readline("Insira seu peso em quilogramas: ");
$altura = (float) readline("Insira sua altura em metros: ");

calcularIMC($peso, $altura);

