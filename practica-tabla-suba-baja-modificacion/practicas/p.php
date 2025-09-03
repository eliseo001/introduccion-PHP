<?php
// IF WHILE FOR
$numero =1;

while($numero<10){
    echo "numero: $numero";
    if($numero<3){
        echo" nuemero muy pequeño\n";

    }elseif($numero>=3&&$numero<7){
        echo" numero mediano\n";
    }elseif ($numero>=7 &&$numero<=10) {
        echo" nuemero grande\n";
    }else{
        echo "no hay clasificacion para este numero";
    }
    $numero++;
}
echo "\nciclo for\n";
for($i=0; $i<=10; $i++){
    echo "valor de i: $i\n";
}


?>