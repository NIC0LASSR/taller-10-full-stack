<?php

$nombre;
$edad;
$mensajeNombre = "Ingrese su nombre: ";
$mensajeEdad = "Ingrese su edad: ";


echo "Bienvenido!\n\n";
echo $mensajeNombre;
$nombre = readline();
echo $mensajeEdad;
$edad = readline();

if ($edad >= 18) {
  echo "Bienvenido $nombre, eres mayor de edad"; 
} else {
  echo "Lo siento $nombre, no eres mayor de edad";
}

?>