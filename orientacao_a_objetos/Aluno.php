<?php

class Aluno {
	private $nome;
	private $rg;
	private $dataNascimeto;

	private $turma = NULL;

	public function __construct($nome, $rg, $dataNascimento) {
	       $this->nome = $nome;
	       $this->rg = $rg;
	       $this->dataNascimento = $dataNascimento;
	}

	public function setTurma($turma) {
	       $this->turma = $turma;
	}
	
	public function imprimeDadosDoAluno() {
	       echo "Aluno:\n";
	       echo "    nome: $this->nome\n";
	       echo "    rg: $this->rg\n";
	       echo "    data de nascimento: $this->dataNascimento\n";
	}

	public function imprimeDadosDaTurma() {
	       $this->turma->imprimeDadosDaTurma();
	}
}

?>
