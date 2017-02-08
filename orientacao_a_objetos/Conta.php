<?php

class Conta {
	private $numero;
	private $saldo;
	private $limite;
	private $agencia = NULL;
	private $extrato = [];

	public function __construct($numero, $saldo, $limite) {
	       $this->numero = $numero;
	       $this->saldo = $saldo;
	       $this->limite = $limite;
	       array_push($this->extrato, "$saldo R\$");
	}

	public function deposita($valor) {
	       $this->saldo += $valor;
	       array_push($this->extrato, "+$valor R\$");
	       array_push($this->extrato, "$this->saldo R\$");
	}

	public function saca($valor) {
	       if ($valor <= $this->saldo || $valor <= $this->limite) {
	       	  $this->saldo -= $valor;
		  array_push($this->extrato, "-$valor R\$");
		  array_push($this->extrato, "$this->saldo R\$");
	       } else if ($valor > $this->limite) {
	       	  echo "O valor de saque é maior que o limite permitido.\n";
	       } else {
	       	  echo "Saldo insufuciente.\n";
	       }
	}

	public function consultaSaldoDisponivel() {
	       echo "Saldo: $this->saldo R\$\n";
	}

	public function imprimeExtrato() {
	       echo "Extrato:\n";	   
	       for ($i = 0; $i < count($this->extrato); $i++) {
	       	   echo "    {$this->extrato[$i]}\n";	   
	       }
	}

	public function setAgencia($agencia) {
	       $this->agencia = $agencia;
	}
	
	public function imprimeDadosDaConta() {
	       echo "Conta:\n";
	       echo "    número: $this->numero\n";
	       echo "    saldo: $this->saldo R\$\n";
	       echo "    limite: $this->limite R\$\n";
	}

	public function imprimeDadosDaAgencia() {
	       $this->agencia->imprimeDadosDaAgencia();
	}

}

?>