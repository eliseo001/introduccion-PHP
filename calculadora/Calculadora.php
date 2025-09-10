<?php

class calculadora{


    public function sumar($cantidad){

             $resultado=0;
             $numeros=[];
            for ($i=0; $i < $cantidad; $i++) { 
                $numero = readline("Ingrese un numero: ");
                $resultado+=$numero;
                $numeros[]=$numero;
            }
            
            echo "La suma de los numeros ". implode(", ", $numeros) . " es = $resultado\n";

    }

    public function restar($primerN,$cantidad){
       
       $resultado=$primerN;
       $numeros=[];
       for ($i=0; $i < $cantidad; $i++) { 
        $numero=readline("Ingrese un numero a restar: ");
        
        $resultado -=$numero;
        $numeros[] =$numero;
       }
       echo"La resta de los numeros ".implode(", ",$numeros)." es = $resultado\n";


    }

    public function dividir($a, $b){

        if ($b>$a) {
            echo "$b es mayor que $a ingrese otrs valores validos";
            return;
        }
        if($a<=$b){
          $division= $a/$b;
        
        echo "La division entre $a / $b = $division\n";
        }
      
    }

    public function multiplicar($a,$b){
        $multiplicacion = $a*$b;
        echo "La multiplicacion entre $a * $b = $multiplicacion\n";
    }

    public function potencia($a,$b){
        $resultado=1;
        for ($i=0; $i <$b ; $i++) { 
            $resultado *= $a;
        }
        echo"La potencia de $a ^ $b = $resultado\n";
    }
    public function ladoTriangulo($angulo,$l1, $l2){
        $pi = 3.14159;

        if ($angulo === 90) {
            $hipotenusa =sqrt(($l1*$l1)+($l2*$l2));
            echo "Los lados del triangulo son $l1, $l2, Incognito:$hipotenusa \n";
        }
        if($angulo !=90){
            $anguloRadianes = $angulo*($pi/180);
           $l3 = sqrt( ($l1*$l1) + ($l2*$l2) - 2*$l1*$l2*cos($anguloRadianes) );

            echo "Los lados del triangulo son $l1, $l2, Incognito: $l3 \n";

        }
        
    }
}

?>