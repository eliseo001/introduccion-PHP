<?php

//fizz buzz 
//multiplo de 3 escribe fizz 
//multiplo de 5 imprime buzz
//multiplo de 3 y 5 escribe fizzbuzz
//no es multiplo de ninguno escribe el numero



// for ($i=1; $i <=100 ; $i++) { 
//     if ($i%3===0&& $i%5 ===0) {
//         echo "$i _ FizzBuzz\n";
        
//     }elseif($i%3===0){
//         echo "$i _ Fizz\n";

//     }elseif($i%5===0){
//         echo "$i _ Buzz\n";
//     }else{
//         echo "$i\n";
//     }
// }

// function esPalidromo(string $texto):bool{
//     $texto =strtolower (str_replace(' ','',$texto));
//     return $texto === strrev($texto);
// }
//  echo esPalidromo("oso") ?"Si\n" : "No\n";
//  echo esPalidromo("php") ?"Si\n": "NO\n";

//  function contarVocales(string $texto):int{
//     $texto = strtolower($texto);
//     $vocale = ['a','o','u','i','e'];
//     $count = 0;

//     for ($i=0; $i < strlen($texto) ; $i++) { 
//         if(in_array($texto[$i],$vocale)){
//             $count++;
//         }
//     }
//     return $count;
//  }

//  echo contarVocales("Hola mundo\n");

//  function factorial(int $n):int{
//     $resultado = 1;
//     for ($i=1; $i <=$n; $i++) { 
//         $resultado*=$i;
//     }
//     return $resultado;
//  }
//  echo "\n";
//  echo factorial(3);

//  function fibonacci(int $n):array{
//     $serie=[0,1];
//     for ($i=2; $i < $n; $i++) { 
//         $serie[] = $serie[$i-1]+$serie[$i-2];
//     }
//     return array_slice($serie,0,$n);

//  }
//  echo "\n";
//  print_r(fibonacci(10));

//  function esPrimo(int $n):bool{
//     if ($n<2)return false;
//     for ($i=2; $i <=$n; $i++) { 
//         if ($n%$i===0)return false;

//     } return true;
 
//  }
//  echo "\n";
// echo esPrimo(7)?"si\n":"no\n";
//  echo esPrimo(9)?"si\n":"no\n";

$arreglo =["hola","masuelli","chau"];
print_r ($arreglo);

foreach ($arreglo as $key ) {
    echo "$key\n";
}

for ($i=0; $i < count($arreglo); $i++) { 
    echo"\n". $arreglo[$i];
}
$arreglo[] ="nuevo";
print_r ($arreglo);
unset ($arreglo[1]);
print_r ($arreglo);


 ?>
