<?php
include_once('../dataacces/Encript.php');
class clsTercerosEntidad

{
    private $IdentificacionTercero, $nombreTercero, $emailTercero, $celularTercero, $TelefonoTercero, 
            $direccionTercero, $descripcion, $estadoTercero,$esCliente, $esProveedor, $contactoTercero, $usuarioCreacion
            , $fechaCreacion, $usuarioModificacion, $fechaModificacion;

    public function __construct()

    {
        $this->objClsEncrip = new clsEncript();
        
    }     
    public function setearIdentificacionTercero($value)
    {
        $this->IdentificacionTercero = trim($value);
    } 
    public function setearnombreTercero($value)
    {
        $this->nombreTercero = trim($value);
    } 
    public function setearemailTercero($value)
    {
        $this->emailTercero = trim($value);
    } 
    public function setearcelularTercero($value)
    {
        $this->celularTercero = trim($value);
    } 
    public function setearTelefonoTercero($value)
    {
        $this->TelefonoTercero = trim($value);
    } 
    public function seteardireccionTercero($value)
    {
        $this->direccionTercero = trim($value);
    } 

    public function seteardescripcion($value)
    {
        $this->descripcion= trim($value);
    } 
    public function setearestadoTercero($value)
    {
        $this->estadoTercero= trim($value);
    } 
    public function setearesCliente($value)
    {
        $this->esCliente= trim($value);
    } 
    public function setearesProveedor($value)
    {
        $this->esProveedor= trim($value);
    } 
    public function setearcontactoTercero($value)
    {
        $this->contactoTercero = trim($value);
    } 
    public function setearusuarioCreacion($value)
    {
        if (is_null($value)|| !isset($value) || (strlen($value) <= 0)) 
        {
            $this->usuarioCreacion = "system";
        
        }else {
            $this->usuarioCreacion =  trim($value);
        }
     
    }
    public function setearfechaCreacion($value)
    {
        $this->fechaCreacion= trim($value);
    }
    public function setearusuarioModificacion($value)
    {
        $this->usuarioModificacion= trim($value);
    }
    public function setearfechaModificacion($value)
    {
        $this->fechaModificacion= trim($value);
    }

    public function obtenerIdentificacionTercero()
    {
        return $this->IdentificacionTercero;      
    }
    public function obtenernombreTercero()
    {
        return $this->nombreTercero;      
    }

    public function obteneremailTercero()
    {
        return $this->emailTercero;      
    }
    public function obtenercelularTercero()
    {
        return $this->celularTercero;      
    }
    public function obtenerTelefonoTercero()
    {
        return $this->TelefonoTercero;      
    }
    public function obtenerdireccionTercero()
    {
        return $this->direccionTercero;      
    }
    public function obtenerDescripcion()
    {
        return $this->descripcion;      
    }
    public function obtenerestadoTercero()
    {
        return $this->estadoTercero;      
    }
    public function obteneresCliente()
    {
        return $this->esCliente;      
    }
    public function obteneresProveedor()
    {
        return $this->esProveedor;      
    }
    public function obtenerContactoTercero()
    {
        return $this->contactoTercero;      
    }
    public function obtenerusuarioCreacion()
    {
        if (is_null($this->usuarioCreacion)|| !isset($this->usuarioCreacion) || (strlen($this->usuarioCreacion) <= 0)) 
        {
            return "system";
        
        }else {
            return $this->usuarioCreacion;    
        }
          
    }
    public function obtenerfechaCreacion()
    {
        return $this->fechaCreacion;      
    }
    public function obtenerusuarioModificacion()
    {
        return $this->usuarioModificacion;      
    }
    public function obtenerfechaModificacion()
    {
        return $this->fechaModificacion;      
    }
}
?>