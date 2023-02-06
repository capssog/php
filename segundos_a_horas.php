<?php

$segundos = readline("Ingresa el tiempo en segundos: ");

echo "Numero de segundos:  " . $segundos;
echo "\n";

$horas = (int) ($segundos / 3600);
$segundos =  (int) ($segundos % 3600);
$minutos =  (int) ($segundos / 60); 
$segundos =  (int) ($segundos % 60);


echo  "Numero de Horas: " . $horas . " " . "Numero de minutos: " . $minutos . " " . "Numero de Segundos: " . $segundos; 
echo "\n";