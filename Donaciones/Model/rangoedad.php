<?php

class RangoEdad {
    private $id;
    private $descripcion;

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
}

?>