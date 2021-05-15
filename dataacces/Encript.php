<?php

class clsEncript
{
    public function __construct()
    {
        if (!defined('METODO')) 
        {
            define('METODO', 'AES-256-CBC');
            define('LLAVE', '$1LV3');
            define('VECTOR', '202115');
        }        
    }
    public function encriptar($value)
    {
        $salida=FALSE;
        $llave= hash('sha512', LLAVE);
        $vector = substr(hash('sha512', VECTOR), 0, 16);
        $salida = openssl_encrypt($value, METODO, $llave, 0, $vector);
        $salida = base64_encode($salida);
        return $salida;
    }
}

?>