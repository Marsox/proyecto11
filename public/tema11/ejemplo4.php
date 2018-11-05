<?php 

include "plantilla11.php";

$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi Pagina con template</title>
</head>
<body>
	<b>Hola %nombre%</b>
	<b>Estoy muy %animo%</b>
	<b>Vivo en %ciudad%</b>
</body>
</html>';


$diccionario = ["nombre" => "pepe", "animo" => "contento", "ciudad" => "Murcia"];

$plantillas = new Plantilla($html);
$plantillas->renderData($diccionario);

?>
