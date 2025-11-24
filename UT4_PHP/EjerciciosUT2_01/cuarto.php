

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenido">
        <div id="cabecera"><h2>Primeros Ejemplos PHP</h2></div>
        <div id="principal">
             <?php

            ?>
            <h3>Trabjando con variables

            </h3>
            <hr>
             <?php
             $valor1 = 23; 
             $valor2 = 80;
             $suma = $valor1 + $valor2;
             $resta = $valor1 - $valor2;
             $producto = $valor1    *$valor2;
             $modulo = $valor1 % $valor2 ; 
             $articulos = 12;

             echo "el valor de $"."valor1 es $valor1 <br>" ;
             echo "el valor de $"."valor2 es $valor2 <br>"; 
             echo "la suma de 23 y 80 es $suma  <br>";
             echo "la resta de 23 - 80 es $resta <br>";
             echo "el producto de 23 y 80 es $producto <br>" ;
             echo "el resto de 23 y 80 es $modulo <br>" ;
             echo "actualmente hay $articulos productos";
             echo "actualmente hay " {$articulos+1} productos";
             

                 
             ?>     

             
            
              
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>
