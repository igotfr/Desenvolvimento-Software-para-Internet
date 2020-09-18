<?php
  include_once("./model/Cliente.php");
  include_once("./model/Conta.php");
  include_once("./model/Cliente_Conta.php");

  $cliente = new Cliente($_GET["nome"], $_GET["cpf"]);
  $conta = new Conta($_GET["numero"], $_GET["saldo"]);
  $cliente_conta = new Cliente_Conta($cliente, $conta);

  print_r($cliente); echo "<br /><br />";
  print_r($conta); echo "<br /><br />";
  print_r($cliente_conta); echo "<br /><br />";

  $conta->depositar(60);

  print_r($cliente); echo "<br /><br />";
  print_r($conta); echo "<br /><br />";
  print_r($cliente_conta); echo "<br /><br />";