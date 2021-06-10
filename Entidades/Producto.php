<?php
include_once('../dataacces/Encript.php');
class clsProductoEntidad
{
    private $codigoProducto, $nombreProducto, $Descripcion, $unidadMedida, $marcaProducto, $precioActual, $cantidadActual,
    $estadoProducto, $usuarioCreacion, $fechaCreacion, $usuariosModificacion, $fechaModificacion;

    public function __construct()
    {
        $this->objClsEncrip = new clsEncript();
    }
    public function setearcodigoProducto($value)
    {
        $this->codigoProducto = trim($value);
    }
    public function setearnombreProducto($value)
    {
        $this->nombreProducto = trim($value);
    }
    public function setearDescripcion($value)
    {
        $this->Descripcion = trim($value);
    }
    public function setearunidadMedida($value)
    {
        $this->unidadMedida = trim($value);
    }
    public function setearmarcaProducto($value)
    {
        $this->marcaProducto = trim($value);
    }
    public function setearprecioActual($value)
    {
        $this->precioActual = trim($value);
    }
    public function setearcantidadActual($value)
    {
        $this->cantidadActual = trim($value);
    }   
    public function setearestadoProducto($value)
    {
        $this->estadoProducto = trim($value);
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


    public function obtenercodigoProducto()
    {
        return $this->codigoProducto;
    }
    public function obtenernombreProducto()
    {
        return $this->nombreProducto;
    }
    public function obtenerDescripcion()
    {
        return $this->Descripcion;
    }
    public function obtenerunidadMedida()
    {
        return $this->unidadMedida;
    }
    public function obtenermarcaProducto()
    {
        return $this->marcaProducto;
    }
    public function obtenerprecioActual()
    {
        return $this->precioActual;
    }
    public function obtenercantidadActual()
    {
        return $this->cantidadActual;
    }
    public function obtenerestadoProducto()
    {
        return $this->estadoProducto;
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