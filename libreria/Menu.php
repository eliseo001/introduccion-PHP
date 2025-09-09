<?php
require_once "Cliente.php";
require_once "Libro.php";
require_once "Libreria.php";
// $libreria = new Libreria("Librería Central", "Calle Falsa 123");
// $libros =[
//     $libro = new Libro("El Quijote", "Cervantes", 1605),
//     $libro = new Libro("1984", "Orwell", 1949)

// ];
// $libreria->agregarLibro($libros[0]);



// $clientes=[
//     $cliente = new Cliente("Ana", 1),
//     $cliente = new Cliente("Ana", 1)

// ];
// $libreria->agregarCliente($clientes[0]);
$libreria = new Libreria(
    "Librería Central",
    "Calle Falsa 123",
    [
        new Libro("El Quijote", "Cervantes", 1605),
        new Libro("1984", "Orwell", 1949)
    ],
    [
        new Cliente("Ana", 1),
        new Cliente("Juan", 2)
    ]
);

// $libreria->listarLibros();
// $cliente1->solicitarLibro($libro1);
// $libreria->listarLibros();
// $cliente1->devolverLibro($libro1);
// $libreria->listarLibros();

$salir =false;

while (!$salir) {
    echo<<<MENU
    1. Listar libros 
    2. Listar clientes
    3. Ver detalle de un cliente
    4. Agregar nuevo cliente
    5. Agregar nuevo libro
    6. Solicitar Libro
    7. Devolver libro
    8. Salir
    MENU;
    $opcion = readline("Ingrese una opcion");

    switch ($opcion) {
        case 1:
           $libreria->listarLibros();
            break;
        case 2: 
            $libreria->listarClientes();
            break;
        case 3: 
            $indice =readline("Ingrese el cliente que desea ver: ");
            $clientes[$indice]->listarLibrosSolicitados($libro);    
        break;
        case 4:
            $nNombre=readline("Ingrese el nombre del cliente: ");
            $nId = count($libreria->getClientes()) + 1;
            $cliente =new Cliente($nNombre,$nId);
            
            
            $libreria->agregarCliente($cliente);

            break;

        case 5:
             $nTitulo = readline("Ingrese el titulo del libro: ");
        $nAutor = readline("Ingrese el nombre del autor: ");
        $nAnioPublicacion = (int)readline("Ingrese el año de publicacion: ");
        $libro = new Libro($nTitulo,$nAutor,$nAnioPublicacion,true); 
            $libreria->agregarLibro($libro);
            break;    
        case 6:
            $indiceCliente =(int)readline("ingrese el cliente que desea solicitar: ");
            $indiceLibro = (int)readline("ingrese el libro que desea solicitar: ");
            //si el valor del indice es nulo en el arrego de clientes tira error
            if(!isset($clientes[$indiceCliente])){
                echo" Cliente no encontrado.\n";
                break;
            }
            //si el valor del indice es nulo en el arrego de libros tira error

            if(!isset($libros[$indiceLibro])){
                echo"Libro no encontrado. \n";
                break;
            }
           $clientes[$indiceCliente]->solicitarLibro($libros[$indiceLibro]);
            break;
        case 7:
            $indice = readline("ingrese el libro que desea devolver: ");
           $clientes[0]->devolverLibro($libros[$indice]);
            break;
       
        case 8:
            echo "Saliendo del sistema......";
            $salir =true;
           
            break;
        
        default:
           
            break;
    }

}

?>