<?php

include "includes/cabecera.php";

function areaCirculo($radio)
{
    $solucion = $radio ** 2 * 3.14;
    echo "<p> $solucion </p>";



}
areaCirculo(3);


include "includes/pie.php";








?>