<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="View/css/Login.css">
</head>
<body>
  <div class="container d-flex min-vh-100 align-items-center justify-content-center">
    <div class="row w-100 shadow-lg rounded overflow-hidden" style="max-width: 900px; background: #fff;">
      <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
        <h2 class="mb-4 text-center">Inicio de sesión</h2>
        <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form class="login-form"action="index.php?action=autenticar" method="POST">
          <input type="email" placeholder="Correo" class="form-control mb-3" name="correo">
          <input type="password" placeholder="Contraseña" class="form-control mb-4" name="contrasena">
          <button type="submit" class="btn-custom" href="View/register.php">INGRESAR</button>
          <p class="message text-center">¿No estás registrado? <a href='index.php?action=crearUsuario'>Registrarme</a></p>
        </form>
      </div>

      <!-- Columna derecha: Imagen -->
      <div class="col-md-6 p-0 d-none d-md-block">
        <img src="View/img/Osito.jpg" alt="Imagen de login" class="img-fluid h-100 w-100" style="object-fit: cover;">
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
