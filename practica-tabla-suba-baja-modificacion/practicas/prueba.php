<?php

echo "Hola Mundo desde PHP\n";
/*echo "hola ";

$nombre = "Eliseo";
$apellido = "Masuelli";
$edad = 24;


echo($nombre." ".$apellido.  " Estas probando php a tus ".$edad." años\n" );
//constante
define("PI",3.1416);
//numeros mutiplicados por pi
$numero1 =24;
$numero2 =2;

echo ($numero1*PI ."\n");
echo ($numero2*PI."\n");
echo ($numero1 > $numero2);
*/
$numeros =[1,3,5,7];
// print_r($numeros);
// echo count($numeros);
// array_push($numeros, 4);

// sort($numeros)&& print_r($numeros);
//rsort($numeros)&& print_r($numeros);
//array_unshift($numeros, 10);
echo "array 1\n";
print_r($numeros);

$numeros1 =[10,20,30];
echo "array 2\n";
print_r($numeros1);
$union = array_merge($numeros,$numeros1);
echo "union de array 1 y 2\n";
print_r($union);
//print_r($numeros1);
$sumaElementos = array_sum($union)."\n";
print_r ($sumaElementos);
if($sumaElementos<76){
    echo"suma menor a 76\n";
}else if($sumaElementos==76){
    echo"suma igual a 76\n";
}else
    echo"suma es mayor a 76\n";

// array_splice($numeros,1,0,9);
// array_splice($numeros,3,0,19);

// print_r($numeros);

?>