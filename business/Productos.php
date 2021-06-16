<?php
include_once('../dataacces/productosData.php');
include_once('../Entidades/Producto.php');


if (isset($_POST['txtOperacion'])) {
    $operacion = $_POST['txtOperacion'];
    if ($operacion === "Registrar") {
        $objClsproductoData = new clsproductoData();
      
       if ($objClsproductoData->registrarProducto(ObtenerDatosFormulario())) {

           $mensaje = "Operación exitosa";
            header('Location:../pages/home/?MsgType=Ext&MsgValue=' . urldecode($mensaje));

        } else {
            EnviarMensajeError();
        }
    }
} else {

    $objClsproductoData = new clsproductoData();
    $resultado= $objClsproductoData->listarProductos();
    if ($resultado != false) {
        echo '<div class="card">
        <div class="card-header">
        <h3 class="card-title">Lista de productos</h3>
        </div><div class="card-body"><table id="example1" class="table table-bordered"
        <thead>
        <tr>
        <th> Codigo producto</th>
        <th> Nombre producto</th>
        <th> Marca</th>
        <th> Precio </th>     
        </tr>
        </thead>
        <tbody>';
        foreach($resultado as $fila){
            echo '<tr>';
            for($i =0; $i < 4; $i++){
               
                echo '<td'.$fila[$i].'</td>';

            }
            echo '</tr>';
        }
        echo '</tbody> <table> 
        </div></div>';
        
    }
}
function EnviarMensajeError()
{
    $mensaje = "Ocurrio un error inesperado</br>Intente nuevamente...";
    header('Location:../pages/home/?MsgType=Err&MsgValue=' . urldecode($mensaje));
}

function ObtenerDatosFormulario()
{
    $objClsProductoEntidad= new  clsProductoEntidad();
    if (isset($_POST['txtcodigoProducto'])) {
        $objClsProductoEntidad->setearcodigoProducto($_POST['txtcodigoProducto']);
        if (isset($_POST['txtnombreProducto'])) {
            $objClsProductoEntidad->setearnombreProducto($_POST['txtnombreProducto']);
            if (isset($_POST['txtDescripcion'])) {
                $objClsProductoEntidad->setearDescripcion($_POST['txtDescripcion']);
                if (isset($_POST['cmbUnidad'])) {
                    $objClsProductoEntidad->setearunidadMedida($_POST['cmbUnidad']);
                    if (isset($_POST['txtmarcaProducto'])) {
                        $objClsProductoEntidad->setearmarcaProducto($_POST['txtmarcaProducto']);
                        if (isset($_POST['txtprecio'])) {
                            $objClsProductoEntidad->setearprecioActual($_POST['txtprecio']);
                            if (isset($_POST['txtcantidad'])) {
                                $objClsProductoEntidad->setearcantidadActual($_POST['txtcantidad']);
                                return $objClsProductoEntidad;
                            } else {
                                EnviarMensajeError();
                            }
                        } else {
                            EnviarMensajeError();
                        }
                    } else {
                        EnviarMensajeError();
                    }
                } else {
                    EnviarMensajeError();
                }
            } else {
                EnviarMensajeError();
            }
        } else {
            EnviarMensajeError();
        }
    } else {
        EnviarMensajeError();
    }
}


?>