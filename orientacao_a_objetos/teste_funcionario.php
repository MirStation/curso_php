<?php

require "Funcionario.php";

$funcionario1 = new Funcionario('Marcelo Martins', 1800.57);
$funcionario1->consultaDados();

$funcionario2 = new Funcionario('Rafael Cosentino', 2000.88);
$funcionario2->consultaDados();

?>