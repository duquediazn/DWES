<?php
//https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl

$cliente=new SoapClient("https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl");

$parametros = [
    'plengua'=>'es',
    'pcurso'=>'2024'
];

$titulos=$cliente->wstitulosuni($parametros);

/*
La llamada devuelve un objeto de una clase predefinida en PHP llamada: StdClass. 
Si hacemos "var_dump($titulos)" obtenemos lo siguiente:
*/

//echo var_dump($titulos);

/*
Vemos que nos ha devuelto un objeto de la clase stdClass dentro podemos observar 
que nos ha devuelto 113 títulos. 
*/

//Obtener funciones: 
$funciones = $cliente->__getFunctions();

echo "<ul>";
foreach($funciones as $k=>$v) {
    echo "<li><code>$v</code></li>";
}
echo "</ul>";

//Obtener tipos: 
$tipos = $cliente->__getTypes();

echo "<ul>";
foreach($tipos as $k=>$v) {
    echo "<li><code>$v</code></li>";
}
echo "</ul>";



