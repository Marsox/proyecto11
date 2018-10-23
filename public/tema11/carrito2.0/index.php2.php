<?php 

include "carrito.php";
include 'producto.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrito de la compra</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php 

	$p1 = new Producto("Espuma de afeitar", 3.5);
	$p2 = new Producto("Cereales bolas de chocolate", 5.99);
	$p3 = new Producto("Servilletas 20x20", 1.2);

	$carrito = new Carrito();
	$carrito->meter($p1);
	$carrito->meter($p2);
	$carrito->meter($p3);

	$carrito->mostrar();
	
	?>
</body>
</html>