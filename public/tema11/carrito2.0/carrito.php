<?php 

class Carrito
{
	
	private $productos = [];

	public function meter($producto)
	{
		$this->productos[] = $producto;
	}

	public function mostrar()
	{
		$total = 0;
		$totalIva = 0;

		echo '<div class="carrito">';

		foreach ($this->productos as $producto) {
			echo '<article class="lineacarrito">';
			echo $producto->mostrar();
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