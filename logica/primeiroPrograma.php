<?php

$saldo = 100;

$saldo += 300;

echo "Saldo final: $saldo\n";

$saldo -= 200;

echo "Saldo após saque: $saldo\n";

//

$a = 10;

$b = 10;

$resultado = $a === $b;

echo "a === b : $resultado\n";

var_dump($resultado);


//

$altura = 2.1;

echo "Altura: $altura\n";
if ($altura >= 1.40 && $altura <= 2) {
   echo "Pode entrar.\n";
} else {
  echo "Não pode entrar.\n";
}

//

$i = 0;

while($i < 100) {
	 echo "Deu onda.\n";
	 $i += 1;
}

?>