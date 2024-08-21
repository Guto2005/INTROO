<?php

// Corrigir os caminhos dos arquivos
require __DIR__ . "/app/models/Produto.php";
require __DIR__ . "/app/models/Pessoa.php";

use app\models\{Pessoa,Produto}; // nome do pacote namespace;

$x = 10;
$y = 1000;

$x = $y;
$y = 100;

$pessoa1 = new Pessoa("Magali", "22233344455",18);
$pessoa2 = new Pessoa("Cebolinha", "11133344422",19);

$pessoa2 = $pessoa1;
$pessoa1->setNome("Mônica");


var_dump($x);
var_dump($y);
var_dump($pessoa1);
var_dump($pessoa2);

// Criar instâncias das classes e definir propriedades
// $produto1 = new Produto(); // criando o objeto | Instanciando a classe
// $produto1->setNome("Queijo");
// $produto1->setValor(20.00);

// $produto2 = new Produto();
// $produto2->setNome("Coca-cola"); // Corrigido de "-" para "="

// try {
//     $produto2->setValor(-1000);
// } catch (\Throwable $th) {
//     echo $th->getMessage(); //mensagem de erro caso algo inesperado ocorra
// }

// $cliente = new Pessoa("Juca","55599988877",41);

// echo "O valor do produto " . $produto1->getNome() . " é R$" . $produto1->valor . "<br>";
// echo "O valor do produto " . $produto2->getNome() . " é R$" . $produto2->valor . "<br>";

// echo "Pessoa 1: ".$cliente->getNome().";".$cliente->getIdade() . ";" . $cliente->getCpf() . "<br>";

?>
