<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://localhost/~nazaret/DWES/tema6/tarea6/servidorSoap/servicioW.php?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://localhost/~nazaret/DWES/tema6/tarea6/servidorSoap/servicioW.php?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for getPVP operation/method
 */
if ($get->getPVP($codigo) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStock operation/method
 */
if ($get->getStock($cod_producto, $cod_tienda) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFamilias operation/method
 */
if ($get->getFamilias() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProductosFamilia operation/method
 */
if ($get->getProductosFamilia($cod_familia) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
