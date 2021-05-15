<?php
include_once('../dataacces/Encript.php');
class clsConfiguracionEntidad
{
    private $Servidor, $Basedatos, $Usuario, $Clave, $objClsEncript, $valoresCargados;

    public function __construct()
    {
        $this->objClsEncript = new clsEncript();

    }

    public function setearServidor ($value)
    {
        if (is_null($value) || !isset($value) || (strlen($value) <=0))
        {
            $this ->Servidor = null;

        }else{
            $this ->Servidor = $this->objClsEncript->encriptar(trim($value));

        }

    }
    public function setearBasedatos ($value)
    {
        if (is_null($value) || !isset($value) || (strlen($value) <=0)) 
        {
            $this ->Basedatos =  null;
        } else {
            $this ->Basedatos =  $this->objClsEncript->encriptar(trim($value));
        }    
    }

    public function setearUsuario ($value)
    {
        if (is_null($value) || !isset($value) || (strlen($value) <=0)) 
        {
            $this ->Usuario = null;
        } else {
            $this ->Usuario = $this->objClsEncript->encriptar(trim($value));
        }  
    }
    public function setearClave ($value)
    {
        if (is_null($value) || !isset($value) || (strlen($value) <=0))
        {
            $this ->Clave =  null;
        } else {
            $this ->Clave =  $this->objClsEncript->encriptar(trim($value));
        }    

    }

    public function obtenerServidor()
    {
        return $this->Servidor;
    }
    public function obtenerBasedatos()
    {
        return $this->Basedatos;
    }
    public function obtenerUsuario()
    {
        return $this->Usuario;
    }
    public function obtenerClave()
    {
        return $this->Clave;
    }

    public function obtenerDatosCargados()
    {
         $datosCargados = array();
         $this->valoresCargados = array();

            if (!is_null($this->Servidor)) {
                $datosCargados [] = "Servidor";
                $this->valoresCargados [] = $this->Servidor;
            }
        
            if (!is_null($this->Basedatos)) {
                $datosCargados [] = "Base de datos";
                $this->valoresCargados [] = $this->Basedatos;
            }
        
            if (!is_null($this->Usuario)) {
                $datosCargados [] = "Usuario";
                $this->valoresCargados [] = $this->Usuario;
            }
      
            if (!is_null($this->Clave)) {
                $datosCargados [] = "Clave";
                $this->valoresCargados [] = $this->Clave;
            }
            return $datosCargados;
    }
    public function obtenerValorCargado($indice)
    {
        return $this->valoresCargados[$indice];

    }
             
           

}

?>