<?php
//Questão 01 //

require_once "Automovel.php";

$n = readline("Digite o número de carros: ");

$valortotal = 0;

for ($i = 0; $i < $n; $i++) {
    $valor = readline("Digite o valor do carro: ");
    $categoria = readline("Digite aa categoria do carro: ");
    $carro = new Automovel($valor, $categoria);
    $valortotal += $carro->calculoIPI($categoria);
}

echo "\nValor total: ${valortotal}";