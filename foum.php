<?php

$genero = readline ("Genero(f ou m):");

if ($genero == "f") {
    echo "Feminino" . PHP_EOL ;
} elseif ($genero == "m") {
    echo "Masculino" . PHP_EOL ;
} else {
    echo "Sexo invalido" . PHP_EOL ;
}