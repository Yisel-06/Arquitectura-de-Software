<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de Usuarios</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
        </tr>
        <?php
            include "Model/connection.php";
            $sql = $conexion->query("SELECT * FROM usuarios");
            while ($datos = $sql->fetch_object()) {
        ?>
            <tr>
                <td><?= $datos->nombres ?></td>
                <td><?= $datos->apellidos ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
