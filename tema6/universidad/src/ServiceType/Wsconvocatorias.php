<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsconvocatorias ServiceType
 * @subpackage Services
 */
class Wsconvocatorias extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsconvocatorias
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsconvocatorias $parameters
     * @return \StructType\WsconvocatoriasResponse|bool
     */
    public function wsconvocatorias(\StructType\Wsconvocatorias $parameters)
    {
        try {
            $this->setResult($resultWsconvocatorias = $this->getSoapClient()->__soapCall('wsconvocatorias', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsconvocatorias;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsconvocatoriasResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
