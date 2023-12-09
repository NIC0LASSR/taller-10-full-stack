<?php

const VALOR_ENTRADA = 25000;

$opcion;
$numPersonas;
$resultado;
$descuento;

echo "Ingrese el numero de personas que van a ingresar: \n";
$numPersonas = readline();
echo "Ingrese el tipo de afiliacion \n";
$opcion = readline();
$opcion = strtolower($opcion);

switch($opcion){
  case "a":
    $descuento = 0.30;
    $resultado = (VALOR_ENTRADA - ($descuento*VALOR_ENTRADA))*$numPersonas;
    echo "El valor total a pagar para ".$numPersonas." personas es: ". $resultado;
    break;
  case "b":
    $descuento = 0.25;
    $resultado = (VALOR_ENTRADA - ($descuento*VALOR_ENTRADA))*$numPersonas;
    echo "El valor total a pagar para ".$numPersonas." personas es: ". $resultado;
    break;
  
  case "c":
    $descuento = 0.10;
    $resultado = (VALOR_ENTRADA - ($descuento*VALOR_ENTRADA))*$numPersonas;
    echo "El valor total a pagar para ".$numPersonas." personas es: ". $resultado;
    break;
  case "d":
    $descuento = 0.05;
    $resultado = (VALOR_ENTRADA - ($descuento*VALOR_ENTRADA))*$numPersonas;
    echo "El valor total a pagar para ".$numPersonas." personas es: ". $resultado;
    break;
}
?>