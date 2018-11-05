<?php 

include 'etiqueta.php';
include "enelace.php";
include "migasPan.php";
include 'MigasPanContenedor.php';

$migas = new MigasPan("-", "section");

$migas->agregaNodo("Home", "http://www.iescierva.net");
$migas->agregaNodo("Noticias", "http://www.iescierva.net/noticias");
$migas->agregaNodo("Noticias Académicas", "http://www.iescierva.net/noticias/academicas");

echo $migas->mostrar();

?>