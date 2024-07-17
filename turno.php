<?php

$nome = readline("Qual seu nome?:");

$turno = readline("Qual entre esses turnos voce estuda [M]matuttino, [V]vespertino ou [N]noturno?:");
$turno = strtolower($turno);

if ($turno == "v") {
    echo "Ola $nome, tenha uma boa tarde!" .PHP_EOL;
} elseif ($turno == "m") {
    echo "Ola $nome, bom dia!" .PHP_EOL;
} elseif ($turno == "n") {
    echo "Ola $nome, boa noite!" .PHP_EOL;
}
