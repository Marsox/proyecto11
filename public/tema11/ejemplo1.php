<?php 

class Freelance
{
	
	private $nombre;
	protected $ocupado;
	private $precioHora = 10;
	private $comienzoTrabajo;
	public static $juegoCaracteres = 'UTF-8';

	public function __construct($nombre, $precioHora)
	{
		$this->nombre = $nombre;
		$this->precioHora = $precioHora;
		$this->ocupado = $false;
	}

	public function desarrollar()
	{
		echo "<br>Soy ". $this->nombre . " y comienzo a trabajar<br>";
		echo "Uso el juego de caracteres " . self::$juegoCaracteres;
		$this->ocupado = true;
		$this->comienzoTrabajo = time();
	}

	public function parar()
	{
		$this->ocupado = false;
		$horas_trabajadas = ceil((time() - $this->comienzoTrabajo) / 3600);
		echo "Terminé de trabajar. Facturo " . ($horas_trabajadas * $this->precioHora);
	}

	public function __destruct()
	{
		echo "Soy " . $this->nombre;
		echo " y dejo de trabajar. Adios!!";
	}

	public static function diasTrabajo()
	{
		if ($invierno) {
			return ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
		}

		return ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];
	}
}

?>