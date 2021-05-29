<?php
include_once('../dataacces/usuariosData.php');
include_once('../Entidades/Usuario.php');

if (isset($_POST['txtOperacion'])) {
    $operacion = $_POST['txtOperacion'];
    if ($operacion === "Registrar") {
        $objClsUsuariosData = new clsUsuariosData();
      
       if ($objClsUsuariosData->registrarUsuario(ObtenerDatosFormulario())) {

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
    $objClsUsuarioEntidad = new clsUsuarioEntidad();
    if (isset($_POST['txtnombreUsuario'])) {
        $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtnombreUsuario']);
        if (isset($_POST['txtid'])) {
            $objClsUsuarioEntidad->setearIdentificacion($_POST['txtid']);
            if (isset($_POST['txtprimerNombre'])) {
                $objClsUsuarioEntidad->setearprimerNombre($_POST['txtprimerNombre']);
                if (isset($_POST['txtsegundoNombre'])) {
                    $objClsUsuarioEntidad->setearsegundoNombre($_POST['txtsegundoNombre']);
                    if (isset($_POST['txtprimerApellido'])) {
                        $objClsUsuarioEntidad->setearprimerApellido($_POST['txtprimerApellido']);
                        if (isset($_POST['txtsegundoApellido'])) {
                            $objClsUsuarioEntidad->setearsegundoApellido($_POST['txtsegundoApellido']);
                            if (isset($_POST['txtcorreo'])) {
                                $objClsUsuarioEntidad->setearEmail($_POST['txtcorreo']);
                                if (isset($_POST['txtnumCelular'])) {
                                    $objClsUsuarioEntidad->setearcelular($_POST['txtnumCelular']);
                                    if (isset($_POST['txtDireccion'])) {
                                        $objClsUsuarioEntidad->seteardireccion($_POST['txtDireccion']);
                                        if (isset($_POST['txtclave'])) {
                                            $objClsUsuarioEntidad->setearClave($_POST['txtclave']);
                                            if (isset($_POST['cmbPerfil'])) {
                                                $objClsUsuarioEntidad->setearperfilUsuario($_POST['cmbPerfil']);
                                                return $objClsUsuarioEntidad;
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
