<?php

include "includes/cabecera.php";

function saludar()
{
      echo "<p> Hola manin </p>";
}
function saludoMultiple()
{
      for ($i = 0; $i < 8; $i++) {
            echo "<p> Hola saldudo $i </p>";
      }
}
function saludoPersonalizado($nombre)
{
      echo "<p> Hola $nombre</p>";


}
saludar();
saludoPersonalizado("Xabier");
saludoMultiple();


include "includes/pie.php";

?>