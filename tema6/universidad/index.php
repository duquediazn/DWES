<?php
//https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl

$cliente=new SoapClient("https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl");

$parametros = [
    'plengua'=>'es',
    'pcurso'=>'2019'
];
$titulos=$cliente->wstitulosuni($parametros);

/*
La llamada devuelve un objeto de una clase predefinida en PHP llamada: StdClass. 
Si hacemos "var_dump($titulos)" obtenemos lo siguiente:
*/
var_dump($titulos);