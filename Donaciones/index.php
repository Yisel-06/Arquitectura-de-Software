<?php
// Requerimos los controladores
require_once "Controller/CategoriaController.php";
require_once "Controller/UsuarioController.php";

// Capturamos la acción enviada por la URL, si no hay acción mostramos "home"
$action = $_GET['action'] ?? 'home';

switch ($action) {

    /* ========================
       CRUD CATEGORÍAS
    ========================= */
    case "categorias":
        $controller = new CategoriaController();
        $controller->index();
        break;

    case "crearCategoria":
        $controller = new CategoriaController();
        $controller->crear();
        break;

    case "editarCategoria":
        $controller = new CategoriaController();
        if (isset($_GET['id'])) {
            $controller->editar($_GET['id']);
        } else {
            header("Location: index.php?action=categorias");
        }
        break;

    case "eliminarCategoria":
        $controller = new CategoriaController();
        if (isset($_GET['id'])) {
            $controller->eliminar($_GET['id']);
        } else {
            header("Location: index.php?action=categorias");
        }
        break;


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


    /* ========================
       PÁGINA DE INICIO
    ========================= */
    default:
        echo "<h1>Bienvenido al Sistema de Donaciones</h1>";
        echo "<ul>";
        echo "<li><a href='index.php?action=usuarios'>👤 Gestionar Usuarios</a></li>";
        echo "<li><a href='index.php?action=categorias'>📂 Gestionar Categorías</a></li>";
        echo "</ul>";
        break;
}
