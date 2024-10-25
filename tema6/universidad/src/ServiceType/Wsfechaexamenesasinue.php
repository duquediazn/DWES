<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsfechaexamenesasinue ServiceType
 * @subpackage Services
 */
class Wsfechaexamenesasinue extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsfechaexamenesasinue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsfechaexamenesasinue $parameters
     * @return \StructType\WsfechaexamenesasinueResponse|bool
     */
    public function wsfechaexamenesasinue(\StructType\Wsfechaexamenesasinue $parameters)
    {
        try {
            $this->setResult($resultWsfechaexamenesasinue = $this->getSoapClient()->__soapCall('wsfechaexamenesasinue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsfechaexamenesasinue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsfechaexamenesasinueResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
