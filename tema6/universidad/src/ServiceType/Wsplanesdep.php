<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsplanesdep ServiceType
 * @subpackage Services
 */
class Wsplanesdep extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsplanesdep
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsplanesdep $parameters
     * @return \StructType\WsplanesdepResponse|bool
     */
    public function wsplanesdep(\StructType\Wsplanesdep $parameters)
    {
        try {
            $this->setResult($resultWsplanesdep = $this->getSoapClient()->__soapCall('wsplanesdep', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsplanesdep;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsplanesdepResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
