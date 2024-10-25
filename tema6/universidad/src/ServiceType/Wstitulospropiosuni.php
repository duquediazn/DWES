<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wstitulospropiosuni ServiceType
 * @subpackage Services
 */
class Wstitulospropiosuni extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wstitulospropiosuni
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wstitulospropiosuni $parameters
     * @return \StructType\WstitulospropiosuniResponse|bool
     */
    public function wstitulospropiosuni(\StructType\Wstitulospropiosuni $parameters)
    {
        try {
            $this->setResult($resultWstitulospropiosuni = $this->getSoapClient()->__soapCall('wstitulospropiosuni', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWstitulospropiosuni;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WstitulospropiosuniResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
