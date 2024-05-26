<?php

class profesionales{

    public $TipoIdentificacion;
    public $NumeroIdentificacion;
    public $Nombres;
    public $Apellidos;
    public $FechaNacimiento;
    public $Sexo;
    public $CorreoElectronico;
    public $Telefono;

    function __construct($TipoIdentificacion, $NumeroIdentificacion, $Nombres, $Apellidos, $FechaNacimiento,$Sexo, $CorreoElectronico, $Telefono){

        $this->TipoIdentificacion = $TipoIdentificacion;
        $this->NumeroIdentificacion =  $NumeroIdentificacion;
        $this->Nombres =  $Nombres;
        $this->Apellidos =  $Apellidos;
        $this->FechaNacimiento = $FechaNacimiento;
        $this->Sexo = $Sexo;
        $this->CorreoElectronico = $CorreoElectronico;
        $this->Telefono = $Telefono;
        
    }
}

?>