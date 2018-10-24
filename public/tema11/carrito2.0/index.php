<?php 

include "carrito.php";
include 'producto.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrito de la compra 2.0</title>
	<link rel="stylesheet" type="text/css" href="http://proyecto11.local/style.css">
	<link rel="stylesheet" type="text/css" href="http://proyecto11.local/source/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://proyecto11.local/source/css/all.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #343a40;">
		<a class="navbar-brand" href="http://proyecto11.local/">Proyecto<span>11</span></a>

		<div class="collapse navbar-collapse" id="navbarColor03">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item arrow-left">
					<a href="javascript:history.go(-1)">
						<i class="fas fa-arrow-left"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://proyecto11.local/phpinfo.php">PHP Info</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://proyecto11.local/plantilla.php">Plantilla</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid jumbotron">
		<header>
			<h2 class="display-4 text-center">Carrito de la compra 2.0</h2>
		</header>

		<div class="container-text">
			<?php 

				$p1 = new Producto("Espuma de afeitar", 3.5);
				$p2 = new Producto("Cereales bolas de chocolate", 5.99);
				$p3 = new Producto("Servilletas 20x20", 1.2);

				$carrito = new Carrito();
				$carrito->meter($p1);
				$carrito->meter($p2);
				$carrito->meter($p3);
				$carrito->quitar(1);

				$carrito->masUnidad(0);
				$carrito->masUnidad(0);
				$carrito->menosUnidad(2);
				$carrito->menosUnidad(2);

				$carrito->mostrar();
				
			?>
		</div>
		
	</div>
	<footer class="footer">
		<div class="container">
			<span class="text-muted">Eduardo Marso © 2018-2019.</span>
		</div>
	</footer>
	<script src="http://proyecto11.local/source/js/jquery-3.3.1.min.js"></script>
	<script src="http://proyecto11.local/source/js/popper.js"></script>
	<script src="http://proyecto11.local/source/js/bootstrap.min.js"></script>
	<script src="http://proyecto11.local/source/js/all.js"></script>
</body>
</html>