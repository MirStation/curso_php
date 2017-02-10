<?php

require_once "../orientacao_a_objetos/Funcionario.php";

class Gerente extends Funcionario {
	private $usuario;
	private $senha;

	public function __construct($nome, $salario, $usuario, $senha) {
	       $this->usuario = $usuario;
	       $this->senha = $senha;
	       parent::__construct($nome, $salario);
	}

	public function getUsuario() {
	       return $this->usuario;
	}

	public function getSenha() {
	       return $this->senha;
	}

	public function calculaBonificacao() {
	       echo $this->salario * 0.6 + 100;
	}

}

?>