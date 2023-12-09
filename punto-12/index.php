<?php
$numero;
$resultado;

echo "Digite un número: ";
$numero = readline();

for ($n = 0; $n <= 30; $n++){
  $resultado = $numero * $n;
  echo "$numero x $n = $resultado \n";
}

?>
