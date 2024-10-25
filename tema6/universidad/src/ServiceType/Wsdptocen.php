<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsdptocen ServiceType
 * @subpackage Services
 */
class Wsdptocen extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsdptocen
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsdptocen $parameters
     * @return \StructType\WsdptocenResponse|bool
     */
    public function wsdptocen(\StructType\Wsdptocen $parameters)
    {
        try {
            $this->setResult($resultWsdptocen = $this->getSoapClient()->__soapCall('wsdptocen', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsdptocen;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsdptocenResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
