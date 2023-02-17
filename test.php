
<?php


//calculo de la serie de fibonacci hasta un lugar determinado

$place = readline("A que tienda quieres llegar: ");

$n1 = 1;
$n2 = 1;
$i = 2;
//echo "0, 1, ";
while ($i < $place){
    $nt = $n2;
    $n2 = $n1 + $n2;
    $n1 = $nt;
    $i++;
    //echo "$n2, ";
};
echo "\n";
echo "La cantidad de caminos hasta la tienda $place son $n2";
echo "\n";