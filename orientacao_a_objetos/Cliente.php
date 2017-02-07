<?php

class Cliente {
	private $nome;
	private $codigo;

	public function __construct($nome, $codigo) {
	       $this->nome = $nome;
	       $this->codigo = $codigo;
	}

	public function getNome() {
	       return $this->nome;
	}

	public function setNome($nome) {
	       $this->nome = $nome;
	}

	public function getCodigo() {
	       return $this->codigo;
	}

	public function setCodigo($codigo) {
	       $this->codigo = $codigo;
	}

	public function imprimeCliente() {
	       echo "\nCliente\n";
	       echo "nome: " . $this->nome . "\n";
	       echo "codigo: " . $this->codigo . "\n";
	}

}
