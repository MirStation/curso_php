<?php

class Cliente {
	private $nome;
	private $codigo;

	public function __construct($nome, $codigo) {
	       $this->nome = $nome;
	       $this->codigo = $codigo;
	}

	public function imprimeDadosDoCliente() {
	       echo "Cliente:\n";
	       echo "    nome: $this->nome\n";
	       echo "    código: $this->codigo\n";
	}

}

?>