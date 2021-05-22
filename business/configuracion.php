<?php

include_once('../Entidades/configuracion.php');
include_once('../dataacces/configuracionData.php');

/*/if (!isset($_POST['txtServidor'])) {

    echo 'no se recuperó el servidor<br />';
}
   
if (!isset($_POST['txtBD'])) {
     echo 'no se recuperó la bd<br />';

}
if (!isset($_POST['txtUsuario'])) {
   
    echo 'no se recuperó el usuario<br />';

}
if (!isset($_POST['txtClave'])) {
    echo 'no se recuperó clave<br />';
   
}/*/
$objClassConfiguracionEntidad = new clsConfiguracionEntidad ();

$objClassConfiguracionEntidad-> setearServidor($_POST['txtServidor']);
$objClassConfiguracionEntidad-> setearBasedatos ( $_POST['txtBD']);
$objClassConfiguracionEntidad-> setearUsuario ($_POST['txtUsuario']);
$objClassConfiguracionEntidad-> setearClave ($_POST['txtClave']);

$objClsConfiguracion = new clsConfiguracion();
$objClsConfiguracion->actualizarArchivo($objClassConfiguracionEntidad);


?>