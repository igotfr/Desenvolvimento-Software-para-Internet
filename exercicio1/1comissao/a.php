<!--
1. Um vendedor recebe comissões de acordo com a lista abaixo:
a. R$ 1000,00 a R$ 1500,00: 5%
b. R$ 1501,00 a R$ 2000,00: 10%
Crie um programa WEB que receba o valor total de vendas de um vendedor, e calcule sua comissão
-->

<?php
  $totalVendas = $_GET["totalVendas"];

  if ( !is_numeric($totalVendas) )
    echo "<h3>Insira um valor númerico válido</h3>";
  elseif ( $totalVendas >= 1000 && $totalVendas <= 2000 ) {
    if ( $totalVendas >= 1000 && $totalVendas <= 1500 )
      $comissao = $totalVendas * 0.05;
    elseif ( $totalVendas >= 1501 && $totalVendas <= 2000 )
      $comissao = $totalVendas * 0.1;

    echo "<h3>Valor de comissão: R\$ $comissao";
  }
  else
    echo "<h3>Comissão não estipulada para este valor de vendas</h3>";