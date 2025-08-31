<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form method="POST">
        <label>Nombres: <input type="text" name="nombres" required></label><br>
        <label>Apellidos: <input type="text" name="apellidos" required></label><br>
        <label>Correo: <input type="email" name="correo" required></label><br>
        <label>Teléfono: <input type="text" name="telefono"></label><br>
        <label>Dirección: <input type="text" name="direccion"></label><br>
        <label>Contraseña: <input type="password" name="contrasena" required></label><br>
        <label>Rol:
            <select name="roles_id" required>
                <?php while ($rol = $roles->fetch_assoc()): ?>
                    <option value="<?= $rol['id'] ?>"><?= $rol['descripcion'] ?></option>
                <?php endwhile; ?>
            </select>
        </label><br><br>
        <button type="submit">Guardar</button>
    </form>
    <a href="index.php?action=usuarios">⬅ Volver</a>
</body>
</html>
