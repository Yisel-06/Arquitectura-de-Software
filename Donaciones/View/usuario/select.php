<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="View/css/Select.css">
</head>
<body>
    <h1 style="color: white; font-weight: bold">Lista de Usuarios</h1>
    <a href="index.php?action=crearUsuario" class="btn-custom">+ Crear Usuario</a>
    <br></br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $usuarios->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombres'] ?></td>
            <td><?= $row['apellidos'] ?></td>
            <td><?= $row['correo'] ?></td>
            <td><?= $row['telefono'] ?></td>
            <td><?= $row['direccion'] ?></td>
            <td><?= $row['rol'] ?></td>
            <td>
                <a href="index.php?action=editarUsuario&id=<?= $row['id'] ?>">✏️ Editar</a> | 
                <a href="index.php?action=eliminarUsuario&id=<?= $row['id'] ?>" onclick="return confirm('¿Eliminar este usuario?');">🗑️ Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
