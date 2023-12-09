<?php

$numero;
$contador=0;
$resultado;

echo "Ingrese un numero: \n";
$numero = readline();

while ($contador <= 30){
  $resultado = $numero * $contador;
  echo $numero . " x " . $contador . " = " . $resultado . "\n";
  $contador++;
}

?>