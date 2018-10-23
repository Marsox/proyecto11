<?php 

class Pack implements iEnCarrito
{
	private $productosPack;
	private $cantidad = 1;

	function __construct($arrayProductos)
	{
		$this->productosPack = $arrayProductos;
	}

	public function mostrar()
	{
		$salida = '<div class="pack">';

		foreach ($this->productosPack as $key => $producto) {
			$salida .= $producto->mostrar();
			$salida .= "<br/>";
		}

		$salida .= '</div>';
		return $salida;
	}

	public function permiteUnidades()
	{
		return true;
	}

	public function precio()
	{
		$total = 0;
		foreach ($this->productosPack as $key => $producto) {
			$total += $producto->precio();
		}
		return $total * $this->cantidad;
	}

	public function precioIva()
	{
		$total = 0;
		foreach ($this->productosPack as $key => $producto) {
			$total += $producto->precioIva();
		}
		return $total * $this->cantidad;
	}

	public function masUnidad($unidades = 1)
	{
		$this->cantidad += $unidades;
	}

	public function menosUnidad()
	{
		if ($this->cantidad > 0) {
			$this->cantidad--;
		}
	}

}

?>