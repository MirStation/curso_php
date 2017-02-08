<?php

require "Conta.php";

$conta = new Conta(123, 0, 100);
$conta->deposita(1000);
$conta->imprimeExtrato();
$conta->saca(100);
$conta->imprimeExtrato();
$conta->consultaSaldoDisponivel();

?>