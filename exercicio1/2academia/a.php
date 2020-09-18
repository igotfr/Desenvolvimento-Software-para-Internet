<!--
2. Uma academia possui duas modalidades de esportes: Judô, e Bale.
Se a pessoa, pesa até 50 quilos, fará balé. Se a pessoa tem menos de 30 anos ou pesa mais de 100 kilos fará judô.
-->

<?php
  $peso = $_GET["peso"];
  $idade = $_GET["idade"];

  if ( !is_numeric($peso) || !is_numeric($idade) )
    echo "<h3>Insira um valor númerico válido</h3>";
  else {
    if ( $peso <= 50 )
      echo "<h3>Você será obrigado a fazer BALÉ</h3>";
    elseif ( $peso > 100 || $idade < 30 )
      echo "<h3>Você será obrigado a fazer JUDÔ</h3>";
    else
      echo "<h3>Nenhuma atividade especificada para as condições";
  }