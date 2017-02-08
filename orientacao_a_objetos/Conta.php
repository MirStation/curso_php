<?php

class Conta {
	private $numero = 0;
	private $saldo = 0;
	private $limite = 0;
	private $agencia;

	private $extrato = "";

	public function __construct($numero, $saldo, $limite) {
	       $this->numero = $numero;
	       $this->saldo = $saldo;
	       $this->limite = $limite;
	       $this->extrato .= "{$this->saldo}\n";
	}

	public function deposita($valor) {
	       $this->saldo += $valor;
	       $this->extrato .= "+{$valor}\n";
	       $this->extrato .= "{$this->saldo}\n";
	}

	public function saca($valor) {
	       if ($valor <= $this->saldo) {
	       	  $this->saldo -= $valor;
		  $this->extrato .= "-{$valor}\n";
		  $this->extrato .= "{$this->saldo}\n";
	       } else {
	       	  echo "Saldo insufuciente.\n"
	       }
	}

	public function consultaSaldoDisponivel() {
	       echo "{$this->saldo} R\$\n";
	}

	public function imprimeExtrato() {
	       echo $this->extrato;
	}

	public function setAgencia($agencia) {
	       $this->agencia = $agencia;
	}
	
	public function imprimeConta() {
	       echo "\nConta\n";
	       echo "número: " . $this->numero . "\n";
	       echo "saldo: " . $this->saldo . " R\$\n";
	       echo "limite: " . $this->limite . " R\$\n";
	}

	public function imprimeAgencia() {
	       $this->agencia->imprimeAgencia();
	}

}
