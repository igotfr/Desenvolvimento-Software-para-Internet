<!--
4. Crie um programa WEB que receba 03 valores e diga, se é um triangulo equilátero, isósceles ou escaleno;
-->

<?php
  $lado1triangulo = $_GET["lado1triangulo"];
  $lado2triangulo = $_GET["lado2triangulo"];
  $lado3triangulo = $_GET["lado3triangulo"];

  if ( !is_numeric($lado1triangulo) || !is_numeric($lado2triangulo) || !is_numeric($lado3triangulo) )
    echo "<h3>Insira um valor númerico válido</h3>";
  elseif ( $lado1triangulo == $lado2triangulo && $lado2triangulo == $lado3triangulo )
    echo "<h3>O triângulo é equilátero</h3>";
  elseif ( $lado1triangulo == $lado2triangulo || $lado1triangulo == $lado3triangulo || $lado2triangulo == $lado3triangulo )
    echo "<h3>O triângulo é isósceles</h3>";
  else
    echo "<h3>O triângulo é escaleno</h3>";