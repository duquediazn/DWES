<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsagrupaciones ServiceType
 * @subpackage Services
 */
class Wsagrupaciones extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsagrupaciones
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsagrupaciones $parameters
     * @return \StructType\WsagrupacionesResponse|bool
     */
    public function wsagrupaciones(\StructType\Wsagrupaciones $parameters)
    {
        try {
            $this->setResult($resultWsagrupaciones = $this->getSoapClient()->__soapCall('wsagrupaciones', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsagrupaciones;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsagrupacionesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
