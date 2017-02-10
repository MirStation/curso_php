<?php

require_once "Gerente.php";
require_once "Secretaria.php";
require_once "Telefonista.php";

$gerente = new Gerente('Rafael Cosentino', 2000, 'rafael.consetino', 12345);
$telefonista = new Telefonista('Carolina Mello', 1000, 13);
$secretaria = new Secretaria('Tatiane Andrade', 1500, 198);

$gerente->imprimeGerente();
echo $gerente->calculaBonificacao()."\n";

$telefonista->imprimeTelefonista();
echo $telefonista->calculaBonificacao()."\n";

$secretaria->imprimeSecretaria();
echo $secretaria->calculaBonificacao()."\n";

?>