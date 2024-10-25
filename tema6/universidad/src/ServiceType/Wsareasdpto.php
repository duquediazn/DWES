<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsareasdpto ServiceType
 * @subpackage Services
 */
class Wsareasdpto extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsareasdpto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsareasdpto $parameters
     * @return \StructType\WsareasdptoResponse|bool
     */
    public function wsareasdpto(\StructType\Wsareasdpto $parameters)
    {
        try {
            $this->setResult($resultWsareasdpto = $this->getSoapClient()->__soapCall('wsareasdpto', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsareasdpto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsareasdptoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
