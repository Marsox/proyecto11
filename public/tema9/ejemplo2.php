<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Citas Medicas</title>
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
			<h2 class="display-4 text-center">Citas Medicas</h2>
			<p class="lead"></p>
		</header>

		<div class="container-text">
			<p class="lead"></p>
			<?php 
				$archivo = 'citas.txt';

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					if (isset($_POST['cita']) && $_POST['cita'] != '' && isset($_POST['nombre']) && ! empty($_POST['nombre'])) {
						
						$fuente = fopen($archivo, "a+");

						if (is_writable($archivo)) {
							$reserva = $_POST['cita'] . ' : ' . $_POST['nombre'] . "\n";
							fwrite($fuente, $reserva);
							fclose($fuente);
							echo '<h2>Cita Guardada</h2>';
						}

					} else {
						echo '<h4>Los datos introducidos no son correctos</h4><br>';
					}
				} else {
					include 'formulario_citas.php';
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