<?php
$result = 1;
$number_store = readline("Escriba a que tienda desea llegar: ");

for ($i=1, $a=0; $i < $number_store; $i++) {
    $result += $a;
    $a = $result - $a;
}

echo "Para llegar a la tienda $number_store hay $result caminos diferentes";

echo "\n";