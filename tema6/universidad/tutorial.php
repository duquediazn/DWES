<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl',
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
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Wsagrupaciones ServiceType
 */
$wsagrupaciones = new \ServiceType\Wsagrupaciones($options);
/**
 * Sample call for wsagrupaciones operation/method
 */
if ($wsagrupaciones->wsagrupaciones(new \StructType\Wsagrupaciones()) !== false) {
    print_r($wsagrupaciones->getResult());
} else {
    print_r($wsagrupaciones->getLastError());
}
/**
 * Samples for Wsfechaexamenesasi ServiceType
 */
$wsfechaexamenesasi = new \ServiceType\Wsfechaexamenesasi($options);
/**
 * Sample call for wsfechaexamenesasi operation/method
 */
if ($wsfechaexamenesasi->wsfechaexamenesasi(new \StructType\Wsfechaexamenesasi()) !== false) {
    print_r($wsfechaexamenesasi->getResult());
} else {
    print_r($wsfechaexamenesasi->getLastError());
}
/**
 * Samples for Wsfechaexamenesasitotal ServiceType
 */
$wsfechaexamenesasitotal = new \ServiceType\Wsfechaexamenesasitotal($options);
/**
 * Sample call for wsfechaexamenesasitotal operation/method
 */
if ($wsfechaexamenesasitotal->wsfechaexamenesasitotal(new \StructType\Wsfechaexamenesasitotal()) !== false) {
    print_r($wsfechaexamenesasitotal->getResult());
} else {
    print_r($wsfechaexamenesasitotal->getLastError());
}
/**
 * Samples for Wsfechaexamenesasinue ServiceType
 */
$wsfechaexamenesasinue = new \ServiceType\Wsfechaexamenesasinue($options);
/**
 * Sample call for wsfechaexamenesasinue operation/method
 */
if ($wsfechaexamenesasinue->wsfechaexamenesasinue(new \StructType\Wsfechaexamenesasinue()) !== false) {
    print_r($wsfechaexamenesasinue->getResult());
} else {
    print_r($wsfechaexamenesasinue->getLastError());
}
/**
 * Samples for Wsfechaexamenesplan ServiceType
 */
$wsfechaexamenesplan = new \ServiceType\Wsfechaexamenesplan($options);
/**
 * Sample call for wsfechaexamenesplan operation/method
 */
if ($wsfechaexamenesplan->wsfechaexamenesplan(new \StructType\Wsfechaexamenesplan()) !== false) {
    print_r($wsfechaexamenesplan->getResult());
} else {
    print_r($wsfechaexamenesplan->getLastError());
}
/**
 * Samples for Wsasidepto ServiceType
 */
$wsasidepto = new \ServiceType\Wsasidepto($options);
/**
 * Sample call for wsasidepto operation/method
 */
if ($wsasidepto->wsasidepto(new \StructType\Wsasidepto()) !== false) {
    print_r($wsasidepto->getResult());
} else {
    print_r($wsasidepto->getLastError());
}
/**
 * Samples for Wsdatosasig ServiceType
 */
$wsdatosasig = new \ServiceType\Wsdatosasig($options);
/**
 * Sample call for wsdatosasig operation/method
 */
if ($wsdatosasig->wsdatosasig(new \StructType\Wsdatosasig()) !== false) {
    print_r($wsdatosasig->getResult());
} else {
    print_r($wsdatosasig->getLastError());
}
/**
 * Samples for Wshorarioagrp ServiceType
 */
$wshorarioagrp = new \ServiceType\Wshorarioagrp($options);
/**
 * Sample call for wshorarioagrp operation/method
 */
if ($wshorarioagrp->wshorarioagrp(new \StructType\Wshorarioagrp()) !== false) {
    print_r($wshorarioagrp->getResult());
} else {
    print_r($wshorarioagrp->getLastError());
}
/**
 * Samples for Wshorarios ServiceType
 */
$wshorarios = new \ServiceType\Wshorarios($options);
/**
 * Sample call for wshorarios operation/method
 */
if ($wshorarios->wshorarios(new \StructType\Wshorarios()) !== false) {
    print_r($wshorarios->getResult());
} else {
    print_r($wshorarios->getLastError());
}
/**
 * Samples for Wstitulosuni ServiceType
 */
$wstitulosuni = new \ServiceType\Wstitulosuni($options);
/**
 * Sample call for wstitulosuni operation/method
 */
if ($wstitulosuni->wstitulosuni(new \StructType\Wstitulosuni()) !== false) {
    print_r($wstitulosuni->getResult());
} else {
    print_r($wstitulosuni->getLastError());
}
/**
 * Samples for Wsdatosplan ServiceType
 */
$wsdatosplan = new \ServiceType\Wsdatosplan($options);
/**
 * Sample call for wsdatosplan operation/method
 */
if ($wsdatosplan->wsdatosplan(new \StructType\Wsdatosplan()) !== false) {
    print_r($wsdatosplan->getResult());
} else {
    print_r($wsdatosplan->getLastError());
}
/**
 * Samples for Wsplanesasig ServiceType
 */
