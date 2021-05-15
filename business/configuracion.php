<?php

include_once('../Entidades/configuracion.php');
include_once('../dataacces/configuracionData.php');

if (isset($_POST['txtServidor'])) {
    echo 'Se recuperó el servidor: (' .$_POST['txtServidor']. ')<br />';

}else{
    echo 'no se recuperó el servidor<br />';

}
if (isset($_POST['txtBD'])) {
    echo 'Se recuperó el bd: (' .$_POST['txtBD'].')<br />' ;

}else{
    echo 'no se recuperó la bd<br />';

}
if (isset($_POST['txtUsuario'])) {
    echo 'Se recuperó el usuario: (' .$_POST['txtUsuario']. ')<br />';

}else{
    echo 'no se recuperó el usuario<br />';

}
if (isset($_POST['txtClave'])) {
    echo 'Se recuperó la clave: (' .$_POST['txtClave']. ')<br />';
}else{
    echo 'no se recuperó clave<br />';
}
$objClassConfiguracionEntidad = new clsConfiguracionEntidad ();

$objClassConfiguracionEntidad-> setearServidor($_POST['txtServidor']);
$objClassConfiguracionEntidad-> setearBasedatos ( $_POST['txtBD']);
$objClassConfiguracionEntidad-> setearUsuario ($_POST['txtUsuario']);
$objClassConfiguracionEntidad-> setearClave ($_POST['txtClave']);

$objClsConfiguracion = new clsConfiguracion();
$objClsConfiguracion->actualizarArchivo($objClassConfiguracionEntidad);


?>