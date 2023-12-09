<?php

function sumar($numUno, $numDos) {
  $resultado = $numUno + $numDos;
  echo "La suma es $resultado";
  return $resultado;
}

function restar($numUno, $numDos) {
  $resultado = $numUno - $numDos;
  echo "La resta es $resultado";
  return $resultado;
}

function multiplicar($numUno, $numDos) {
  $resultado = $numUno * $numDos;
  echo "La multiplicacion es $resultado";
  return $resultado;
}

function dividir($numUno, $numDos) {
  $resultado = $numUno / $numDos;
  echo "La division es $resultado";
  return $resultado;
}

$numUno;
$numDos;
$resultado;
$opcion;

$mensaje ="
Bienvenido!\n\n
1.Sumar\n
2.Restar\n
3.Multiplicar\n
4.Dividir\n
";

echo "Digite un numero: \n";
$numUno = readline();
echo "Digite otro numero: \n";
$numDos = readline();
echo $mensaje;
echo "Digite una opcion: \n";
$opcion = readline();

switch ($opcion) {
    case 1:
        sumar($numUno, $numDos);
        break;
    case 2:
        restar($numUno, $numDos);
        break;
    case 3:
        multiplicar($numUno, $numDos);
        break;
    case 4:
        dividir($numUno, $numDos);
        break;
}

?>

