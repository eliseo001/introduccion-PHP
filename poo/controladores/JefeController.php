<?php
require "../modelos/Jefe.php";

    function agregarEmpleado(Empleado $empleado) {
        $this->empleados[] = $empleado;
    }

     function verEmpleados(){
     foreach ($this->empleados as $indice =>$empleado) {
       echo "[$indice] {$empleado->nombre} {$empleado->apellido} | Sueldo: {$empleado->sueldo}\n";
    }
      $jefes = [
    new Jefe("Eliseo", "Masuelli"),
    new Jefe("Ana", "Pérez")
   
    ];
     $jefes[1]->verEmpleados();
}
?>