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
			<p class="lead">La fecha de cualquier Domingo de Pascua se calcula de la siguiente forma:<br>
											Sea X el año para el que quiere calcularse la fecha.<br>
											Sea A el resto de la división de X entre 19.<br>
											Sea B el resto de la división de X entre 4.<br>
											Sea C el resto de la división de X entre 7.<br>
											Sea D el resto de la división de (19*A+24) entre 30.<br>
											Sea E el resto de la división de (2B+4C+6D+5) entre 7.<br>
											La fecha para el Domingo de Pascua es el día (22+D+E) de Marzo (tener en cuenta que puede ser de Abril).<br>
											Escribir un programa que dado un año obtenga por pantalla la fecha del Domingo de Pascua de ese año.
			</p>
			<h4>Solución</h4>
			<?php

			$año = 2019;

			$a = $año % 19;
			$b = $año % 4;
			$c = $año % 7;
			$d = (19 * $a + 24) % 30;
			$e = (2 * $b + 4 + $c + 6 * $d + 5) % 7;

			$fecha = 22 + $d + $e;

			if ($fecha < 32) {
				echo 'El Domingo de pascua de ' . $año . ' es el ' . $fecha . ' de Marzo.<br>';
			} else {
				echo 'El Domingo de pascua de ' . $año . ' es el ' . ($fecha-31) . ' de Abril.<br>';
			}

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