<?php
require "../modelos/Empleado.php";
class Jefe extends Persona{
    public $empleados;

    public function  __construct ($nombre,$apellido,$empelados){
         parent::__construct($nombre, $apellido);
        $this->empleado = $empleados;
    }

}
?>