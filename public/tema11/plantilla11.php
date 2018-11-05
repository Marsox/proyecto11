<?php 

class Plantilla
{
	
	private $html; //Nuestra Plantilla Original.
	private $htmlGenerado; //Nuestra Plantilla con los valores sustituidos del array.

	public function __construct($html)
	{
		$this->html = html;
		$this->htmlGenerado = "";
	}

	private function cargarDatos($diccionario) {
		$this->htmlGenerado = $this->html;
		foreach ($diccionario as $key => $value) {
			$this->htmlGenerado = str_replace("%key%", $value, $this->htmlGenerado);
		}
	}

	private function render()
	{
		echo $this->htmlGenerado;
	}

	public function renderData($diccionario)
	{
		$this->cargarDatos($diccionario);
		$this->render();
	}

}


?>