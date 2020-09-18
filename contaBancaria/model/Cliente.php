<?php

class Cliente {
  public $nome;
  public $cpf;

  public function __construct($nome, $cpf) {
    $this->nome = $nome;
    $this->cpf = $cpf;
  }
}