<?php

class Categoria {
    //variables
    private $id;
    private $descripcion;

    //Constructor para inicializar el objeto (Se define como NULL porque el parametro es opcional)
    public function __construct($id = null) {
        $this->id = $id;
    }

    //Encapsulamiento - Se reciben los valores
    public function setId($id): void { 
        $this->id = $id;
    }

    //Encapsulamiento - Se envían los valores
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