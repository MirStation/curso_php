<?php

$vetor = array(2, 3, 4, 5);
$tamanho = count($vetor);
$res = [];

for($i = 0; $i < $tamanho; $i++) {
       array_push($res, 1);
       for($j = 0; $j < $tamanho; $j++) {
       	      if ($vetor[$i] != $vetor[$j]) {
	      	 $res[$i] *= $vetor[$j];
	      }
       }
}

for ($i = 0; $i < $tamanho; $i++) {
       echo $res[$i]."\n";
}

?>
