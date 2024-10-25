<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsdatosasig ServiceType
 * @subpackage Services
 */
class Wsdatosasig extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsdatosasig
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsdatosasig $parameters
     * @return \StructType\WsdatosasigResponse|bool
     */
    public function wsdatosasig(\StructType\Wsdatosasig $parameters)
    {
        try {
            $this->setResult($resultWsdatosasig = $this->getSoapClient()->__soapCall('wsdatosasig', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsdatosasig;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsdatosasigResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
