<?php


$valor = "Esto es un ejemplo<br>";

var_dump($valor);


$texto = "Cadena";
echo $texto ? "Cadena no vacía<br>" : "Cadena vacía<br>";

$arrayPaises = ['España' => 'Madrid',
								'Francia' => 'Paris',
								'Portugal' => 'Lisboa'];

// Opción 1
foreach ($arrayPaises as $key => $value) {
	echo "La capital de $key es $value <br>";
}
// Error
foreach ($arrayPaises as $key => $value) {
	echo 'La capital de $key es $value <br>';
}
// Opcioón 2
foreach ($arrayPaises as $key => $value) {
	echo 'La capital de ' . $key . ' es ' . $value . '<br>';
}