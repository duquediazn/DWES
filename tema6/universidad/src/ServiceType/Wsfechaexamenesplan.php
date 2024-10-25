<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsfechaexamenesplan ServiceType
 * @subpackage Services
 */
class Wsfechaexamenesplan extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsfechaexamenesplan
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsfechaexamenesplan $parameters
     * @return \StructType\WsfechaexamenesplanResponse|bool
     */
    public function wsfechaexamenesplan(\StructType\Wsfechaexamenesplan $parameters)
    {
        try {
            $this->setResult($resultWsfechaexamenesplan = $this->getSoapClient()->__soapCall('wsfechaexamenesplan', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsfechaexamenesplan;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsfechaexamenesplanResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
