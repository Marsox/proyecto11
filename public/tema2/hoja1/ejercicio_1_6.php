<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 6</title>
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
			<h2 class="display-4 text-center">Ejercicio 6</h2>
		</header>

		<div class="container-text">
			<p class="lead">Escribir un programa que calcule el número de billetes de 500, 200, 100, 50, 20, 10 y 5 así como de monedas de 2, 1, 0'5, 0'20, 0'10, 0'05, 0'02 y 0'01 para desglosar una cantidad C de forma que se necesite la menor cantidad de cada tipo.</p>
			<h4>Solución</h4>
			<?php
			$cantidad = 2345.67;
			$cantidad_parcial = $cantidad;

			$b500 = (int) ($cantidad_parcial / 500);
			$cantidad_parcial = $cantidad_parcial - $b500*500;
			$b200 = (int) ($cantidad_parcial / 200);
			$cantidad_parcial = $cantidad_parcial - $b200*200;
			$b100 = (int) ($cantidad_parcial / 100);
			$cantidad_parcial = $cantidad_parcial - $b100*100;
			$b050 = (int) ($cantidad_parcial / 50);
			$cantidad_parcial = $cantidad_parcial - $b050*50;
			$b020 = (int) ($cantidad_parcial / 20);
			$cantidad_parcial = $cantidad_parcial - $b020*20;
			$b010 = (int) ($cantidad_parcial / 10);
			$cantidad_parcial = $cantidad_parcial - $b010*10;
			$b005 = (int) ($cantidad_parcial / 5);
			$cantidad_parcial = $cantidad_parcial - $b005*5;
			$m200 = (int) ($cantidad_parcial / 2);
			$cantidad_parcial = $cantidad_parcial - $m200*2;
			$m100 = (int) ($cantidad_parcial / 1);
			$cantidad_parcial = $cantidad_parcial - $m100*1;
			$m050 = (int) ($cantidad_parcial / 0.50);
			$cantidad_parcial = $cantidad_parcial - $m050*0.5;
			$m020 = (int) ($cantidad_parcial / 0.20);
			$cantidad_parcial = $cantidad_parcial - $m020*0.2;
			$m010 = (int) ($cantidad_parcial / 0.10);
			$cantidad_parcial = $cantidad_parcial - $m010*0.1;
			$m005 = (int) ($cantidad_parcial / 0.05);
			$cantidad_parcial = $cantidad_parcial - $m005*0.05;
			$m002 = (int) ($cantidad_parcial / 0.02);
			$cantidad_parcial = $cantidad_parcial - $m002*0.02;
			$m001 = (int) ($cantidad_parcial / 0.01);
			$cantidad_parcial = $cantidad_parcial - $m001*0.01;

			echo " $b500 de 500" . "<br/>";
			echo " $b200 de 200" . "<br/>";
			echo " $b100 de 100" . "<br/>";
			echo " $b050 de  50" . "<br/>";
			echo " $b020 de  20" . "<br/>";
			echo " $b010 de  10" . "<br/>";
			echo " $b005 de   5" . "<br/>";
			echo " $m200 de   2" . "<br/>";
			echo " $m100 de   1" . "<br/>";
			echo " $m050 de   0'50" . "<br/>";
			echo " $m020 de   0'20" . "<br/>";
			echo " $m010 de   0'10" . "<br/>";
			echo " $m005 de   0'05" . "<br/>";
			echo " $m002 de   0'02" . "<br/>";
			echo " $m001 de   0'01" . "<br/>";

			echo "<br>";
			// Otra opción
			$dinero = [ "billetes" => [500, 200, 100, 50, 20, 10, 5],
									"monedas" => [2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01] ];

			$cantidad = 2345.67;

			foreach($dinero as $medio_fisico => $valores)
			{
				foreach($valores as $valor)
				{
					if($cantidad >= $valor)
					{
						echo "$medio_fisico con valor de \$$valor: ".floor($cantidad/$valor)."<br>";
						$cantidad = $cantidad % $valor; 
						if(!$cantidad)
							break 2;
					}
				}
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