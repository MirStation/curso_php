<?php

require_once "../orientacao_a_objetos/Conta.php";

echo "ce: " . Conta::$contadorEstatico . "\n\n";

$conta1 = new Conta(123, 1315, 4000);

echo "ce: " . Conta::$contadorEstatico . "\n";
echo "c1: $conta1->contador\n\n";

$conta2 = new Conta(456, 500.50, 4000);

echo "ce: " . Conta::$contadorEstatico . "\n";
echo "c1: $conta1->contador\n";
echo "c2: $conta2->contador\n";

?>