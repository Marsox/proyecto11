<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5</title>
	<link rel="stylesheet" type="text/css" href="http://proyecto11.local/style.css">
	<link rel="stylesheet" type="text/css" href="http://proyecto11.local/source/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://proyecto11.local/source/css/all.css">
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
			<h2 class="display-4 text-center">Ejercicio 5</h2>
		</header>

		<div class="container-text">
			<p class="lead">Escribir un programa que pregunte el año actual y la edad de una persona y calcule la edad de esa persona en el año 2020.</p>
			<h4>Solución</h4>
			<?php 

				$añoActual = 2018;
				$edad = 27;

				$resultado = (2020 - $añoActual) + $edad;

				echo "La edad de la persona en el 2020 sera de $resultado años.";

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