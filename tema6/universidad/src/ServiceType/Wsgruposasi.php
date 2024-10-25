<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsgruposasi ServiceType
 * @subpackage Services
 */
class Wsgruposasi extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsgruposasi
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsgruposasi $parameters
     * @return \StructType\WsgruposasiResponse|bool
     */
    public function wsgruposasi(\StructType\Wsgruposasi $parameters)
    {
        try {
            $this->setResult($resultWsgruposasi = $this->getSoapClient()->__soapCall('wsgruposasi', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsgruposasi;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsgruposasiResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
