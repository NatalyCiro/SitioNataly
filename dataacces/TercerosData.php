<?php

include_once('consultas.php');
class clsTercerosData
{
    private $objConsultas;
    public function __construct()
    {
        $this->objConsultas = new clsConsultas();
        
    }
    public function registrarCliente($datos)
    {
        $sql = "INSERT INTO terceros(IdentificacionTercero, nombreTercero, emailTercero, celularTercero, 
        TelefonoTercero, direccionTercero, descripcion, estadoTercero, esCliente, esProveedor,contactoTercero, usuarioCreacion, fechaCreacion) 
        VALUES ('".$datos->obtenerIdentificacionTercero()."','".$datos->obtenernombreTercero()."', '".$datos->obteneremailTercero()."',
        '".$datos->obtenercelularTercero()."',  '".$datos->obtenerTelefonoTercero()."', '".$datos->obtenerdireccionTercero()."',
        '".$datos->obtenerDescripcion()."',1, 1,0,'".$datos->obtenerContactoTercero()."' , '".$datos->obtenerusuarioCreacion()."', NOW())";

     return $this->objConsultas->actualizarEliminarInsertar($sql);

    }
    public function registrarProveedor($datos)
    {
        $sql = "INSERT INTO terceros(IdentificacionTercero, nombreTercero, emailTercero, celularTercero, 
        TelefonoTercero, direccionTercero, descripcion, estadoTercero, esCliente, esProveedor, 
        contactoTercero, usuarioCreacion, fechaCreacion) 
        VALUES ('".$datos->obtenerIdentificacionTercero()."','".$datos->obtenernombreTercero()."', '".$datos->obteneremailTercero()."',
        '".$datos->obtenercelularTercero()."',  '".$datos->obtenerTelefonoTercero()."', '".$datos->obtenerdireccionTercero()."',
        '".$datos->obtenerDescripcion()."',1,0,1,'".$datos->obtenerContactoTercero()."' , '".$datos->obtenerusuarioCreacion()."', NOW())";

     return $this->objConsultas->actualizarEliminarInsertar($sql);

    }


}
?>