$wsplanesasig = new \ServiceType\Wsplanesasig($options);
/**
 * Sample call for wsplanesasig operation/method
 */
if ($wsplanesasig->wsplanesasig(new \StructType\Wsplanesasig()) !== false) {
    print_r($wsplanesasig->getResult());
} else {
    print_r($wsplanesasig->getLastError());
}
/**
 * Samples for Wsplanesdep ServiceType
 */
$wsplanesdep = new \ServiceType\Wsplanesdep($options);
/**
 * Sample call for wsplanesdep operation/method
 */
if ($wsplanesdep->wsplanesdep(new \StructType\Wsplanesdep()) !== false) {
    print_r($wsplanesdep->getResult());
} else {
    print_r($wsplanesdep->getLastError());
}
/**
 * Samples for Wsdptoasig ServiceType
 */
$wsdptoasig = new \ServiceType\Wsdptoasig($options);
/**
 * Sample call for wsdptoasig operation/method
 */
if ($wsdptoasig->wsdptoasig(new \StructType\Wsdptoasig()) !== false) {
    print_r($wsdptoasig->getResult());
} else {
    print_r($wsdptoasig->getLastError());
}
/**
 * Samples for Wsareasdpto ServiceType
 */
$wsareasdpto = new \ServiceType\Wsareasdpto($options);
/**
 * Sample call for wsareasdpto operation/method
 */
if ($wsareasdpto->wsareasdpto(new \StructType\Wsareasdpto()) !== false) {
    print_r($wsareasdpto->getResult());
} else {
    print_r($wsareasdpto->getLastError());
}
/**
 * Samples for Wsdptocen ServiceType
 */
$wsdptocen = new \ServiceType\Wsdptocen($options);
/**
 * Sample call for wsdptocen operation/method
 */
if ($wsdptocen->wsdptocen(new \StructType\Wsdptocen()) !== false) {
    print_r($wsdptocen->getResult());
} else {
    print_r($wsdptocen->getLastError());
}
/**
 * Samples for Wsasiplan ServiceType
 */
$wsasiplan = new \ServiceType\Wsasiplan($options);
/**
 * Sample call for wsasiplan operation/method
 */
if ($wsasiplan->wsasiplan(new \StructType\Wsasiplan()) !== false) {
    print_r($wsasiplan->getResult());
} else {
    print_r($wsasiplan->getLastError());
}
/**
 * Samples for Wscalificaciones ServiceType
 */
$wscalificaciones = new \ServiceType\Wscalificaciones($options);
/**
 * Sample call for wscalificaciones operation/method
 */
if ($wscalificaciones->wscalificaciones(new \StructType\Wscalificaciones()) !== false) {
    print_r($wscalificaciones->getResult());
} else {
    print_r($wscalificaciones->getLastError());
}
/**
 * Samples for Wsconvocatorias ServiceType
 */
$wsconvocatorias = new \ServiceType\Wsconvocatorias($options);
/**
 * Sample call for wsconvocatorias operation/method
 */
if ($wsconvocatorias->wsconvocatorias(new \StructType\Wsconvocatorias()) !== false) {
    print_r($wsconvocatorias->getResult());
} else {
    print_r($wsconvocatorias->getLastError());
}
/**
 * Samples for Wsgruposasi ServiceType
 */
$wsgruposasi = new \ServiceType\Wsgruposasi($options);
/**
 * Sample call for wsgruposasi operation/method
 */
if ($wsgruposasi->wsgruposasi(new \StructType\Wsgruposasi()) !== false) {
    print_r($wsgruposasi->getResult());
} else {
    print_r($wsgruposasi->getLastError());
}
/**
 * Samples for Wsconvemovilidad ServiceType
 */
$wsconvemovilidad = new \ServiceType\Wsconvemovilidad($options);
/**
 * Sample call for wsconvemovilidad operation/method
 */
if ($wsconvemovilidad->wsconvemovilidad(new \StructType\Wsconvemovilidad()) !== false) {
    print_r($wsconvemovilidad->getResult());
} else {
    print_r($wsconvemovilidad->getLastError());
}
/**
 * Samples for Wstitulospropiosuni ServiceType
 */
$wstitulospropiosuni = new \ServiceType\Wstitulospropiosuni($options);
/**
 * Sample call for wstitulospropiosuni operation/method
 */
if ($wstitulospropiosuni->wstitulospropiosuni(new \StructType\Wstitulospropiosuni()) !== false) {
    print_r($wstitulospropiosuni->getResult());
} else {
    print_r($wstitulospropiosuni->getLastError());
}
/**
 * Samples for Wsreqidiomabplan ServiceType
 */
$wsreqidiomabplan = new \ServiceType\Wsreqidiomabplan($options);
/**
 * Sample call for wsreqidiomab1plan operation/method
 */
if ($wsreqidiomabplan->wsreqidiomab1plan(new \StructType\Wsreqidiomab1plan()) !== false) {
    print_r($wsreqidiomabplan->getResult());
} else {
    print_r($wsreqidiomabplan->getLastError());
}
