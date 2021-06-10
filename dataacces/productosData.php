<?php
include_once('consultas.php');
class clsproductoData
{
    private $objConsultas;
    public function __construct()
    {
        $this->objConsultas = new clsConsultas();
        
    }
    public function registrarProducto($datos)
    {
        $sql = "INSERT INTO productos(codigoProducto, nombreProducto, descripcionProducto, unidadMedida, marcaProducto, 
        precioActual, cantidadActual, estadoProducto, usuarioCreacion, fechaCreacion)
        VALUES ('".$datos->obtenercodigoProducto()."','".$datos->obtenernombreProducto()."','".$datos->obtenerDescripcion()."',
        '".$datos->obtenerunidadMedida()."','".$datos->obtenermarcaProducto()."', '".$datos->obtenerprecioActual()."',
         '".$datos->obtenercantidadActual()."' , 1,'".$datos->obtenerusuarioCreacion()."' , NOW())";

     return $this->objConsultas->actualizarEliminarInsertar($sql);

    }


}
?>