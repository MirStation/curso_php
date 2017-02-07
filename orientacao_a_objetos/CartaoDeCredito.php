<?php

class CartaoDeCredito {
	private $numero;
	private $dataDeValidade;

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

	public function getCodigo() {
	       return $this->codigo;
	}

	public function setDataDeValidade($dataDeValidade) {
	       $this->dataDeValidade = $dataDeValidade;
	}

	
	public function imprimeCartaoDeCredito() {
	       echo "\nCartão de crédito\n";
	       echo "numero: " . $this->numero . "\n";
	       echo "data de validade: " . $this->dataDeValidade . "\n";
	}

}
