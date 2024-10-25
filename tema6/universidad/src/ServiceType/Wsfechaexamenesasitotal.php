<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsfechaexamenesasitotal ServiceType
 * @subpackage Services
 */
class Wsfechaexamenesasitotal extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsfechaexamenesasitotal
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsfechaexamenesasitotal $parameters
     * @return \StructType\WsfechaexamenesasitotalResponse|bool
     */
    public function wsfechaexamenesasitotal(\StructType\Wsfechaexamenesasitotal $parameters)
    {
        try {
            $this->setResult($resultWsfechaexamenesasitotal = $this->getSoapClient()->__soapCall('wsfechaexamenesasitotal', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsfechaexamenesasitotal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsfechaexamenesasitotalResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
