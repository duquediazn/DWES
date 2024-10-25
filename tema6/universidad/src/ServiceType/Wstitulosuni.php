<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wstitulosuni ServiceType
 * @subpackage Services
 */
class Wstitulosuni extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wstitulosuni
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wstitulosuni $parameters
     * @return \StructType\WstitulosuniResponse|bool
     */
    public function wstitulosuni(\StructType\Wstitulosuni $parameters)
    {
        try {
            $this->setResult($resultWstitulosuni = $this->getSoapClient()->__soapCall('wstitulosuni', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWstitulosuni;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WstitulosuniResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
