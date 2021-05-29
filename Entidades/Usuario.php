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
        $this->usuarioCreacion= trim($value);
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
            
}
?>