<?php

class Conta {
  public $numero;
  public $saldo;

  public function __construct($numero, $saldo) {
    $this->numero = $numero;
    $this->saldo = $saldo;
  }

  public function depositar($deposito) {
    $this->saldo += $deposito;
  }

  public function sacar($saque) {
    $this->saldo -= $saque;
  }
}