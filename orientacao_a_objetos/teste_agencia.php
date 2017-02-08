<?php

require "Agencia.php";

$agencia1 = new Agencia(1234);
$agencia2 = new Agencia(5678);

$agencia1->imprimeDadosDaAgencia();
$agencia2->imprimeDadosDaAgencia();

?>