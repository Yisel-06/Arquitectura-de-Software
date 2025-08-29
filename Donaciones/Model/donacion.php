<?php

class Donacion {
    private $id;
    private $juguete;
    private $usuario;

    public function __construct($id = null) {
        $this->id = $id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setJuguete($juguete): void {
        $this->juguete = $juguete;
    }

    public function getJuguete(): Juguete {
        return $this->juguete;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function getUsuario(): Usuario {
        return $this->usuario;
    }
}

?>