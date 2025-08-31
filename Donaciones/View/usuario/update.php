<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form method="POST">
        <label>Nombres: <input type="text" name="nombres" value="<?= $usuario['nombres'] ?>" required></label><br>
        <label>Apellidos: <input type="text" name="apellidos" value="<?= $usuario['apellidos'] ?>" required></label><br>
        <label>Correo: <input type="email" name="correo" value="<?= $usuario['correo'] ?>" required></label><br>
        <label>Teléfono: <input type="text" name="telefono" value="<?= $usuario['telefono'] ?>"></label><br>
        <label>Dirección: <input type="text" name="direccion" value="<?= $usuario['direccion'] ?>"></label><br>
        <label>Contraseña: <input type="password" name="contrasena" value="<?= $usuario['contrasena'] ?>" required></label><br>
        <label>Rol:
            <select name="roles_id" required>
                <?php while ($rol = $roles->fetch_assoc()): ?>
                    <option value="<?= $rol['id'] ?>" <?= ($rol['id'] == $usuario['roles_id']) ? 'selected' : '' ?>>
                        <?= $rol['descripcion'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </label><br><br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="index.php?action=usuarios">⬅ Volver</a>
</body>
</html>
