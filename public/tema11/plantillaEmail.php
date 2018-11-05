<?php 

class PlantillaEmail extends Plantilla11
{
	private $subject;
	private $to;

	public function __construct($to, $subject, $body)
	{
		parent::__construct($body);
		$this->to = to;
		$this->subject = subject;
	}

	protected function render()
	{
		mail($this->to, $this->subject, $this->htmlGenerado);
	}

}

?>