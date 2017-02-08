<?php

require "Turma.php";

$turma1 = new Turma('Tarde', 8, 'A', 'Fundamental');
$turma1->imprimeDadosDaTurma();

$turma2 = new Turma('Manhã', 5, 'B', 'Fundamental');
$turma2->imprimeDadosDaTurma();

?>