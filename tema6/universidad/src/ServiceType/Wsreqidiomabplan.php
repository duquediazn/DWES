<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsreqidiomabplan ServiceType
 * @subpackage Services
 */
class Wsreqidiomabplan extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsreqidiomab1plan
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsreqidiomab1plan $parameters
     * @return \StructType\Wsreqidiomab1planResponse|bool
     */
    public function wsreqidiomab1plan(\StructType\Wsreqidiomab1plan $parameters)
    {
        try {
            $this->setResult($resultWsreqidiomab1plan = $this->getSoapClient()->__soapCall('wsreqidiomab1plan', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsreqidiomab1plan;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Wsreqidiomab1planResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
