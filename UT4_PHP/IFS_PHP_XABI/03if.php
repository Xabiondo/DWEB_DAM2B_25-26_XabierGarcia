

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

            $dia = rand (1 , 7);
            switch($dia){
                case 1 :
                    echo "dia laborable , lunes";
                    break ; 
                case 2 : 
                    echo "dia laborable , martes";
                    break;
                case 3: 
                    echo "dia laborable , miercoles";
                    break;  
                case 4 : 
                    echo "dia laborable , jueves";
                    break ; 
                case 5 : 
                    echo "dia laborable , viernes";
                    break ; 
                case 6: 
                    echo "dia no laborable , sábado ";
                    break ; 
                case 7 : 
                    echo "dia no laborable , domingo " ; 
                    break ; 
                    
                
            }

            ?>


              
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>
