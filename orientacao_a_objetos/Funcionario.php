<?php

class Funcionario {
	protected $nome;
	protected $salario;

	public function __construct($nome, $salario) {
	       $this->salario = $salario;
	       $this->nome = $nome;
	}

	public function aumentaSalario($valor) {
	       $this->salario += $valor;
	}
	
	public function consultaDados() {
	       echo "Funcionário:\n";
	       echo "    nome: $this->nome\n";
	       echo "    salário: $this->salario R\$\n";
	}

	public function calculaBonificacao() {
	       echo $this->salario * 0.1;
	}

}

?>