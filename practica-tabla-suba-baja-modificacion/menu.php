<?php
require "tabla.php";
$salir= false;
while(!$salir){
    echo <<<MENU
    
    1. Ver usuarios.
    2. Agregar usuario
    3. Modificar usuario
    4. Eliminar usuario
    5. Salir
    MENU;
    $opcion = readline("Elige una opcion: ");

    switch ($opcion) {
        case 1:
           verUsuarios($usuarios);
            break;
        case 2:
            agregarUsuario($usuarios);
            break;
        case 3:
            modificarUsuario($usuarios);
            break;
        case 4:
            eliminarUsuario($usuarios);

            break;        
        case 5:
            echo"Saliendo del sistema......";
            $salir =true;
        default:
            echo "opcion invalida por favor ingrese una opcion!!\n ";
            break;
    }
}


?>