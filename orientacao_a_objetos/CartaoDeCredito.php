<?php

class CartaoDeCredito {
	private $numero;
	private $dataDeValidade;
	private $cliente;

	public function __construct($numero, $dataDeValidade) {
	       $this->numero = $numero;
	       $this->dataDeValidade = $dataDeValidade;
	}

	public function getNumero() {
	       return $this->numero;
	}

	public function setNumero($numero) {
	       $this->numero = $numero;
	}

	public function getDataValidade() {
	       return $this->dataValidade;
	}

	public function setDataDeValidade($dataDeValidade) {
	       $this->dataDeValidade = $dataDeValidade;
	}

	public function getCliente() {
	       return $this->cliente;
	}

	public function setCliente($cliente) {
	       $this->cliente = $cliente;
	}

	public function imprimeCartaoDeCredito() {
	       echo "\nCartão de crédito\n";
	       echo "numero: " . $this->numero . "\n";
	       echo "data de validade: " . $this->dataDeValidade . "\n";
	}


	public function imprimeDono() {
	       echo "\nDono\n";
	       echo "nome: {$this->cliente->getNome()}\n";
	       echo "codigo: {$this->cliente->getCodigo()}\n";
	}

}
