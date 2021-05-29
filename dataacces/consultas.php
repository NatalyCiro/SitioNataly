<?php
include_once('adminBD.php');

class clsConsultas
{
    private $objConexion;
    public function __construct()
    {
        $this->objConexion = new clsAdminBD();
        
    }
    public function actualizarEliminarInsertar($sql)
    {
        $conexion = $this->objConexion->conectar();
        $retorno = false;
        if ($conexion->query($sql)) {
            
            $retorno = true;

        }
        else
        {
            echo $conexion->error;
            
        }
        $this->objConexion->desconectar($conexion);
        return $retorno;
    }


}
?>
