

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

        <form method="post">
            <input type="number" name="numeroUsuario" />
            <button type="submit">Enviar</button>
        </form>


            <?php
            session_start();
            if (!isset($_SESSION['numeroSecreto'])) {
                 $_SESSION['numeroSecreto'] = rand(1, 100);
            }

            $numeroUsuario = $_POST['numeroUsuario'];
            $numeroSecreto = $_SESSION['numeroSecreto'];



            if($numeroSecreto  > $numeroUsuario)
                echo "El número que has dicho es mas pequeño que el  aleatorio" ;
            elseif($numeroUsuario > $numeroSecreto ) 
                echo "el numero que has dicho es más grande que el aleatorio "; 
            else echo "has acertado "; 
            



            ?>


              
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>
