<?php 
class paciente{

	public $TipoIdentificacion;
	public $NumeroIdentificacion;
	public $Nombre;
	public $Apellidos;
	public $CorreoElectronico;
	public $Telefono;
	public $CiudadResidencia;
	public $DireccionResidencia;
	public $Sexo;
	public $FechaNacimiento;
	public $NombreAcudiente;
	public $ApellidosAcudiente;
	public $CorreoAcudiente;
	public $TelefonoAcudiente;
	public $EdadAcudiente;


	
	function __construct($TipoIdentificacion, $NumeroIdentificacion, $Nombre, $Apellidos, $CorreoElectronico, $Telefono, $CiudadResidencia, $DireccionResidencia, $Sexo, $FechaNacimiento, $NombreAcudiente, $ApellidosAcudiente, $CorreoAcudiente, $TelefonoAcudiente, $EdadAcudiente ){

		$this->TipoIdentificacion = $TipoIdentificacion;
		$this->NumeroIdentificacion = $NumeroIdentificacion;
		$this->Nombre = $Nombre;
		$this->Apellidos= $Apellidos;
		$this->CorreoElectronico = $CorreoElectronico;
		$this->Telefono = $Telefono;
		$this->CiudadResidencia = $CiudadResidencia;
		$this->DireccionResidencia= $DireccionResidencia;
		$this->Sexo = $Sexo;
		$this->FechaNacimiento = $FechaNacimiento;
		$this->NombreAcudiente = $NombreAcudiente;
		$this->ApellidosAcudiente = $ApellidosAcudiente;
		$this->CorreoAcudiente =  $CorreoElectronico;
		$this->TelefonoAcudiente = $TelefonoAcudiente;
		$this->EdadAcudiente = $EdadAcudiente;
	}
}


 ?>