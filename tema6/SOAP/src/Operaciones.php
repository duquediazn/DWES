<?php
/*
Para generar correctamente el documento WSDL con php2wsdl los métodos deben estar
comentados siguiendo las reglas de PHPDocumentor. Los comentarios se deben ir
introduciendo en el código distribuidos en bloques, y utilizando ciertas marcas específicas
como "@param" para indicar un parámetro y "@return" para indicar el valor devuelto por una
función, además para indicar los métodos que queremos que se generen en WSDL utilizar
usaremos "@soap".
*/
namespace Clases;

class Operaciones {
    /**
    * @soap
    * @param float $a
    * @param float $b
    * @return float
    */
    public function resta(float $a, float $b) :float{
        return $a - $b;
    }
    /**
    * @soap
    * @param float $a
    * @param float $b
    * @return float
    */
    public function suma(float $a, float $b) :float{
        return $a + $b;
    }
    /**
    * @soap
    * @param string $texto
    * @return string
    */
    public function saludo(string $texto):string{
        return "Hola $texto";
    }
}
