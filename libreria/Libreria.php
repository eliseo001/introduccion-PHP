<?php
declare(strict_types=1);

class Libreria {
    private string $nombre;
    private string $direccion;
    private array $libros = [];
    private array $clientes = [];

    public function __construct(string $nombre, string $direccion ,array $libros = [],array $clientes = []) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->libros = $libros;
        $this->clientes = $clientes;
    }


    public function getClientes(): array {
    return $this->clientes;
    }

    public function getLibros(): array {
        return $this->libros;
    }
    public function agregarLibro(Libro $libro): void {
       
        $this->libros[] = $libro;
    }

    public function agregarCliente(Cliente $cliente): void {
        $this->clientes[] = $cliente;
    }

      public function listarLibros(): void {
        echo "📚 Libros en {$this->nombre}:\n";
        foreach ($this->libros as $libro) {
            $estado = $libro->isDisponible() ? "Disponible" : "Prestado";
            echo "- {$libro->getTitulo()} ($estado)\n";
        }
    }
      public function listarClientes():void{
        echo"👨‍🦱Clientes en {$this->nombre}:\n";
        foreach ($this->clientes as $cliente) {

            $libros = $cliente->getLibrosSolicitados();
            $librosStr = implode(", ",$libros);
            echo"-{$cliente->getId()}|{$cliente->getNombre()}|Libros: {$librosStr}\n";
            
        }
      }
}
