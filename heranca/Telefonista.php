<?php

require_once "../orientacao_a_objetos/Funcionario.php";

class Telefonista extends Funcionario
{
	private $estacaoDeTrabalho;

	public function __construct($nome, $salario, $estacaoDeTrabalho) {
	       $this->estacaoDeTrabalho = $estacaoDeTrabalho;
	       parent::__construct($nome, $salario);
	}

	public function getEstacaoDeTrabalho() {
	       return $this->estacaoDeTrabalho;
	}

}

?>