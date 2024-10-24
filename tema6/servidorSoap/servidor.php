<?php

class Operaciones
{
    public function resta($a, $b)
    {
        return $a - $b;
    }
    public function suma($a, $b)
    {
        return $a + $b;
    }
    public function saludo($texto)
    {
        return "Hola $texto";
    }
}

$uri = 'http://localhost/DWES/tema6/servidorSoap';
$parametros = ['uri' => $uri];
try {
    $server = new SoapServer(NULL, $parametros);
    $server->setClass('Operaciones');
    $server->handle();
} catch (SoapFault $f) {
    die("error en server: " . $f->getMessage());
}


/*
 Para añadir las funciones de la clase
"Operaciones" a nuestro "Servidor Soap" fíjate que hemos añadido "$server-
>setClass('Operaciones)" . Si hubiésemos implementados las funciones directamente, sin
usar una clase, tendríamos que haberlas añadido usando "$server->addFunction('nombre')"

El método handle es el encargado de
procesar las peticiones, recogiendo los datos que se reciban utilizando POST por HTTP.
*/