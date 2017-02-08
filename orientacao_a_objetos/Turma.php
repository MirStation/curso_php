<?php

class Turma {
	private $periodo;
	private $serie;
	private $sigla;
	private $tipoEnsino;

	public function __construct($periodo, $serie, $sigla, $tipoEnsino) {
	       $this->periodo = $periodo;
	       $this->serie = $serie;
	       $this->sigla = $sigla;
	       $this->tipoEnsino = $tipoEnsino;

	}
	
	public function imprimeDadosDaTurma() {
	       echo "Turma:\n";
	       echo "    período: $this->periodo\n";
	       echo "    série: $this->serie\n";
	       echo "    sigla: $this->sigla\n";
	       echo "    tipo de ensino: $this->tipoEnsino\n";
	}

}

?>