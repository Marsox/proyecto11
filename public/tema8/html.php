<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Plantilla - Proyecto11</title>
	<link rel="stylesheet" type="text/css" href="http://proyecto11.local/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
		<h2 class="display-2 text-center">Ejemplo de Trim()</h2>
		<?php
		 if($_POST) {
		 	if (! empty($_POST['nombre'])) {
		 		$_POST['nombre'] = trim($_POST['nombre']);
		 		if (strlen($_POST['nombre']) < 3) {
		 			echo "No es válido el nombre";
		 		} else {
		 			echo "El nombre es: -" . strip_tags($_POST['nombre']) . "-<br>";
		 			echo "El nombre es: -" . htmlspecialchars(($_POST['nombre'])) . "-<br>";
		 			echo "El nombre es: -" . htmlentities()(($_POST['nombre'])) . "-<br>";
		 		}
		 	} else {
		 		echo "No he recibido el nombre";
		 	}
		 }
		?>

		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
			Nombre: <input type="text" name="nombre">
			<br>
			<input type="submit" value="Enviar">
		</form>

		
	</div>
	<footer class="footer">
		<div class="container">
			<span class="text-muted">Eduardo Marso © 2018-2019.</span>
		</div>
	</footer>

</body>
</html>
