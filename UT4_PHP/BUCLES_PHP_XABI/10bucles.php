

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

            $numTablaMultiplicar = 5;

            //Tiene las clases ,pero no he encontrado ninguna 

            echo "<table>";
            $multiplicado = 0  ;
            for($x = 1 ;   $x< $numTablaMultiplicar ; $x++){
                if( $x % 2  == 0 ){
                    echo "<tr class='par'> ";

                }else echo"<tr class = 'inpar'>";
                echo "<tr> ";
                for($y = 0 ; $y < 11 ; $y++){
                    $multiplicado = $x * $y ;
                    echo "<td> $multiplicado     </td>";


                }
                echo "</tr>";

            }
            echo "</table>";
 
  
                
            ?>

            
              
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>
