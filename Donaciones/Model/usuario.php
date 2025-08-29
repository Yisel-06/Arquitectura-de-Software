<?php

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

?>