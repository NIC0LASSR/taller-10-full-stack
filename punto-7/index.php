<?php

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
    $resultado = $numUno + $numDos;
    echo "La suma es $resultado";
    break;
  case 2:
    $resultado = $numUno - $numDos;
    echo "La resta es $resultado";
    break;
  case 3:
    $resultado = $numUno * $numDos;
    echo "La multiplicacion es $resultado";
    break;
  case 4:
    $resultado = $numUno / $numDos;
    echo "La division es $resultado";
    break;
}

?>