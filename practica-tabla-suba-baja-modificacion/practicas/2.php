<?php
// modificando matricez
$usuarios = [
    [
        "nombre" => "Eliseo",
        "apellido" => "Masuelli",
        "edad" => 23
    ],
    [
        "nombre" => "Ana",
        "apellido" => "Pérez",
        "edad" => 30
    ]
];
function verusuarios($usuarios){

foreach ($usuarios as $usuario ) {
    foreach ($usuario as $clave => $value) {
        echo "$clave: $value |";
    }
    echo"\n";
    
}
}
/*
$modificar = readline("Si desea modificar escriba 1: ");
if ($modificar ==1) {
    $usuarioModificar =|
}*/
echo "usuarios antes de modificar\n";
verusuarios($usuarios);

$usuarios[0]["apellido"]="Prueba";
echo "\nusuarios desp de modificar\n";
verusuarios($usuarios);
//$opcion =readline ("desea modificar un usuario? si/no :\n");
$salir = false;
while (!$salir) {
    # code...
    $opcion =readline ("desea modificar un usuario? si/no: ");
        if ($opcion == "si") {
            $usuarioModificar = readline("que usuario desea modificar ingrese el indice: ");
            $atributoModificar = readline("que atributo desea modificar del usuario ?(nombre,apellido,edad): ");
        if ($atributoModificar== "nombre" ||$atributoModificar== "apellido"||$atributoModificar== "edad") {
            $valorModificado = readline ("Ingrese el valor a modificar para $usuarioModificar - $atributoModificar : ");
            $usuarios[$usuarioModificar][$atributoModificar] = $valorModificado;
           verusuarios($usuarios);
        }else{
            echo "atributo ingresado desconosido por favor vulva a intentar";
        }
        
            
    }else{
        echo "\nsaliendo del sistema....\n";
         $salir =true;
    }
}

?>