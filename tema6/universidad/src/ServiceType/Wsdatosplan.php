<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsdatosplan ServiceType
 * @subpackage Services
 */
class Wsdatosplan extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsdatosplan
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsdatosplan $parameters
     * @return \StructType\WsdatosplanResponse|bool
     */
    public function wsdatosplan(\StructType\Wsdatosplan $parameters)
    {
        try {
            $this->setResult($resultWsdatosplan = $this->getSoapClient()->__soapCall('wsdatosplan', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsdatosplan;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsdatosplanResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
