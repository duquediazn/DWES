<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl

$cliente = new SoapClient("https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl");

$parametros = [
    'plengua' => 'es',
    'pcurso' => '2024'
];

$respuesta = $cliente->wstitulosuni($parametros);

/*
La llamada devuelve un objeto de una clase predefinida en PHP llamada: StdClass. 
Si hacemos "var_dump($titulos)" obtenemos lo siguiente:
*/

//echo var_dump($respuesta);


foreach ($respuesta->wstitulosuniResult->ClaseTitulosUni as $indice => $titulo) {
    echo "Título $indice:<br>";

    // Acceso a las propiedades del objeto
    echo "Código: " . $titulo->codigo . "<br>";
    echo "Nombre: " . $titulo->nombre . "<br>";
    echo "Tipo: " . $titulo->tipo . "<br>";
    echo "Área: " . $titulo->area . "<br>";
    echo "URL: <a href='$titulo->url'>$titulo->url</a><br>";
    echo "Imagen: <img src='$titulo->imagen' alt=''/><br>";
    echo "<br>";
}

/*
Vemos que nos ha devuelto un objeto de la clase stdClass dentro podemos observar 
que nos ha devuelto 113 títulos. 
*/

/*
//Obtener funciones: 
$funciones = $cliente->__getFunctions();

echo "<ul>";
foreach ($funciones as $k => $v) {
    echo "<li><code>$v</code></li>";
}
echo "</ul>";

//Obtener tipos: 
$tipos = $cliente->__getTypes();

echo "<ul>";
foreach ($tipos as $k => $v) {
    echo "<li><code>$v</code></li>";
}
echo "</ul>";
*/