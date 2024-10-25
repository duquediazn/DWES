<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsasidepto ServiceType
 * @subpackage Services
 */
class Wsasidepto extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsasidepto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsasidepto $parameters
     * @return \StructType\WsasideptoResponse|bool
     */
    public function wsasidepto(\StructType\Wsasidepto $parameters)
    {
        try {
            $this->setResult($resultWsasidepto = $this->getSoapClient()->__soapCall('wsasidepto', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsasidepto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsasideptoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
