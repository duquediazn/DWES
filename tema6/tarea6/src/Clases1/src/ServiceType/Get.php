<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getPVP
     * Meta information extracted from the WSDL
     * - documentation: Obtiene el PVP de un producto.Este método recibe el código de un producto y devuelve su PVP correspondiente.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $codigo
     * @return float|bool
     */
    public function getPVP($codigo)
    {
        try {
            $this->setResult($resultGetPVP = $this->getSoapClient()->__soapCall('getPVP', [
                $codigo,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPVP;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStock
     * Meta information extracted from the WSDL
     * - documentation: Obtiene el stock de un producto en una tienda específica.Este método recibe el código de un producto y el código de una tienda,devolviendo el stock existente en esa tienda para el producto.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $cod_producto
     * @param string $cod_tienda
     * @return int|bool
     */
    public function getStock($cod_producto, $cod_tienda)
    {
        try {
            $this->setResult($resultGetStock = $this->getSoapClient()->__soapCall('getStock', [
                $cod_producto,
                $cod_tienda,
            ], [], [], $this->outputHeaders));
        
            return $resultGetStock;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFamilias
     * Meta information extracted from the WSDL
     * - documentation: Obtiene una lista de todas las familias existentes.Este método no recibe parámetros y devuelve un array con los códigos de todas las familias en la base de datos.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return Array|bool
     */
    public function getFamilias()
    {
        try {
            $this->setResult($resultGetFamilias = $this->getSoapClient()->__soapCall('getFamilias', [], [], [], $this->outputHeaders));
        
            return $resultGetFamilias;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProductosFamilia
     * Meta information extracted from the WSDL
     * - documentation: Obtiene los productos de una familia específica.Este método recibe el código de una familia y devuelve un array con los códigos de todos los productos de esa familia.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $cod_familia
     * @return Array|bool
     */
    public function getProductosFamilia($cod_familia)
    {
        try {
            $this->setResult($resultGetProductosFamilia = $this->getSoapClient()->__soapCall('getProductosFamilia', [
                $cod_familia,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductosFamilia;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return Array|float|int
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
