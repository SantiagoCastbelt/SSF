<?php 


class servicios{

	public $codigo;
	public $nombre;
	public $IdCategoria;
	
	function __construct($codigo, $nombre, $IdCategoria){

		$this->codigo = $codigo;
		$this->nombre = $nombre;
		$this->IdCategoria = $IdCategoria;
	}
}




 ?>