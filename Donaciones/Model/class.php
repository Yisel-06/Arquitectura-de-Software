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

class Estado {
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

class Rol {
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

class Usuario {
    private $id;
    private $nombres;      
    private $apellidos;     
    private $correo;
    private $telefono;
    private $direccion;    
    private $contrasena;  
    private $rol;

    public function __construct($id = null) {
        $this->id = $id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function setNombres($nombres): void {
        $this->nombres = $nombres;
    }

    public function getNombres(): string {
        return $this->nombres;
    }

    public function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function getCorreo(): string {
        return $this->correo;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function getTelefono(): ?int {
        return $this->telefono;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function setContrasena($contrasena): void {
        $this->contrasena = $contrasena;
    }

    public function getContrasena(): string {
        return $this->contrasena;
    }

    public function setRol($rol): void {
        $this->rol = $rol;
    }

    public function getRol(): Rol {
        return $this->rol;
    }
}

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