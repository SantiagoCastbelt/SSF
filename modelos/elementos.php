<?php 

class elementos{
	
	public $Idelemento;
	public $Nombre;
	public $Costo;
	public $IdServicio;

	function __construct($Idelemento, $Nombre, $Costo, $IdServicio){

		$this->Idelemento = $Idelemento;
		$this->Nombre = $Nombre;
		$this->Costo = $Costo;
		$this->IdServicio = $IdServicio;
		
	}
}


 ?>