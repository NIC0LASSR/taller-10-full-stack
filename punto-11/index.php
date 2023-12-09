<?php

$sumaImpares = 0;
echo "Números impares del 0 al 100:\n";

for ($i = 1; $i <= 100; $i += 2) {
    echo $i . "\n";
    $sumaImpares += $i;
}

echo "\nLa suma de los números impares es: " . $sumaImpares . "\n";

?>
