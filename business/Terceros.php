<?php
include_once('../dataacces/TercerosData.php');
include_once('../Entidades/Terceros.php');

if (isset($_POST['txtCliente'])) {
    $operacion = $_POST['txtCliente'];
    if ($operacion === "RegistrarCliente") {
        $objClsTercerosData = new clsTercerosData();
      
       if ($objClsTercerosData->registrarCliente(ObtenerDatosFormulario())) {

            $mensaje = "Cliente registrado satisfactoriamente";
            header('Location:../pages/home/?MsgType=Ext&MsgValue=' . urldecode($mensaje));

        } else 
        {
            EnviarMensajeError();
        }
    }
}
if (isset($_POST['txtProveedor'])) {
    $operacion = $_POST['txtProveedor'];
    if ($operacion === "RegistrarProveedor") {
        $objClsTercerosData = new clsTercerosData();
      
       if ($objClsTercerosData->registrarProveedor(ObtenerDatosFormulario())) {

            $mensaje = "Cliente registrado satisfactoriamente";
            header('Location:../pages/home/?MsgType=Ext&MsgValue=' . urldecode($mensaje));

        } else 
        {
            EnviarMensajeError();
        }
    }
}

function EnviarMensajeError()
{
    $mensaje = "Ocurrio un error inesperado</br>Intente nuevamente...";
    header('Location:../pages/home/?MsgType=Err&MsgValue=' . urldecode($mensaje));
}

function ObtenerDatosFormulario()
{
    $objClsTercerosData = new clsTercerosEntidad();
    if (isset($_POST['txtidTercero'])) {
        $objClsTercerosData->setearIdentificacionTercero($_POST['txtidTercero']);
        echo "1";
        if (isset($_POST['txtnombreTercero'])) {
            $objClsTercerosData->setearnombreTercero($_POST['txtnombreTercero']);
            if (isset($_POST['txtcorreo'])) {
                $objClsTercerosData->setearemailTercero($_POST['txtcorreo']);
                if (isset($_POST['txtnumCelular'])) {
                    $objClsTercerosData->setearcelularTercero($_POST['txtnumCelular']);
                    if (isset($_POST['txtnumTelefono'])) {
                        $objClsTercerosData->setearTelefonoTercero($_POST['txtnumTelefono']);
                        if (isset($_POST['txtDireccion'])) {
                            $objClsTercerosData->seteardireccionTercero($_POST['txtDireccion']);
                            if (isset($_POST['txtDescripcion'])) {
                                $objClsTercerosData->seteardescripcion($_POST['txtDescripcion']);
                                if (isset($_POST['txtcontacto'])) {
                                    $objClsTercerosData->setearcontactoTercero($_POST['txtcontacto']);
                                    
                                   return $objClsTercerosData;
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
    } else {
        EnviarMensajeError();
    }
}
