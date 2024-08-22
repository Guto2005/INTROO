<?php

require __DIR__ . "/app/models/Produto.php";
require __DIR__ . "/app/models/Pessoa.php";

use app\models\{Pessoa, Produto}; 

$produto1 = new Produto(); 
$produto1->setNome("Queijo");
$produto1->setValor(20.00);

$produto2 = new Produto();
$produto2->setNome("Coca-cola");

try {
    $produto2->setValor(8);
} catch (\Throwable $th) {
    echo $th->getMessage(); 
}

$dataNascimento = new DateTime("1996-08-22");
$cliente = new Pessoa("Juca", "55599988877", $dataNascimento);

echo $produto1->exibirDadosProduto() . "<br>";
echo $produto2->exibirDadosProduto() . "<br>";

echo "Pessoa 1: " . $cliente->exibirDadosPessoa() . "<br>";
?>
