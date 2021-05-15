<?php

class clsConfiguracion
{
    private $Nombre = null, $ruta = null, $rutaCompleta = null;

    public function __construct()
    {
        $this->ruta = '../dataacces/';
        $this->Nombre = 'config.txt';
        $this->generarRutaCompleta();
        

    }
    private function generarRutaCompleta()
    {
        $this->rutaCompleta = $this->ruta.$this->Nombre;
    }

    public function actualizarArchivo($objClassConfiguracionEntidad)
    {
       if($this->validarExistenciaArchivo())
       {
        echo '</br> El metodo dice que si';
        $this->modificarArchivo ($objClassConfiguracionEntidad);

       }else{
           echo '</br> El metodo dice que no';
           $this->crearArchivo($objClassConfiguracionEntidad);
       }

    }
    private function validarExistenciaArchivo()
    {
        if (file_exists($this->rutaCompleta)) 
        {
            echo 'El archivo: ' .$this->Nombre. 'existe en la ruta: '.$this->ruta;
            return true;
            
        }else
        {
            echo 'El archivo: ' .$this->Nombre. 'No existe en la ruta: '.$this->ruta;
            return false;
        }

    }
    private function crearArchivo($objClassConfiguracionEntidad)
    {
        $archivo = fopen($this->rutaCompleta, "w+b");
        
        if ($archivo == false) {
            
            echo '</br > Error al crear el archivo';
        }else{

            echo '</br >Se creo el archivo satisfactoriamente';

            fwrite($archivo, "Servidor:".$objClassConfiguracionEntidad->obtenerServidor()."\r\n");
            fwrite($archivo, "Base de datos:".$objClassConfiguracionEntidad->obtenerBasedatos()."\r\n");
            fwrite($archivo, "Usuario:".$objClassConfiguracionEntidad->obtenerUsuario()."\r\n");
            fwrite($archivo, "Clave:".$objClassConfiguracionEntidad->obtenerClave());
        }
        fclose($archivo);

    }

    private function modificarArchivo($objClassConfiguracionEntidad)
    {
        $arrayDatosCargados= $objClassConfiguracionEntidad->obtenerDatosCargados();
         for ($i=0; $i <count($arrayDatosCargados) ; $i++) { 
             $arrayLineaArchivo =  file($this->rutaCompleta);
             
             for ($j=0 ; $j <count($arrayLineaArchivo); $j++ ) {
                 $linea = $arrayLineaArchivo[$j];
                 $pos = strpos($linea,$arrayDatosCargados[$i]);

                 if ($pos !== false) 
                 {
                     array_splice($arrayLineaArchivo, $j, 1);
                 }                
             }
             $archivo = fopen($this->rutaCompleta, "w+b");
             foreach($arrayLineaArchivo as $linea)
             {
                 fwrite($archivo,$linea);
             }                
             fwrite($archivo, "\r\n" .$arrayDatosCargados[$i].":".$objClassConfiguracionEntidad->obtenerValorCargado($i));
             fclose($archivo);         
         }
    }
   
}

?>