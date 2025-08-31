<?php
require_once __DIR__ . "/../Model/connection.php";

class LoginController {
    public function mostrarLogin() {
        include "View/login.php";
    }

    public function autenticar() {
        session_start();
        $conn = Connection::getConnection();
        
        $correo = $_POST['correo'];
        $password = $_POST['contrasena'];

        $sql = "SELECT * FROM usuarios WHERE correo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $result = $stmt->get_result();
        $usuario = $result->fetch_assoc();

        if ($usuario && $password === $usuario['contrasena']) {
            // Guardar en sesión
            $_SESSION['usuario'] = $usuario;
            header("Location: index.php?action=usuarios");
        } else {
            $error = "Correo o contraseña incorrectos.";
            include "View/login.php";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php?action=login");
    }
}
