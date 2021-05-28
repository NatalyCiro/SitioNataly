<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitio Nataly | Registro tercero</title>
    <?php
    include_once('../Templates/head.php');
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="card-body register-card-body">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-8">
                                    <p class="login-box-msg">Registrar tercero</p>
                                    <form action="../business/configuracion.php" method="POST">
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Número de identificación" id="txtidTercero" name="txtidTercero" maxlength="15" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                     </div>
                                     <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre del tercero" id="txtnombreTercero" name="txtnombreTercero" maxlength="255" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                     </div>
                                     <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Correo" id="txtcorreo" name="txtcorreo" maxlength="45">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                     </div>
            
                                       <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Número de celular" id="txtnumCelular" name="txtnumCelular" maxlength="45" >
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                       </div>
                                       <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Número de telefóno" id="txtnumTelefono" name="txtnumTelefono" maxlength="45" >
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                       </div>
                                       <div class="input-group mb-3">
                                            <textarea class="form-control" row=3 placeholder="Direcciòn" id="txtDireccion" name="txtDireccion" maxlength="300"></textarea>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-map-pin"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" row=3 placeholder="Descripción del producto" id="txtDescripcion" name="txtDescripcion" maxlength="200"></textarea>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-map-pin"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Contacto tercero" id="txtcontacto" name="txtcontacto" maxlength="100" >
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                       </div>
                                       
                                        
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-block btn-success">Registrar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                        </div>
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