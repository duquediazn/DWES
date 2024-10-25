<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wshorarios ServiceType
 * @subpackage Services
 */
class Wshorarios extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wshorarios
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wshorarios $parameters
     * @return \StructType\WshorariosResponse|bool
     */
    public function wshorarios(\StructType\Wshorarios $parameters)
    {
        try {
            $this->setResult($resultWshorarios = $this->getSoapClient()->__soapCall('wshorarios', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWshorarios;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WshorariosResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
