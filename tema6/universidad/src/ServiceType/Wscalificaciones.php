<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wscalificaciones ServiceType
 * @subpackage Services
 */
class Wscalificaciones extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wscalificaciones
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wscalificaciones $parameters
     * @return \StructType\WscalificacionesResponse|bool
     */
    public function wscalificaciones(\StructType\Wscalificaciones $parameters)
    {
        try {
            $this->setResult($resultWscalificaciones = $this->getSoapClient()->__soapCall('wscalificaciones', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWscalificaciones;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WscalificacionesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
