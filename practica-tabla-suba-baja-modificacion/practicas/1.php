<?php
/*$nombre = readline("Ingresa tu nombre:");

$apellido = readline("Ingresa tu apellido:");

$edad = readline("Ingresa tu edad:");
echo "Hola, $nombre". " $apellido". " Tienes $edad años.\n";
$usuarios = [$nombre,$apellido,$edad];
print_r ($usuarios);
$usuarios =new $usuarios*/

//ingreso varios usuarios 
$cantidad = readline("Ingrese cuantos usuarios quiere registrar: ");
$usuarios = [];
for ($i=0; $i <$cantidad ; $i++){ 
    $nombre = readline("Ingresa el nombre: ");
    $apellido = readline("Ingresa el apellido: ");
    $edad = readline("Ingresa la edad: ");

    $usuario = [
        "nombre: "=>$nombre,
        "apellido: "=>$apellido,
        "edad: "=>$edad
    ];
      $usuarios[] = $usuario;
}
/*
$filas = count($usuarios);
$columnas = count($usuarios[0]);
print_r($usuarios);
for ($i=0; $i <$filas ; $i++) { 
        for ($j=0; $j < $columnas ; $j++) { 
            echo $usuarios[$i][$j];
        }
}
*/
foreach ($usuarios as $usuario ) {
    foreach ($usuario as $clave => $value) {
        echo "$clave: $value |";
    }
    echo"\n";
}
?>