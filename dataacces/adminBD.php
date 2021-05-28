<?php
include_once('configuracionData.php');
class clsAdminBD
{
    private $conexion = null;
    public function __construct()
    {
        if (!defined('DB_SERVER'))  
        {

        $objConfiguracionData = new clsConfiguracion();
        $datosConexion =   $objConfiguracionData->leerConfiguracion();
        define('DB_SERVIDOR', $datosConexion->obtenerServidor());
        echo "</br> Servidor:".$datosConexion->obtenerServidor();
        define('DB_BASEDATOS', $datosConexion->obtenerBasedatos());
        define('DB_USUARIO', $datosConexion->obtenerUsuario());
        define('DB_CLAVE', $datosConexion->obtenerClave());         
         }              
   }
   public function conectar()
   {
       $conexion = new mysqli(DB_SERVIDOR,DB_USUARIO,DB_CLAVE,DB_BASEDATOS);
       if ($conexion->connect_errno) 
       {
           die('Error de conexión: '.$conexion->connect_errno);
          
       }
       return $conexion;

   }
   public function desconectar($conexion)
   {
       mysqli_close($conexion);


   }
}

?>