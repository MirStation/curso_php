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

	public function imprimeGerente() {
	       echo "GERENTE\n";
	       echo $this->nome."\n";
	       echo $this->salario."\n";
	       echo $this->usuario."\n";
	       echo $this->senha."\n";
	}

	public function calculaBonificacao() {
	       return $this->salario * 0.6 + 100;
	}

}

?>