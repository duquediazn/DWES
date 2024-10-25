<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsasiplan ServiceType
 * @subpackage Services
 */
class Wsasiplan extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsasiplan
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsasiplan $parameters
     * @return \StructType\WsasiplanResponse|bool
     */
    public function wsasiplan(\StructType\Wsasiplan $parameters)
    {
        try {
            $this->setResult($resultWsasiplan = $this->getSoapClient()->__soapCall('wsasiplan', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsasiplan;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsasiplanResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
