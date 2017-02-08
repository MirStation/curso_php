<?php

class Agencia {
	private $numero;

	public function __construct($numero) {
	       $this->numero = $numero;
	}

	public function imprimeDadosDaAgencia() {
	       echo "Agência:\n";
	       echo "    número: $this->numero\n";
	}

}

?>