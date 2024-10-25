<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsdptoasig ServiceType
 * @subpackage Services
 */
class Wsdptoasig extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsdptoasig
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsdptoasig $parameters
     * @return \StructType\WsdptoasigResponse|bool
     */
    public function wsdptoasig(\StructType\Wsdptoasig $parameters)
    {
        try {
            $this->setResult($resultWsdptoasig = $this->getSoapClient()->__soapCall('wsdptoasig', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsdptoasig;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsdptoasigResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
