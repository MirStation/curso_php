<?php

$nPrimeirosFibonacci = 14;

$primeiroAntecessor = 1; 
$segundoAntecessor = 0;
$atual = 0;

if ($nPrimeirosFibonacci == 1) {
   echo "0";
} else {
   echo "0, 1";
   if ($nPrimeirosFibonacci > 2) {
      for ($i = 0; $i < $nPrimeirosFibonacci - 2; $i++) {
      	  $atual = $primeiroAntecessor + $segundoAntecessor;
      	  echo ", $atual";
      	  $segundoAntecessor = $primeiroAntecessor;
      	  $primeiroAntecessor = $atual;
      }
   }
}

echo "\n";