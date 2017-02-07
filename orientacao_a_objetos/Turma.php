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

	public function getPeriodo() {
	       return $this->periodo;
	}

	public function setPeriodo($periodo) {
	       $this->periodo = $periodo;
	}

	public function getSerie() {
	       return $this->serie;
	}

	public function setSerie($serie) {
	       $this->serie = $serie;
	}


	public function getSigla() {
	       return $this->sigla;
	}

	public function setSigla($sigla) {
	       $this->sigla = $sigla;
	}


	public function getTipoEnsino() {
	       return $this->tipoEnsino;
	}

	public function setTipoEnsino($tipoEnsino) {
	       $this->tipoEnsino = $tipoEnsino;
	}
	
	public function imprimeTurma() {
	       echo "\nTurma\n";
	       echo "período: " . $this->periodo . "\n";
	       echo "série: " . $this->serie . "\n";
	       echo "sigla: " . $this->sigla . "\n";
	       echo "tipo de ensino: " . $this->tipoEnsino . "\n";
	}

}
