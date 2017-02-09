<?php

function merge($array, $posInicial, $posCentral, $posFinal) {
	 $tamArrayEsq = $posCentral - $posInicial + 1;
	 $tamArrayDir = $posFinal - $posCentral;
	 $arrayEsq = [];
	 $arrayDir = [];
	 for ($i = 0; $i < $tamArrayEsq; $i++) {
	     array_push($arrayEsq, $array[$posInicial + $i]);
	 }
	 for ($i = 0; $i < $tamArrayDir; $i++) {
	     array_push($arrayDir, $array[$posCentral + $i + 1]);
	 }
	 $i = 0;
	 $j = 0;
	 $k = $posInicial;
	 while ($i < $tamArrayEsq && $j < $tamArrayDir) {
	     if ($arrayEsq[$i] <= $arrayDir[$j]) {
	     	$array[$k] = $arrayEsq[$i];
		$i++;
	     } else {
	       	$array[$k] = $arrayDir[$j];
		$j++;
	     }
	     $k++;
	 }
	 while ($i < $tamArrayEsq){
	 	  $array[$k] = $arrayEsq[$i];
		  $i++;
		  $k++;
	 }
	 while ($j < $tamArrayDir){
	 	  $array[$k] = $arrayDir[$j];
		  $j++;
		  $k++;
	 }
	 return $array;
}

function mergeSort($array, $posInicial, $posFinal) {
	 if ($posInicial < $posFinal) {
	    $posCentral = floor(($posInicial + $posFinal) / 2);
	    $array = mergeSort($array, $posInicial, $posCentral);
	    $array = mergeSort($array, $posCentral + 1, $posFinal);
	    $array = merge($array, $posInicial, $posCentral, $posFinal);
	 }
	 return $array;
}

$parametros = [];

if ($argc > 1) {
   for ($i = 1; $i < $argc; $i++) {
       array_push($parametros, $argv[$i]);
   }
}

$parametros = mergeSort($parametros, 0, $argc-2);

for ($i = 0; $i < $argc-1; $i++) {
    echo $parametros[$i]."\n";
}

?>