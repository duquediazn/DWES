<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wshorarioagrp ServiceType
 * @subpackage Services
 */
class Wshorarioagrp extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wshorarioagrp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wshorarioagrp $parameters
     * @return \StructType\WshorarioagrpResponse|bool
     */
    public function wshorarioagrp(\StructType\Wshorarioagrp $parameters)
    {
        try {
            $this->setResult($resultWshorarioagrp = $this->getSoapClient()->__soapCall('wshorarioagrp', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWshorarioagrp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WshorarioagrpResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
