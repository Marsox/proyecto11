<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
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
			<h2 class="display-4 text-center">Ejercicio 1</h2>
		</header>

		<div class="container-text">
			<p class="lead">Escribir un programa que cuente de un texto dado:<br>
				- Nº de caracteres en blanco.<br>
				- Nº de dígitos.<br>
				- Nº de letras.<br>
				- Nº de líneas.<br>
				- Nº de otros caracteres.<br>
			Se deben crear funciones para comprobar si un carácter es numérico, alfanumérico u otra cosa.</p>
			<h4>Solución</h4>
			<?php
			include 'funciones_3_6.php';

			$cadena = 'En un lugar de la mancha 123 de cuyo nombre... vivia un hidalgo caballero con #twitter';


			$blancos = 0;
			$digitos = 0;
			$letras = 0;
			$lineas = 1;
			$otros = 0;

			$longitud = strlen($cadena);
			for ($i=0; $i < $longitud ; $i++) {
				$caracter = substr($cadena, $i, 1);
				if (es_blanco($caracter)){
					$blancos++;
				}elseif(es_letra($caracter)){
					$letras++;
				}elseif(es_digito($caracter)){
					$digitos++;
				}elseif(es_linea($caracter)){
					$lineas++;
				}else{
					$otros++;
				}

			}

			echo 'De la cadena: "' . $cadena. '".<br/>';
			echo 'Los espacios en blanco son: ' . $blancos . '.<br/>';
			echo 'Hay ' . $digitos . ' digitos.<br/>';
			echo 'Tenemos ' . $letras . ' letras alfabéticas.<br/>';
			echo 'Hay ' . $lineas . ' líneas en el texto.<br/>';
			echo 'El resto de caracteres son ' . $otros . '.<br/>';
			echo 'En total hay ' . $longitud . ' caracteres.';

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