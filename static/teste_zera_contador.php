<?php

require_once "../orientacao_a_objetos/Conta.php";

echo "ce: " . Conta::$contadorEstatico . "\n\n";

$conta1 = new Conta(0, 1315, 4000);

echo "ce: " . Conta::$contadorEstatico . "\n";
echo "c1num: $conta1->numeroContaAutomatico\n\n";

$conta2 = new Conta(0, 500.50, 4000);

echo "ce: " . Conta::$contadorEstatico . "\n";
echo "c2num: $conta2->numeroContaAutomatico\n\n";

Conta::zeraContador();

echo "\nce: " . Conta::$contadorEstatico . "\n";

$conta3 = new Conta(0, 7600.50, 10000);

echo "\nce: " . Conta::$contadorEstatico . "\n";
echo "c3num: $conta3->numeroContaAutomatico\n";


?>