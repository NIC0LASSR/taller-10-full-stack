<?php

$tipoAfiliacion;
const VALOR_ENTRADA = 25000;
$numPersona;
$valorTotal;
const DESCUENTO = 0.3;

echo "Ingrese el tipo de afiliación: ";
$tipoAfiliacion = readline();
$tipoAfiliacion = strtoupper($tipoAfiliacion);
echo "Ingrese el numero de personas: ";
$numPersona = readline();

if($tipoAfiliacion == "A") {
  $valorTotal= (VALOR_ENTRADA - (DESCUENTO * VALOR_ENTRADA)) *$numPersona;
  echo "El valor total a pagar para ".$numPersona." es: ". $valorTotal;
} else if($tipoAfiliacion == "B") {
  $valorTotal= (VALOR_ENTRADA - (DESCUENTO * VALOR_ENTRADA)) *$numPersona;
  echo "El valor total a pagar para ".$numPersona." es: ". $valorTotal;
} else {
  echo "El tipo de afiliación no es valido";
}

?>