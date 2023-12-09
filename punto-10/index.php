<?php

$num = 1;

echo "Números impares:\n";

while ($num <= 10) {
    if ($num % 2 != 0) {
        echo $num . "\n";
    }
    $num++;
}

echo "\nNúmeros pares:\n";

$num = 1;

while ($num <= 10) {
    if ($num % 2 == 0) {
        echo $num . "\n";
    }
    $num++;
}

?>
