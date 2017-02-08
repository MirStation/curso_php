<?php

require "Conta.php";
require "Agencia.php";

$agencia = new Agencia(178);

$conta = new Conta(123, 1000.0, 500);
$conta->setAgencia($agencia);
$conta->imprimeAgencia();
