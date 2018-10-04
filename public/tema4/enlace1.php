<a href="../tema4/">Regresar a Tema 4</a>
	<br>
	<br>

<h1>Presentando datos por GET</h1>
<p>El nombre es <?= $_GET['nombre'] ?></p>
<p>El apellido es <?= $_GET['apellido'] ?></p>
<p>El email es <?= isset($_GET['email']) ? $_GET['email'] : "No existe el campo"?></p> 