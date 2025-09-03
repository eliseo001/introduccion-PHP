<?php
echo "matricez\n";
$matriz = [
    [1,2,1],
    [2,1,2],
    [3,3,3]
];
print_r ($matriz);
$filas = count($matriz); 
$colomnas = count($matriz[0]);

for ($i=0; $i <$filas ; $i++) { 
    for ($j=0; $j <$colomnas ; $j++) { 
        echo $matriz[$i][$j];
    }
    echo "\n";
}
?>