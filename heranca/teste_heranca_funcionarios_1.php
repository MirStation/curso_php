<?php

require_once "Gerente.php";
require_once "Secretaria.php";
require_once "Telefonista.php";

$gerente = new Gerente('Rafael Cosentino', 2000, 'rafael.consetino', 12345);
$telefonista = new Telefonista('Carolina Mello', 1000, 13);
$secretaria = new Gerente('Tatiane Andrade', 1500, 198);

?>