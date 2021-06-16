<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio de sesion | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Inicio de sesión</b>
  </div>
  <!-- /.login-logo -->
  <?php
  if (isset($_GET['MsgType'])) {
    $tipoMensaje = $_GET['MsgType'];
    $mensaje  = isset($_GET['MsgValue']) ? $_GET['MsgValue'] : "";

    if ($tipoMensaje === "Err")
     {
        echo "<div class='alert alert-danger alert-dismissible container-fluid' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <h5><i class='icon fas fa-ban'></i> Error!</h5>" . $mensaje . " </div>";
    }
  }
  ?>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingrese los datos para iniciar</p>
      <form action="business/Usuarios.php" method="POST">
        <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Nombre usuario" id="txtUsuario" name="txtUsuario" required >
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
         </div>
         <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Contraseña" id="txtClave" name="txtClave">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
         </div>            
            <div class="col-12">
                <button type="submit" class="btn btn-block btn-success">Registrar</button>
                <input type="hidden" id="txtOperacion" name="txtOperacion" value="InicioSesion">
            </div>
     </form>
     


      <!-- /.social-auth-links -->

      <p class="mb-1"><br>
        <a href="forgot-password.html">Olvide mi contraseña</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
