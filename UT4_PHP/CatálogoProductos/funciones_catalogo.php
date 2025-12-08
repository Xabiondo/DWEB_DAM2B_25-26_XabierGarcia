<?php $catalogo = array(
array( 1 , "Pasta Dientes" , "cuidado personal" , 10 , 100) ,
array(2 , "Ratón inalámbrico " , "Periféricos" , 25 , 12) ,
array(3 , "Teclado inalámbrico " , "Periféricos" , 50 , 50) ,
array(4 , "Disco sdd 1TB" , "Almacenamiento" , 45 , 900) ,
array(5 , "Disco hdd 1TB" , "Almacenamiento" , 25 , 200)
);

$productoAñadir = array(6, "mouse" , "Perfiféricos" , 10 , 14) ; 
agregarProducto($catalogo , $productoAñadir) ; 

function agregarProducto( &$catalogo , $nuevoProducto){
    array_push($catalogo , $nuevoProducto) ; 
    return $catalogo ; 
}

function eliminarProducto(&$catalogo , $id){
    foreach ($catalogo as $indice => $producto){
        if($producto[0] == $id){
            array_splice($catalogo , $indice , 1) ; 
            return $catalogo ; 

        }
        
    }


    return $catalogo ; 
    
}
function generarResumen ( $catalogo){
    $valorTotalStock = 0 ; 
    $categorias = array_unique(array_column($catalogo, 2));

    foreach($catalogo as $x){
        $valorTotalStock = $valorTotalStock + ($x[3] * $x[4]); 


    }

$resumen = array(
        count($catalogo),    
        count($categorias), 
        $valorTotalStock     
    );
    return $resumen ;


}

function incrementarPrecios(&$catalogo , $porcentaje ){
    foreach($catalogo as &$x ){
        $x[3] = $x[3] + ($x[3] * ($porcentaje / 100));
        
    }

}

function calcularPrecioMedio ( $catalogo ){
    $precioMedio  = 0 ; 
    foreach ( $catalogo as $x){
        $precioMedio = $precioMedio + $x[3] ; 
    }
    return $precioMedio / count($catalogo) ; 


}
function porductosBajoStock($catalogo  , $umbral ){
    $quedanPocos = array();

    foreach ( $catalogo as $x ){
        if($x[4] < $umbral ){
            array_push($quedanPocos , $x[4]);
        }
    }

    return $quedanPocos;
}
function filtrarPorCategoria($catalogo, $categoria) {

    $filtrado = array_filter($catalogo, function($producto) use ($categoria) {
        
      
        return $producto[2] == $categoria;
    });

    return $filtrado;
}
?>