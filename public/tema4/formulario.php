<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<a href="../tema4/">Regresar a Tema 4</a>
	<br>
	<br>
	
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" >
		<p>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="email" name="email" value="">
		</p>
		<p>
			<label for="clave1">Clave1</label>
			<input type="password" name="clave[original]" value="">
		</p>
		<p>
			<label for="clave2">Clave2</label>
			<input type="password" name="clave[repetida]" value="">
		</p>
		<p>
			<label for="intereses">Intereses</label>
			<select name="intereses[]" multiple>
				<option value="nadar">Nadar</option>
				<option value="correr">Correr</option>
				<option value="reir">Reir</option>
				<option value="llorar">Llorar</option>
			</select>
		</p>
		<p>
			<label>
				<input type="submit" value="Enviar" name="registrarse">
				<input type="submit" value="Cancelar" name="registrarse">
			</label>
		</p>
		

	</form>


</body>
</html>