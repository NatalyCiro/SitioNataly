<div class="card-body register-card-body">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <h2 class="login-box-msg">Registrar producto</h2>
            <form action="../../business/Productos.php" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Código del producto" id="txtcodigoProducto" name="txtcodigoProducto" maxlength="15" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas  fa-check-circle"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre del producto" id="txtnombreProducto" name="txtnombreProducto" maxlength="150" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <textarea class="form-control" row=3 placeholder="Descripción del producto" id="txtDescripcion" name="txtDescripcion" maxlength="200"></textarea>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-align-justify"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Unidad de medida:</label>
                    <select class="form-control select2" style="width: 100%;" id="cmbUnidad" name="cmbUnidad">
                        <option value="0">Seleccione</option>
                        <option value="1">Libra</option>
                        <option value="2">Kilo</option>
                        <option value="3">Gramos</option>
                        <option value="4">Super usuario</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Marca del producto" id="txtmarcaProducto" name="txtmarcaProducto" maxlength="45" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Precio del producto" id="txtprecio" name="txtprecio" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-money"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Cantidad" id="txtcantidad" name="txtcantidad" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-plus-square"></span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-block btn-success">Registrar</button>
                    <input type="hidden" id="txtOperacion" name="txtOperacion" value="Registrar">
                </div>
            </form>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>