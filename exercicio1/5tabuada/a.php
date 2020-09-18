<!--
5. Crie um programa WEB que receba um número e mostre a tabuada desse número(não tem IF, mas tem LAÇO, FOR).
-->

<?php
  $numero = $_GET["numero"];

  if ( !is_numeric($numero) ) {
    echo "<h3>Insira um valor númerico válido</h3>";
    exit();
  }
  foreach ( range(0, 10) as $n )
    echo "$numero * $n = " . $n * $numero . "<br />";