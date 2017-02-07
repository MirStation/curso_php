<?php

$numTriangulos = 5;

for ($i = 0; $i < $numTriangulos; $i++) {
    for ($j = 1; $j <= 5; $j++) {
    	for ($k = 1; $k <= $j; $k++) {
    	    echo "*";
    	}
    	echo "\n";
     }
}