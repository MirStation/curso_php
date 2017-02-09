<?php

$parametros = [];

if ($argc > 1) {
   for ($i = 1; $i < $argc; $i++) {
       array_push($parametros, $argv[$i]);
   }
}

if (sort($parametros)) {
   for ($i = 0; $i < $argc - 1; $i++) {
       echo $parametros[$i]."\n";
   }
} else {
   echo "Erro na ordenação.";
}

?>