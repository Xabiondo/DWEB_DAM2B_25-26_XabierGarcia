

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
            <h3>Variables y tipos de constantes</h3>
            <hr>
             <?php
             $nombreInstituto = "María ana sanz";
             $horasDelModulo = 14;
             $nombre = "xabi";
             $edad = 21 ;
             $altura = 1.87;
             $nombreModulo = "Desarrollo web";
             $pendiente = true ; 

             echo "<h3>Datos de un alumno </h3>";
             echo "<p>Instituto :  ". $nombreInstituto."</p>" ;
             echo "<p>nombre : ". $nombre . "</p>" ; 
             echo "<p> edad : " . $edad . "</p>"; 
             echo "altura : " . $altura ;  
             echo "<p> módulo : " . $nombreModulo . "</p>";
             echo "<p> Horas : " . $horasDelModulo . "</p>";
             echo "<p> Algo pendiente ? " .$pendiente . "</p>";



                 
             ?>     

             
            
              
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>
