<?php 

	$archivo = 'citas.txt';
	$array = file($archivo);
	// var_dump($array);

	echo '<h2>Las citas actuales son:</h2>';
	echo 'FECHA--------------------NOMBRE<br>';

	

	foreach ($array as $value) {
		$datos = explode(' : ', $value);

		echo $value . '<br>';
	}

?>