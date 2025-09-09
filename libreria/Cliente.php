<?php
require_once "Libro.php";
class Cliente{
    private string $nombre;
    private int $id;
    private array $librosSolicitados = [];

    public function __construct (string $nombre, int $id){
        $this->nombre=$nombre;
        $this->id=$id;

        
    }

  public function getNombre():string{
    return $this->nombre;

  }
  public function getId():int{
    return $this->id;
  }
  public function getLibrosSolicitados():array{
    return $this->librosSolicitados;
  }

  
    public function solicitarLibro(Libro $libro): void{
     //   $libro = readline("Ingrese el libro que quiere solicitar: \n");
        if($libro->isDisponible()){
            $libro->prestar();
            $this->librosSolicitados[]=$libro;
            echo "{$this->nombre} devolvio el libro: {$libro->getTitulo()}\n";
            return;
    }
    echo"{$this->nombre} no tenia ese libro prestado\n";

    }
  public function devolverLibro(Libro $libro): void {
        foreach ($this->librosSolicitados as $key => $l) {
            if ($l === $libro) {
                $libro->devolver();
                unset($this->librosSolicitados[$key]);
                echo "🔄 {$this->nombre} devolvió el libro: "
                . $libro->getTitulo() . " | "
                . $libro->getAutor() . " | "
                . $libro->getAnioPublicacion() . "\n";

                return;
            }
        }
        echo "⚠️ {$this->nombre} no tenía el libro: {$libro->getTitulo()}\n";
    }

    public function listarLibrosSolicitados(Libro $libro):void{
        if(empty($this->listarLibrosSolicitados)){
            echo "{$this->nombre} no tiene libros solicitados \n";
            return;
        }
        
        echo "{$this->nombre} Tiene los siguientes libros: \n";
        foreach ($this->librosSolicitados as $libro) {
            echo "{$libro->getTitulo()}| {$libro->getAutor()} | {$libro->getAnioPublicacion()}\n";
        }
    }
}

?>