<?php

class Funcionario {
	private $nome;
	private $salario;

	public function __construct($nome, $salario) {
	       $this->salario = $salario;
	       $this->nome = $nome;
	}

	public function getNome() {
	       return $this->nome;
	}

	public function setNome($nome) {
	       $this->nome = $nome;
	}

	public function getSalario() {
	       return $this->salario;
	}

	public function setSalario($salario) {
	       $this->salario = $salario;
	}
	
	public function imprimeFuncionario() {
	       echo "\nFuncionário\n";
	       echo "nome: " . $this->nome . "\n";
	       echo "salário: " . $this->salario . " R\$\n";
	}

}
