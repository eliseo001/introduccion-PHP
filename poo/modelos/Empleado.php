<?php
require "Persona.php";
class Empleado extends Persona{
    public $sueldo;

    public function __construct($nombre,$apellido,$sueldo) {
         parent::__construct($nombre, $apellido);
        $this->sueldo = $sueldo;
    }


}
   $empleados = [
    new Empleado("Eliseo", "Masuelli", 300),
    new Empleado("Ana", "Pérez", 111)
];
    $empleado1 = new Empleado("ana","carolina",7000);
    $empleados[]=$empleado1;

    
//    print_r($empleados);

  

?>