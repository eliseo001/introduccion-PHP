<?php
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
    ],
      [
        "nombre" => "Nahuel",
        "apellido" => "Miller",
        "edad" => 21
    ],
    [
        "nombre" => "Sofia",
        "apellido" => "Alvarez",
        "edad" => 37
    ]
    ];


    function verUsuarios($usuarios){
        foreach ($usuarios as $indice => $usuario) {
            echo "[$indice] Nombre: {$usuario['nombre']} | Apellido: {$usuario['apellido']} | Edad: {$usuario['edad']}\n";
        }
    }
    function agregarUsuario(&$usuarios){
        $nombreUNuevo = readline("Ingrese el nombre del usuario: ");
        $apellidoUNuevo = readline("Ingrese el apellido del usuario: ");
        $edadUNuevo = readline("Ingrese la edad del usuario: ");

        $usuarios[] = ["nombre"=>$nombreUNuevo,
        "apellido"=>$apellidoUNuevo,
        "edad"=>$edadUNuevo];
        echo"usuario agregado correctamente\n";
        verUsuarios($usuarios);    
    }
    function modificarUsuario(&$usuarios){ //← el & es clave
        $indiceModificar = readline("Ingrese el usuario que desea modificar: ");
        $campoModificar= readline("Ingrese el campo a modificar (nombre/apellido/edad): ");
        $modificacion = readline("ingrese el valor $campoModificar- para el usuario $indiceModificar: ");
        $usuarios [$indiceModificar][$campoModificar]= $modificacion;
        verUsuarios($usuarios);
    }
    function eliminarUsuario(&$usuarios){
        $indiceEliminar = readline("Ingrese el usuario a eliminar: ");
        unset($usuarios[$indiceEliminar]);
        $usuarios = array_values($usuarios);
        echo "Usuario eliminado: $indiceEliminar";
    }

?>