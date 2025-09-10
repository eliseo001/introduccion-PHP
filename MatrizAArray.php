<?php

$matriz=[
    [4,2,3],
    [5,2,9],
    [7,10,6]
];
// print_r ($matriz);
$fila = count($matriz);
$columna=count($matriz[0]);
$numeros=[];
    for ($i=0; $i <$fila ; $i++) { 
        for ($j=0; $j < $columna; $j++) { 
           echo"Numero: ".$matriz[$i][$j];
            echo"\n";
            $numeros[]=$matriz[$i][$j];
        }
    }
    echo"Arregglo: ".implode(", ",$numeros);

//ordenalos sin aplicar metodos

for ($i=0; $i <count($numeros)-1 ; $i++) { 
    for ($j=0; $j <count($numeros)-$i-1 ; $j++) { 
       
        if($numeros[$j]>$numeros[$j+1]){
            $n = $numeros[$j];
            $numeros[$j]=$numeros[$j+1];
            $numeros[$j+1]=$n;
        }

    }

}
  echo"Arregglo ordenado: ".implode(", ",$numeros)."\n";
//llenamos de nuevo la matriz
$n=0;
$Filas1=readline("Introduzca la cantidad de filas que desea que tenga la matriz: ");
$Columna1=readline("Introduzca la cantidad de columnas que desea que tenga la matriz: ");
for ($i=0; $i <$Filas1 ; $i++) { 
    for ($j=0; $j <$Columna1 ; $j++) { 
       

          if ($n >= count($numeros)) {
            break 2; // cortar ambos bucles si ya no hay más números
        }
        $matriz[$i][$j]=$numeros[$n];
        $n++;
         
  
      
    }
//   if ($n >= count($numeros)) {
//          break; // ya no hay más números para asignar
//   }
}

echo"\n";
for ($i=0; $i <$Filas1 ; $i++) { 
    for ($j=0; $j < $Columna1; $j++) { 
        if(isset($matriz[$i][$j])){
           echo "|".$matriz[$i][$j]."|";
        }
        else{
            break;
        }
       
    }
    echo"\n";
}


   
?>
