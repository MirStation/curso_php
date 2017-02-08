<?php

class Funcionario {
	private $nome = "";
	private $salario = 0;

	public function __construct($nome, $salario) {
	       $this->salario = $salario;
	       $this->nome = $nome;
	}

	public function aumentaSalario($valor) {
	       $this->salario += $salario;
	}
	
	public function consultaDados() {
	       echo "\nFuncionário\n";
	       echo "nome: " . $this->nome . "\n";
	       echo "salário: " . $this->salario . " R\$\n";
	}

}
