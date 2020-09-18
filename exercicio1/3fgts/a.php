<!--
3. Calcular o FGTS de um funcionário sabendo que:
a. Entre 1000 e 2000 = 8%
b. Entre 2000 e 3000 = 12%
c. Entre 3000 e 4000 = 15%
Solicite o salário e mostre o valor do depósito do FGTS
-->

<?php
  $salario = $_GET["salario"];

  if ( !is_numeric($salario) )
    echo "<h3>Insira um valor númerico válido</h3>";
  elseif ( $salario >= 1000 && $salario < 4000 ) {
    if ( $salario >= 1000 && $salario < 2000 )
      $fgts = $salario * 0.08;
    elseif ( $salario >= 2000 && $salario < 3000 )
      $fgts = $salario * 0.12;
    elseif ( $salario >= 3000 && $salario < 4000 )
      $fgts = $salario * 0.15;

    echo "<h3>Valor do FGTS: R\$ $fgts</h3>";
  }
  else
    echo "<h3>Porcentagem de FGTS não especificada para este valor de salário</h3>";