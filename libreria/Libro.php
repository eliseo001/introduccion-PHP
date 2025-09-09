<?php
declare(strict_types=1);

class Libro {
    private string $titulo;
    private string $autor;
    private int $anioPublicacion;
    private bool $disponible;

    public function __construct(string $titulo, string $autor, int $anioPublicacion) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->disponible = true;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }
public function __toString(): string {
        return $this->titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function getAnioPublicacion(): int {
        return $this->anioPublicacion;
    }


    public function isDisponible(): bool {
        return $this->disponible;
    }

    public function prestar(): void {

        if ($this->disponible) {
            $this->disponible = false;
        } else {
            echo "❌ El libro '{$this->titulo}' ya está prestado.\n";
        }
    }

    public function devolver(): void {
        $this->disponible = true;
    }
}
