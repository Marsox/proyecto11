<?php 

/* Dado un valor en pesetas, convertirlo a euros. La solución deberá tener dos decimales. */

$pesetas = 1000;

$euros = $pesetas / 166.386;

echo "La cantidad de $pesetas Pesetas son " . round($euros,2) . " Euros.";


?>