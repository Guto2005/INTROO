<?php

namespace app\models;
class Pessoa {

  public string $nome;

  public string $cpf;

  public int $idade;

  public function __construct(string $pNome, string $pCpf, int $pIdade){
    $this->setNome($pNome);
    $this->setCpf($pCpf);
    $this->setIdade($pIdade);
  }



  /**
   * Get the value of idade
   */ 
  public function getIdade()
  {
    return $this->idade;
  }

  /**
   * Set the value of idade
   *
   * @return  self
   */ 
  public function setIdade($idade)
  {
    $this->idade = $idade;

    return $this;
  }

  /**
   * Get the value of nome
   */ 
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   *
   * @return  self
   */ 
  public function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }

  /**
   * Get the value of cpf
   */ 
  public function getCpf()
  {
    return $this->cpf;
  }

  /**
   * Set the value of cpf
   *
   * @return  self
   */ 
  private function setCpf($cpf)
  {
    $this->cpf = $cpf;

    return $this;
  }
}