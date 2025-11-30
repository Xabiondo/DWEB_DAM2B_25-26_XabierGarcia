<?php

include "includes/cabecera.php";

function sumar($num1, $num2)
{
    $sum = $num1 + $num2;
    $reasta = $num1 - $num2;
    $producto = $num1 * $num2;
    $cuadrado = $num1 ** $num2;
    echo "<p> numero 1 : $num1 , numero 2 : $num2";
    echo "<p> suma : $sum</p> ";
    echo "<p> resta : $reasta</p>";
    echo "<p> Producto : $producto</p>";
    echo "<p> cuadrado : $cuadrado</p>";
}
sumar(5, 5);




include "includes/pie.php";








?>