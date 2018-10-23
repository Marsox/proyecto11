<?php

class Carrito
{
	private $productos = [];

	public function meter(iEnCarrito $elemento)
	{
		$this->productos[] = $elemento;
	}

	public function mostrar()
	{
		$total = 0;
		$totalIva = 0;

		echo '<div class="carrito">';

		foreach ($this->productos as $key => $producto) {
			echo '<article class="lineacarrito">';
			echo $producto->mostrar();

			$enlaceMasUnidad = "?accion=masunidad&indice=$key";
			$enlaceMenosUnidad = "?acction=menosunidad&indice=$key";
			$enlaceEliminar = "?accion=eliminar&indice=$key";

			if ($producto->permiteUnidades()) {
				echo "<a href=\"$enlaceMenosUnidad\">-</a> / <a href=\"$enlaceMasUnidad\">+</a>";
			}

			echo "<a class=\"enlaceeliminar\" href=\"$enlaceEliminar\">Eliminar</a>";
			echo '</article>';

			$total += $producto->precio();
			$totalIva += $producto->precioIva();
		}

		echo '<div class="totalcarrito">TOTAL: ' . $total . ' (' . $totalIva . ' IVA incluido)</div>';

		echo '</div>';
	}

	public function quitar($indice)
	{
		unset($this->productos[$indice]);
	}

	public function masUnidad($indice)
	{
		$this->productos[$indice]->masUnidad();
	}

	public function menosUnidad($indice)
	{
		$this->productos[$indice]->menosUnidad();
	}

}


?>