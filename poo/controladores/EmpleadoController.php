<?php
require "../modelos/Empleado.php";
//require "../modelos/Persona.php";
    
   function verEmpleados($empleados){
        foreach ($empleados as $indice => $empleado) {
            echo "[$indice] Nombre {$empleado->nombre}| Apellido {$empleado->apellido}| Sueldo {$empleado->sueldo}\n";
        }
    }

    function agregarEmpleado(&$emplados){
        $nombre =readline("Ingrese el nombre: ");
        $apellido  =readline("Ingrese el apellido: ");
        $sueldo = readline("Ingrese el sueldo: ");

        $nuevoEmpleado = new Empleado($nombre,$apellido,$sueldo);
        $emplados[]=$nuevoEmpleado;
    }
    function eliminarEmpleado(&$emplados){
        $usuarioEliminar =readline("Ingrese que empleado desea eliminar: ");
        unset($emplados[$usuarioEliminar]);
        $emplados = array_values($emplados);
    }
    function modificarSueldo(&$emplados){
        $empleadoModificar = readline("Ingrese el empleado al cual desea modificar el sueldo: ");
        $sueldoModificado = readline("Ingrese nuevo sueldo: ");
        $campoModificar ="sueldo";
        $emplados[$empleadoModificar]->sueldo=$sueldoModificado;
    }
    function c(Jefe $jefe){
        $this->Jefe =$jefe;
    }
?>