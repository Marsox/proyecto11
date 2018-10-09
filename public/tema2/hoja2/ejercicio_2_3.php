<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3</title>
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
			<h2 class="display-4 text-center">Ejercicio 3</h2>
		</header>

		<div class="container-text">
			<p class="lead">Escribir un programa que calcule las raíces, bien reales o imaginarias, de una ecuación de segundo grado. El programa también debe ser capaz de operar con valores nulos para el coeficiente de orden 2.<br>
			La ecuacion a resolver es ax^2+bx+c=0.</p>
			<h4>Solución</h4>
			<?php
			//La ecuacion a resolver es ax^2+bx+c=0
			$a = 0;
			$b = 1;
			$c = 1;

			if($a == 0){
			    $sol = -$c / $b;
			    echo "x = $sol <br>";
			}else{
			    $discriminante = $b * $b - 4 * $a * $c;

			    if($discriminante > 0){
			        $sol1 = (-$b + sqrt($discriminante))/(2 * $a);
			        $sol2 = (-$b - sqrt($discriminante))/(2 * $a);
			        echo "x1 = $sol1<br>";
			        echo "x2 = $sol2<br>";
			    }elseif($discriminante == 0){
			        $sol = -$b / (2 * $a);
			        echo "x = $sol<br>";
			    }else{
			        $solReal = -$b / (2 * $a);
			        $solImaginaria = sqrt(-$discriminante) / (2 * $a);
			        echo "x1 = $solReal + {$solImaginaria}i<br>";
			        echo "x2 = $solReal - {$solImaginaria}i<br>";
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