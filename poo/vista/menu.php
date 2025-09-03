<?php
//require "../modelos/Empleado.php";
require "../controladores/EmpleadoController.php";
$salir=false;

while (!$salir){
    echo <<<MENU
    1. Listar empleados
    2. Agregar empleado
    3. Eliminar empleado
    4. Modificar sueldo empelado
    5. Salir
    MENU;
    $opcion =readline("ingrese una opcion: ");

    switch($opcion){
        case 1:
            verEmpleados($empleados);
            break;
        case 2:
            agregarEmpleado($empleados);
            break;    
        case 3: 
            eliminarEmpleado($empleados);
            break;
        case 4:
            modificarSueldo($empleados);
            break;
        case 5: 
            asignarJefe($empleados);
            break;

        case 6:
            echo"Saliendo del sistema .....";
            $salir =true;
            break;
            
           
        default:
          
            break;
    } 
                 
}
?>