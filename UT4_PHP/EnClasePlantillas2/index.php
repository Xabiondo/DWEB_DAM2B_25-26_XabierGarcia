 
 
 <?php

 $nombre = "Ana" ; 
 $tiradas = 8 ; 
 
 $suma = 0 ; 
 for ($i=0; $i < $tiradas; $i++) { 
    $suma = $suma + rand(1,6); 
  
 }


 include 'vistas/vista_resultado.php';
           
?>
