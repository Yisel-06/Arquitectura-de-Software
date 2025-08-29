<?php

class Juguete {
    private $id;
    private $descripcion;
    private $estado;
    private $categoria; 
    private $rangoEdad;

    public function __construct($id = null) {
        $this->id = $id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function getEstado(): Estado {
        return $this->estado;
    }

    public function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    public function getCategoria(): Categoria {
        return $this->categoria;
    }

    public function setRangoEdad($rangoEdad): void {
        $this->rangoEdad = $rangoEdad;
    }

    public function getRangoEdad(): RangoEdad {
        return $this->rangoEdad;
    }
}

?>