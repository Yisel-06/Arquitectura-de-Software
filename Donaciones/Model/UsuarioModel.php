<?php
require_once __DIR__ . "/connection.php";

class UsuarioModel {
    private $conn;

    public function __construct() {
        $this->conn = Connection::getConnection();
    }

    // Listar todos los usuarios con el nombre del rol
    public function getAll() {
        $sql = "SELECT u.*, r.descripcion AS rol 
                FROM usuarios u 
                INNER JOIN roles r ON u.roles_id = r.id";
        return $this->conn->query($sql);
    }

    // Obtener usuario por id con su rol
    public function getById($id) {
        $sql = "SELECT u.*, r.descripcion AS rol 
                FROM usuarios u 
                INNER JOIN roles r ON u.roles_id = r.id
                WHERE u.id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    // Insertar usuario
    public function insert($nombres, $apellidos, $correo, $telefono, $direccion, $contrasena, $roles_id) {
        $sql = "INSERT INTO usuarios (nombres, apellidos, correo, telefono, direccion, contrasena, roles_id)
                VALUES ('$nombres', '$apellidos', '$correo', '$telefono', '$direccion', '$contrasena', '$roles_id')";
        return $this->conn->query($sql);
    }

    // Actualizar usuario
    public function update($id, $nombres, $apellidos, $correo, $telefono, $direccion, $contrasena, $roles_id) {
        $sql = "UPDATE usuarios
                SET nombres='$nombres',
                    apellidos='$apellidos',
                    correo='$correo',
                    telefono='$telefono',
                    direccion='$direccion',
                    contrasena='$contrasena',
                    roles_id='$roles_id'
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    // Eliminar usuario
    public function delete($id) {
        $sql = "DELETE FROM usuarios WHERE id=$id";
        return $this->conn->query($sql);
    }

    // Obtener lista de roles (para el combo en formularios)
    public function getRoles() {
        $sql = "SELECT * FROM roles";
        return $this->conn->query($sql);
    }
}
?>
