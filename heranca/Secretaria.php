<?php

require_once "../orientacao_a_objetos/Funcionario.php";

class Secretaria extends Funcionario
{
	private $ramal;

	public function __construct($nome, $salario, $ramal) {
	       $this->ramal = $ramal;
	       parent::__construct($nome, $salario);
	}

	public function imprimeSecretaria() {
	       echo "SECRETARIA\n";
	       echo $this->nome."\n";
	       echo $this->salario."\n";
	       echo $this->ramal."\n";
	}

}

?>