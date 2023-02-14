<?php

$edades = array(18, 22, 40, 34);

//count

echo count($edades);

echo "\n";

//array_push

array_push($edades, 13);
//var_dump($edades);

// is_array

$esto_no_es_arreglo = "";
var_dump(is_array($edades));

echo "\n";

//explode
/* $listadefrutas = "fresa, cereza, manzana";
$listadefrutasarray = explode(",", $listadefrutas);
var_dump($listadefrutasarray);
echo "\n"; */


//implode

$listadefrutasarray = ["fresa", "cereza", "manzana"];
$listadefrutas = implode(",", $listadefrutasarray);
var_dump($listadefrutas);