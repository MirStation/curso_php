<?php

class CartaoDeCredito {
	private $numero;
	private $dataDeValidade;

	private $cliente = NULL;

	public function __construct($numero, $dataDeValidade) {
	       $this->numero = $numero;
	       $this->dataDeValidade = $dataDeValidade;
	}

	public function setCliente($cliente) {
	       $this->cliente = $cliente;
	}

	public function imprimeDadosDoCartaoDeCredito() {
	       echo "Cartão de crédito:\n";
	       echo "    número: $this->numero\n";
	       echo "    data de validade: $this->dataDeValidade\n";
	}


	public function imprimeDadosDoCliente() {
	       $this->cliente->imprimeDadosDoCliente();
	}

}

?>