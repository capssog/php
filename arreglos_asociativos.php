<?php

$cafes = array(
    "capuchi" => 50,
    "latte" => 20,
    "america" => 30,
);

echo "el precio del american es  {$cafes['america']}";
echo "\n";

$personas = array(
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Parada",
    ),
    "Marlen" => array(
        "edad" => 25,
        "apellido" => "Suarez",
    ),
);
echo "\n";
echo "La Informacion de Carlos es : Edad: " . $personas["Carlos"]["edad"] . " " . "Apellido: " . $personas["Carlos"]["apellido"] ;
echo "\n";