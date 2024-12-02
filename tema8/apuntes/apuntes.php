<?php

/*json_decode. Decodifica una cadena de texto JSON y la transforma en un objeto
PHP (opcionalmente también se podría convertir en un array si le pasamos la opción
true).*/
$cadena_json='{"negro":1,"rojo":2,"verde":3,"azul":4}';
$objeto_php=json_decode($cadena_json);
$array_php=json_decode($cadena_json,true);

echo var_dump($objeto_php); //object(stdClass)#1 (4) { ["negro"]=> int(1) ["rojo"]=> int(2) ["verde"]=> int(3) ["azul"]=> int(4) }
echo "<br>";
echo var_dump($array_php); //array(4) { ["negro"]=> int(1) ["rojo"]=> int(2) ["verde"]=> int(3) ["azul"]=> int(4) }

/*json_encode. Función inversa a la anterior. Devuelve una cadena de texto en notación
JSON a partir del contenido de una variable PHP.*/
$arr=array('negro'=>1,'rojo'=>2,'verde'=>3,'azul'=>4);
$cadena_json=json_encode($arr);

echo "<br>";
echo var_dump($cadena_json); //string(39) "{"negro":1,"rojo":2,"verde":3,"azul":4}"

/*La extensión SimpleXML convierte un documento XML en un objeto de la clase
SimpleXMLElement. Puedes cargar eldocumento:

- desde una cadena de texto, utilizando la función simple_load_string.*/
$xml=simplexml_load_string($cadena);

/* 
- desde un fichero, utilizando la función simplexml_load_file. Puedes utilizar una dirección
URI como origen, por ejemplo:*/
$xml=simplexml_load_file('http://localhost/dwes/ut8/config.xml');

/*
Los nodos y atributos del documento XML se convierten en atributos. 
Los nodos pasan a ser arraysque contienen a su vez como elementos los atributos y subnodos del documento XML.
*/