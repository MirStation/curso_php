<?php

require "Aluno.php";

$aluno1 = new Aluno('Marcelo Martins', '333333333-3', '02/04/1985');
$aluno1->imprimeDadosDoAluno();

$aluno2 = new Aluno('Rafael Cosentino', '222222222-2', '30/10/1984');
$aluno2->imprimeDadosDoAluno();

?>