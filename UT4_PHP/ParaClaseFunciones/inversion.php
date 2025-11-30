<?php

include "includes/cabecera.php";

function calcularCantidad($cantidad, $interes, $anios)
{

    echo "Cantidad inicial $cantidad <br>";
    echo "Interés: $interes % <br>";
    echo "Años: $anios <br>";
    $resultado = $cantidad * ((1 + $interes / 100) ** $anios);
    echo "<p> la cantidad es $resultado</p>";


}
calcularCantidad(1500, 5, 6);



include "includes/pie.php";








?>