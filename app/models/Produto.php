<?php
namespace app\models;

use Exception;

class Produto{

    //atributos
    public string $nome;
    //acesso/tipo/nomeAtributo
    public float $valor;
    //metodos
    public function __construct(){

    }

    public function setNome(string $pNome){
        $this->nome = $pNome;   
    }

    public function setValor(float $pValor){
        if ($pValor<=0) {
            throw new Exception;
        }
        $this->valor = $pValor;
    }
    public function getNome(){
        return $this->nome;
    }

    public function getValor(){
        return $this->valor;
    }
}
?>