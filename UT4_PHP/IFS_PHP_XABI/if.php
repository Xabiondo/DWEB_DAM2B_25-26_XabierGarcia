

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

            $numeroAleatorio = rand( 1 , 10);
            echo   "Juan carlos ha tenido un ", $numeroAleatorio  ,  "<br>"; 

            if($numeroAleatorio > 9 ){
                echo "sobresaliente !!";
            }elseif($numeroAleatorio >= 7 ){
                echo "notable !! ";
            }elseif($numeroAleatorio >= 5 ){
                echo "has aprobado";
            }else 
                echo "eres una desagracia";
                
            ?>

            
              
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>
