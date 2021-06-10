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
    
    EnviarMensajeError();
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