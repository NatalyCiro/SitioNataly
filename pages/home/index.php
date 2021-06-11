<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitio Nataly | Registro usuario</title>
    <?php
    include_once('../Templates/head.php');
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../images/favicon.ico" alt="Logo" height="80" width="80">
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../home/" class="nav-link">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="../home/" class="brand-link">
                <img src="../../images/favicon.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .4">
                <span class="brand-text font-weight-light">Sitio Nataly</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../images/images.png" alt="" class="img-circle elevation-2" alt="User Imagen">
                    </div>
                    <div class="info">
                        <a href="../home/" class="d-block">Usuario</a>
                    </div>
                </div>
            </div>

            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form.control-sidebar" type="search" placeholder="Search" aria-label="search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
                <?php
                session_start();
                if (isset($_SESSION['perfilUsuario'])) 
                {
                    if ($_SESSION['perfilUsuario'] === '1') {
                        include_once('../Templates/menuAdmin.php');
                     }elseif ($_SESSION['perfilUsuario'] === '2') {
                         include_once('../Templates/menuInventario.php');
                     }elseif ($_SESSION['perfilUsuario'] === '3') {
                         include_once('../Templates/menuVendedor.php');
                      }elseif ($_SESSION['perfilUsuario'] === '4') {
                         include_once('../Templates/menuSuperUsuario.php');
                      }
                }
                else 
                {
                   // header('Location:../');
                    
                }
              
                
                ?>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <?php
                        if (isset($_GET['MsgType'])) {
                            $tipoMensaje = $_GET['MsgType'];
                            $mensaje  = isset($_GET['MsgValue']) ? $_GET['MsgValue'] : "";

                            if ($tipoMensaje === "Err") {
                                echo "<div class='alert alert-danger alert-dismissible container-fluid' role='alert'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                  <h5><i class='icon fas fa-ban'></i> Error!</h5>" . $mensaje . "
                                </div>";
                            }

                            if ($tipoMensaje === "Ext") {
                                echo  "<div class='alert alert-success alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h5><i class='icon fas fa-check'></i> Operación exitosa!</h5>" . $mensaje . "</div>";
                            }
                        }
                     
                        if (isset($_GET['Op'])) {

                            $opcion = $_GET['Op'];
                            if ($opcion === "RUser") {
                                include_once('../Usuarios/Registrar.php');
                            }
                        }
                        if (isset($_GET['Op'])) {

                            $opc = $_GET['Op'];
                            if ($opc === "RProductos") {
                                include_once('../Productos/RegistrarProducto.php');
                            }
                        }
                        if (isset($_GET['Op'])) {

                            $opc = $_GET['Op'];
                            if ($opc === "RCliente") {
                                include_once('../Terceros/Clientes.php');
                            }
                        }
                        if (isset($_GET['Op'])) {

                            $opc = $_GET['Op'];
                            if ($opc === "RProveedores") {
                                include_once('../Terceros/Proveedores.php');
                            }
                        }
                        
                        
                        

                        ?>

                        <div class="col-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <?php
        include_once('../Templates/footer.php');
        ?>
    </div>
    <?php
    include_once('../Templates/Foot.php');
    ?>
</body>

</html>