<?php

include "includes/cabecera.php";

function lineaHorizonta()
{
    echo "<hr>";
}
function totalSegundos($horas, $minutos)
{
    $segundos = ($horas * 60 * 60) + ($minutos * 60);
    echo "<p> $horas horas y $minutos minutos son $segundos segundos </p>";

}
function nombreGenero($acronimo)
{

    switch ($acronimo) {
        case "TER":
            $genero = "TERROR";
            break;
        case "COM":
            $genero = "COMEDIA";
            break;
        case "DRA":
            $genero = "DRAMA";
            break;
        case "FIC":
            $genero = "CIENCIA FICCIÓN";
            break;
        case "ROM":
            $genero = "ROMÁNTICA";
            break;
    }


    echo "<p> El género correspondiente a $acronimo es $genero</p>";

}

function calcularPrecioFinal($precio, $descuento)
{
    echo "<p> precio : $precio , descuento : $descuento</p>";

    $precioFinal = $precio - ($precio * $descuento / 100);
    echo "<p> Precio final con descuento : $precioFinal</p>";

}
function diaSemana($dia)
{
    $dia = $dia % 7;
    $diaString = "";
    switch ($dia) {
        case 1:
            $diaString = "lunes";
            break;
        case 2:
            $diaString = "martes";
            break;
        case 3:
            $diaString = "miercoles";
            break;
        case 4:
            $diaString = "jueves";
            break;
        case 5:
            $diaString = "viernes";
            break;
        case 6:
            $diaString = "sabado";
            break;
        case 7:
            $diaString = "domingo";
            break;
        default:
            $diaString = "domingo";
            break;

    }
    echo "<p> El día correspondiente a $dia es $diaString</p>";

}

calcularPrecioFinal(500, 20);
lineaHorizonta();
diaSemana(1);
lineaHorizonta();
totalSegundos(6, 50);
lineaHorizonta();
nombreGenero("ROM");
lineaHorizonta();

include "includes/pie.php";








?>