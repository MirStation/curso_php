<?php

require "Aluno.php";
require "Turma.php";

$turma = new Turma('Manhã', 5, 'B', 'Fundamental');

$aluno = new Aluno('Rafael Cosentino', '111111111-1', '30/10/1984');
$aluno->setTurma($turma);
$aluno->imprimeTurma();





