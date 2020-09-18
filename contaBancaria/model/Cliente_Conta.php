<?php

// classe de Associação Cliente-Conta
// outras opções são Agregação e Composição, mas não curto muito usar elas, qestão de modelagem de Banco de Dados
// https://www.geeksforgeeks.org/association-composition-aggregation-java/

include_once("./Cliente.php");
include_once("./Conta.php");

class Cliente_Conta {
  public $cliente;
  public $conta;

  public function __construct(Cliente $cliente, Conta $conta) {
    $this->cliente = $cliente;
    $this->conta = $conta;
  }
}