<?php

require "Funcionario.php";

$funcionario = new Funcionario('Rafael Cosentino', 1000);
$funcionario->consultaDados();
$funcionario->aumentaSalario(100);
$funcionario->consultaDados();

?>