<?php

class Aluno {
	private $nome;
	private $rg;
	private $dataNascimeto;
	private $turma;

	public function __construct($nome, $rg, $dataNascimento) {
	       $this->nome = $nome;
	       $this->rg = $rg;
	       $this->dataNascimento = $dataNascimento;
	}

	public function getNome() {
	       return $this->nome;
	}

	public function setNome($nome) {
	       $this->nome = $nome;
	}

	public function getRg() {
	       return $this->rg;
	}

	public function setRg($rg) {
	       $this->rg = $rg;
	}

	public function getDataNascimento() {
	       return $this->dataNascimento;
	}

	public function setDataNascimento($dataNascimento) {
	       $this->dataNascimento = $dataNascimento;
	}

	public function getTurma() {
	       return $this->turma;
	}

	public function setTurma($turma) {
	       $this->turma = $turma;
	}
	
	public function imprimeAluno() {
	       echo "\nAluno\n";
	       echo "nome: " . $this->nome . "\n";
	       echo "rg: " . $this->rg . "\n";
	       echo "data de nascimento: " . $this->dataNascimento . "\n";
	}

	public function imprimeTurma() {
	       $this->turma->imprimeTurma();
	}

}
