<?php

$vetor = array(1, 2, 3, 4);
$tamanho = count($vetor);

for ($i = 0, $j = $tamanho - 1; $i < $j; $j--, $i++) {
       $tmp = $vetor[$i];
       $vetor[$i] = $vetor[$j];
       $vetor[$j] = $tmp;
}

for ($i = 0; $i < $tamanho; $i++) {
       echo $vetor[$i]."\n";
}

?>
