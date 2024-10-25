<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsfechaexamenesasi ServiceType
 * @subpackage Services
 */
class Wsfechaexamenesasi extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsfechaexamenesasi
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsfechaexamenesasi $parameters
     * @return \StructType\WsfechaexamenesasiResponse|bool
     */
    public function wsfechaexamenesasi(\StructType\Wsfechaexamenesasi $parameters)
    {
        try {
            $this->setResult($resultWsfechaexamenesasi = $this->getSoapClient()->__soapCall('wsfechaexamenesasi', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsfechaexamenesasi;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsfechaexamenesasiResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
