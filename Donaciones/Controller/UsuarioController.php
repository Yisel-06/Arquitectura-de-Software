<?php
require_once __DIR__ . "/../Model/UsuarioModel.php";

class UsuarioController {
    private $model;

    public function __construct() {
        $this->model = new UsuarioModel();
    }

    // 🔹 Listar usuarios
    public function index() {
        $usuarios = $this->model->getAll();
        include __DIR__ . "/../View/usuario/select.php";
    }

    // 🔹 Crear usuario
    public function crear() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->insert(
                $_POST["nombres"],
                $_POST["apellidos"],
                $_POST["correo"],
                $_POST["telefono"],
                $_POST["direccion"],
                $_POST["contrasena"],
                $_POST["roles_id"]
            );
            header("Location: index.php?action=usuarios");
            exit;
        }
        $roles = $this->model->getRoles();
        include __DIR__ . "/../View/usuario/insert.php";
    }

    // 🔹 Editar usuario
    public function editar($id) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->update(
                $id,
                $_POST["nombres"],
                $_POST["apellidos"],
                $_POST["correo"],
                $_POST["telefono"],
                $_POST["direccion"],
                $_POST["contrasena"],
                $_POST["roles_id"]
            );
            header("Location: index.php?action=usuarios");
            exit;
        }
        $usuario = $this->model->getById(id: $id);
        $roles = $this->model->getRoles();
        include __DIR__ . "/../View/usuario/update.php";
    }

    // 🔹 Eliminar usuario
    public function eliminar($id) {
        $this->model->delete($id);
        header("Location: index.php?action=usuarios");
        exit;
    }
}
?>
