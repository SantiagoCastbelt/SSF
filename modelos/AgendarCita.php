<?php 
class Citas{

	public $Fecha;
	public $Hora;
	public $NumeroIdentificacion;
	
	function __construct($Fecha, $Hora, $NumeroIdentificacion){

		$this->Fecha = $Fecha;
		$this->Hora = $Hora;
		$this->NumeroIdentificacion = $NumeroIdentificacion;
		
	}
}






 ?>