

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
             echo "hola! , este es mi primer ejemplo de PHP";
             echo "<hr></hr>";
             echo "php es un lenguaje de script de servidor ";
             echo "<p>con la sentencia <span class='sentencia'> echo</span> mostramos información del navegador</p> ";
             echo "si utilizo /n puedo insertar saltos de línea en el código fuente del navegador" ;
             echo "<p> pero solo funciona con las comillas dobles, no con las simples </p>";
             echo "22 es un número ";
                 
            ?>
            <h3>Ahora practicaremos con print</h3>
             <?php
             print "hola!, este es mi primer ejemplo utilizando <span class = 'sentencia'>print</span><br>";
             print "las comillas simples también funcionan con  <span class = 'sentencia'>print</span>"
             
                 
             ?>     

             
            
              
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>
