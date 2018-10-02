<?php 

/* La fecha de cualquier Domingo de Pascua se calcula de la siguiente forma:

    Sea X el año para el que quiere calcularse la fecha.
    Sea A el resto de la división de X entre 19
    Sea B el resto de la división de X entre 4
    Sea C el resto de la división de X entre 7
    Sea D el resto de la división de (19*A+24) entre 30
    Sea E el resto de la división de (2B+4C+6D+5) entre 7

La fecha para el Domingo de Pascua es el día (22+D+E) de Marzo (tener en cuenta que puede ser de Abril).
Escribir un programa que dado un año obtenga por pantalla la fecha del Domingo de Pascua de ese año. */

$año = 2019;

$a = $año % 19;
$b = $año % 4;
$c = $año % 7;
$d = (19 * $a + 24) % 30;
$e = (2 * $b + 4 + $c + 6 * $d + 5) % 7;

$fecha = 22 + $d + $e;

if ($fecha < 32) {
	echo 'El Domingo de pascua es el ' . $fecha . ' de Marzo.<br>';
} else {
	echo 'El Domingo de pascua es el ' . ($fecha-31) . ' de Abril.<br>';
}



 ?>