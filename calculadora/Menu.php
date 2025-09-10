<?php
require "Calculadora.php";
$cal = new calculadora;
$salir= false;

while (!$salir) {

    echo "<<<MENU
    1. Suma
    2. Resta
    3. Multiplicacion
    4. Division
    5. Potencia
    6. Calcular lado de un triangulo
    10. Salir
    Menu>\n";
    $opcion=readline("Elija una opcion: ");
    

    switch ($opcion) {
        case 1:
            $cantidad = readline("Cuantos numeros desea sumar? ");
            $cal->sumar($cantidad);
            break;
        case 2:
            $primerN =readline("Ingrese numero a restar: "); 
            $cantidad = readline("Cuatos numeros desea restar? ");
            $cal->restar($primerN,$cantidad);
            break;
        case 3:
            $n1=readline("Ingrese primer numero a sumar: ");
            $n2=readline("Ingrese segundo numero a sumar: ");

            $cal->multiplicar($n1,$n2);
            break;
        case 4:

            $n1=readline("Ingrese primer numero a sumar: ");
            $n2=readline("Ingrese segundo numero a sumar: ");

            $cal->dividir($n1,$n2);
            break;
        case 5:

            $n1=readline("Ingrese primer numero a sumar: ");
            $n2=readline("Ingrese segundo numero a sumar: ");

            $cal->potencia($n1,$n2);
            break;
        case 6:
            $angulo =readline("Ingrese el angulo del triagulo");
            $l1 = readline("Ingrese el lado 1 del triangulo");
            $l2 = readline("Ingrese el lado 2 del triangulo");
            $cal->ladoTriangulo($angulo,$l1,$l2);
            break;        
        case 10:
            echo"Saliendo de la calculadora.........";
            $salir=true;    
        default:
            # code...
            break;
    }
}

?>