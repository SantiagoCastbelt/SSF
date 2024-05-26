<?php 

	class Usuario {

		public $NombreUsuario; 
		public $Contraseña;
        public $codigoRol;


		function __construct($NombreUsuario,$Contraseña,$codigoRol){

			$this->NombreUsuario = $NombreUsuario;
			$this->Contraseña = $Contraseña;
			$this->codigoRol = $codigoRol;
		}

	}

 ?>