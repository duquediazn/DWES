<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsplanesasig ServiceType
 * @subpackage Services
 */
class Wsplanesasig extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsplanesasig
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsplanesasig $parameters
     * @return \StructType\WsplanesasigResponse|bool
     */
    public function wsplanesasig(\StructType\Wsplanesasig $parameters)
    {
        try {
            $this->setResult($resultWsplanesasig = $this->getSoapClient()->__soapCall('wsplanesasig', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsplanesasig;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsplanesasigResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
