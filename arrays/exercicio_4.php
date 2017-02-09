<?php

if ($argc > 1) {
   $maior = $argv[1];
   for ($i = 2; $i < $argc; $i++) {
       if ($maior < $argv[$i]) {
       	  $maior = $argv[$i];
       }
   }
   echo $maior."\n";
}

?>
