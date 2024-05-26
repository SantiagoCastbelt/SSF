<?php 
class Secion1{

	public $Paciente;
	public $peso;
	public $presionArterial;
	public $Estatura;
	public $Diagnostico;

	function __construct($Paciente, $peso, $presionArterial, $Estatura, $Diagnostico){

		$this->Paciente = $Paciente;
		$this->peso = $peso;
		$this->presionArterial = $presionArterial;
		$this->Estatura = $Estatura;
		$this->Diagnostico = $Diagnostico;
	
	}
}



 ?>