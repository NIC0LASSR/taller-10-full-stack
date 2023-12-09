<?php

function esContrasenaSegura($contrasena) {
    // Verificar si tiene al menos 8 caracteres
    if (strlen($contrasena) < 8) {
        return false;
    }

    // Verificar si tiene al menos una letra mayúscula
    if (!preg_match('/[A-Z]/', $contrasena)) {
        return false;
    }

    // Verificar si tiene al menos un número
    if (!preg_match('/[0-9]/', $contrasena)) {
        return false;
    }

    // La contraseña cumple con todos los criterios
    return true;
}

$usuario;
$contrasenaUsuario;

echo "Ingrese su nombre de usuario: \n";
$usuario = readline();
echo "Ingrese su contraseña: \n";
$contrasenaUsuario = readline();


if (esContrasenaSegura($contrasenaUsuario)) {
    echo "La contraseña es segura.";
} else {
    echo "La contraseña no cumple con los criterios de seguridad.";
}

?>

