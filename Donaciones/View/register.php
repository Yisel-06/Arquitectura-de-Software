<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Registro.css">
</head>
    <body>
        <div class="container d-flex min-vh-100 align-items-center">
            <div class="row shadow-lg rounded-4 overflow-hidden w-100">
                <div class="col-md-5 p-0">
                    <div class="h-100 w-100">
                        <img src="img/Nino.jpg" alt="Juguetes" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                </div>
                <div class="col-md-7 bg-white p-5">
                    <h2 class="mb-4 fw-bold">Registro</h2>
                    <form class="row g-3" method="POST">
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg" placeholder="Nombre" name="nombres" required/>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg" placeholder="Apellido" name="apellidos" required/>
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control form-control-lg" placeholder="Correo" name="correo" required/>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control form-control-lg" placeholder="Teléfono" name="telefono"/>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg" placeholder="Dirección" name="direccion"/>
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="contrasena" required/>
                        </div>
                        <div class="col-md-6">
                            <select name="roles_id" required>
                                <?php while ($rol = $roles->fetch_assoc()): ?>
                                    <option value="<?= $rol['id'] ?>"><?= $rol['descripcion'] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="col-md-12 d-grid">
                            <button class="btn btn-custom btn-lg" type="submit">REGISTRARME</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>