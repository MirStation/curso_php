<?php

class Agencia {
	private $numero;

	public function __construct($numero) {
	       $this->numero = $numero;
	}

	public function getNumero() {
	       return $this->numero;
	}

	public function setNumero($numero) {
	       $this->numero = $numero;
	}
	
	public function imprimeAgencia() {
	       echo "\nAgência\n";
	       echo "numero: " . $this->numero . "\n";
	}

}
