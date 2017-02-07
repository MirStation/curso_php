<?php

class Conta {
	private $numero;
	private $saldo;
	private $limite;

	public function __construct($numero, $saldo, $limite) {
	       $this->numero = $numero;
	       $this->saldo = $saldo;
	       $this->limite = $limite;
	}

	public function getNumero() {
	       return $this->numero;
	}

	public function setNumero($numero) {
	       $this->numero = $numero;
	}

	public function getSaldo() {
	       return $this->saldo;
	}

	public function setSaldo($saldo) {
	       $this->saldo = $saldo;
	}

	public function getLimite() {
	       return $this->limite;
	}

	public function setLimite($limite) {
	       $this->limite = $limite;
	}
	
	public function imprimeConta() {
	       echo "\nConta\n";
	       echo "número: " . $this->numero . "\n";
	       echo "saldo: " . $this->saldo . " R\$\n";
	       echo "limite: " . $this->limite . " R\$\n";
	}

}
