<?php

require "Cliente.php";

$cliente1 = new Cliente("Rafael Cosentino", 1);
$cliente2 = new Cliente("Jonas Hirata", 2);

$cliente1->imprimeCliente();
$cliente2->imprimeCliente();
