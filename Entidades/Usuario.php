<?php
include_once('../dataacces/Encript.php');
class clsUsuarioEntidad
{
    private $NombreUsuario, $Identificacion, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $Email, $celular,
             $direccion, $perfilUsuario, $Clave,$estadoUsuario, $usuarioCreacion, $fechaCreacion, $usuariosModificacion,
             $fechaModificacion, $objClsEncrip;

    public function __construct()

    {
        $this->objClsEncrip = new clsEncript();
        
    }         
    public function setearNombreUsuario($value)
    {
        $this->NombreUsuario = trim($value);
    }
    public function setearIdentificacion($value)
    {
        $this->Identificacion = trim($value);
    }
    public function setearprimerNombre($value)
    {
        $this->primerNombre = trim($value);
    }
    public function setearsegundoNombre($value)
    {
        $this->segundoNombre = trim($value);
    }
    public function setearprimerApellido($value)
    {
        $this->primerApellido = trim($value);
    }
    public function setearsegundoApellido($value)
    {
        $this->segundoApellido = trim($value);
    }
    public function setearEmail($value)
    {
        $this->Email = trim($value);
    }
    public function setearcelular($value)
    {
        $this->celular = trim($value);
    }
    public function seteardireccion($value)
    {
        $this->direccion = trim($value);
    }
    public function setearperfilUsuario($value)
    {
        $this->perfilUsuario = trim($value);
    }
    public function setearClave($value)
    {
        if (is_null($value)|| !isset($value) || (strlen($value) <= 0)) 
        {
            $this->Clave = "";
        
        }else {
           $this->Clave = $this->objClsEncrip->encriptar(trim($value));
        }
      
    }
    public function setearestadoUsuario($value)
    {
        $this->estadoUsuario = trim($value);
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
        $this->usuariosModificacion= trim($value);
    }
    public function setearfechaModificacion($value)
    {
        $this->fechaModificacion= trim($value);
    }

    public function obtenernombreUsuario()
    {
        return $this->NombreUsuario;      
    }
    public function obtenerIdentificacion()
    {
        return $this->Identificacion;      
    }
    public function obtenerprimerNombre()
    {
        return $this->primerNombre;      
    }
    public function obtenersegundoNombre()
    {
        return $this->segundoNombre;      
    }
            
    public function obtenerprimerApellido()
    {
        return $this->primerApellido;      
    }
            
    public function obtenersegundoApellido()
    {
        return $this->segundoApellido;      
    }
  

    public function obtenerEmail()
    {
        return $this->Email;      
    }
            
    public function obtenerCelular()
    {
        return $this->celular;      
    }
    public function obtenerdireccion()
    {
        return $this->direccion;      
    }
    public function obtenerperfilUsuario()
    {
        return $this->perfilUsuario;      
    }
    public function obtenerClave()
    {
        return $this->Clave;      
    }
    public function obtenerestadoUsuario()
    {
        return $this->estadoUsuario;      
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
        return $this->usuariosModificacion;      
    }
    public function obtenerfechaModificacion()
    {
        return $this->fechaModificacion;      
    }
            
}
?>