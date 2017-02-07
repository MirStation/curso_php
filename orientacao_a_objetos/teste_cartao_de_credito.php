<?php

require "CartaoDeCredito.php";

$cartaoDeCredito1 = new CartaoDeCredito(111111, '01/01/2013');
$cartaoDeCredito2 = new CartaoDeCredito(222222, '01/01/2014');

$cartaoDeCredito1->imprimeCartaoDeCredito();
$cartaoDeCredito2->imprimeCartaoDeCredito();
