<?php

require_once "../orientacao_a_objetos/Funcionario.php";

class Secretaria extends Funcionario
{
	private $ramal;

	public function __construct($nome, $salario, $ramal) {
	       $this->ramal = $ramal;
	       parent::__construct($nome, $salario);
	}

	public function getRamal() {
	       return $this->ramal;
	}

}

?>