<?php

require_once "Controller/UsuarioController.php";
require_once "Controller/LoginController.php";

$action = $_GET['action'] ?? 'home';

switch ($action) {

    /* ========================
       CRUD USUARIOS
    ========================= */
    case "usuarios":
        $controller = new UsuarioController();
        $controller->index();
        break;

    case "crearUsuario":
        $controller = new UsuarioController();
        $controller->crear();
        break;

    case "editarUsuario":
        $controller = new UsuarioController();
        if (isset($_GET['id'])) {
            $controller->editar($_GET['id']);
        } else {
            header("Location: index.php?action=usuarios");
        }
        break;

    case "eliminarUsuario":
        $controller = new UsuarioController();
        if (isset($_GET['id'])) {
            $controller->eliminar($_GET['id']);
        } else {
            header("Location: index.php?action=usuarios");
        }
        break;
    
    case "login":
        $controller = new LoginController();
        $controller->mostrarLogin();
        break;

    case "autenticar":
        $controller = new LoginController();
        $controller->autenticar();
        break;

    case "logout":
        $controller = new LoginController();
        $controller->logout();
        break;


    /* PÁGINA DE INICIO */
    default:
        include "View/login.php";
        // echo "<h1>Bienvenido al Sistema de Donaciones</h1>";
        // echo "<ul>";
        // echo "<li><a href='index.php?action=usuarios'>👤 Gestionar Usuarios</a></li>";
        // echo "<li><a href='index.php?action=categorias'>📂 Gestionar Categorías</a></li>";
        // echo "</ul>";
        break;
}
