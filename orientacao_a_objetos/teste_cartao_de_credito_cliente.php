<?php

require "Cliente.php";
require "CartaoDeCredito.php";

$cliente = new Cliente('Rafael Cosentino', 123);

$cartaoDeCredito = new CartaoDeCredito(111111, '01/01/2013');
$cartaoDeCredito->setCliente($cliente);
$cartaoDeCredito->imprimeDadosDoCliente();

?>