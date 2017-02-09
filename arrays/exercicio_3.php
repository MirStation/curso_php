<?php

$sum = 0;

if ($argc > 1) {
   for ($i = 1; $i < $argc; $i++) {
       $sum += floatval($argv[$i]);
   }
   echo $sum / ($argc - 1) . "\n";
}

?>