<?php
include_once('consultas.php');
class clsUsuariosData
{
    private $objConsultas;
    public function __construct()
    {
        $this->objConsultas = new clsConsultas();
        
    }
    public function registrarUsuario($datos)
    {
        $sql = "INSERT INTO usuarios( nombreUsuario, Identificacion, primerNombre, segundoNombre, 
        primerApellido, segundoApellido, Email, celular, direccion, perfilUsuario, clave, 
        estadoUsuario, usuarioCreacion, fechaCreacion)
         VALUES ('".$datos->obtenernombreUsuario()."','".$datos->obtenerIdentificacion()."', '".$datos->obtenerprimerNombre()."',
         '".$datos->obtenersegundoNombre()."', '".$datos->obtenerprimerApellido()."', '".$datos->obtenersegundoApellido()."',
         '".$datos->obtenerEmail()."', '".$datos->obtenerCelular()."', '".$datos->obtenerdireccion()."',
         ".$datos->obtenerperfilUsuario().",  '".$datos->obtenerClave()."', 1 , '".$datos->obtenerusuarioCreacion()."',NOW())";

     return $this->objConsultas->actualizarEliminarInsertar($sql);

    }

    public function autenticarusuario($datos)
    {
       $sql="SELECT perfilUsuario FROM usuarios WHERE nombreUsuario='".$datos->obtenernombreUsuario()."'  
       AND clave='".$datos->obtenerClave()."';";
       return $this->objConsultas->cargarDatos($sql);
    }


}
?>