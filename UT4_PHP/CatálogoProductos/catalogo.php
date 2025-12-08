<?php 
include("header.html"); 
include("funciones_catalogo.php"); // Tu archivo de funciones

// --- 1. DATOS INICIALES ---
$catalogo = array(
    array(1, "Pasta Dientes", "cuidado personal", 10, 100),
    array(2, "Ratón inalámbrico", "Periféricos", 25, 12),
    array(3, "Teclado inalámbrico", "Periféricos", 50, 50),
    array(4, "Disco sdd 1TB", "Almacenamiento", 45, 900),
    array(5, "Disco hdd 1TB", "Almacenamiento", 25, 200)
);

// --- 2. OPERACIONES QUE PIDE EL EJERCICIO ---
// Añadir
$productoAñadir = array(6, "Mouse Gamer", "Periféricos", 10, 14); 
agregarProducto($catalogo, $productoAñadir); 

// Eliminar uno (ejemplo el id 1)
eliminarProducto($catalogo, 1);

// Subir precios 10%
incrementarPrecios($catalogo, 10);

// Calcular resumen
$resumen = generarResumen($catalogo);
$bajoStock = porductosBajoStock($catalogo, 15);
$precioMedio = calcularPrecioMedio($catalogo);

// --- 3. MOSTRAR RESULTADOS (HTML) ---
?>

<h1>Gestión de Catálogo</h1>

<h2>Listado de Productos</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($catalogo as $prod): ?>
        <tr>
            <td> <?php echo $prod[0]; ?> </td>
            <td> <?php echo $prod[1]; ?> </td>
            <td> <?php echo $prod[2]; ?> </td>
            <td> <?php echo $prod[3]; ?> € </td>
            <td> <?php echo $prod[4]; ?> u. </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h2>Informe Resumen</h2>
<ul>
    <li>Total Productos: <?php echo $resumen[0]; ?></li>
    <li>Categorías Diferentes: <?php echo $resumen[1]; ?></li>
    <li>Valor Total Stock: <?php echo $resumen[2]; ?> €</li>
    <li>Precio Medio: <?php echo number_format($precioMedio, 2); ?> €</li>
</ul>

