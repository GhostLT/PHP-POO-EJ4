<?php 

include_once('class.Primera.php');

class Segunda extends Primera{

	protected $algodos;

	public function __construct($parametrodos){
		$this->algodos = $parametrodos;

	}

	public function Imprimir(){
		echo $this->algodos;


	}

}

 ?>