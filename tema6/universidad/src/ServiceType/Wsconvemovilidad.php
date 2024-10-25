<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wsconvemovilidad ServiceType
 * @subpackage Services
 */
class Wsconvemovilidad extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wsconvemovilidad
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Wsconvemovilidad $parameters
     * @return \StructType\WsconvemovilidadResponse|bool
     */
    public function wsconvemovilidad(\StructType\Wsconvemovilidad $parameters)
    {
        try {
            $this->setResult($resultWsconvemovilidad = $this->getSoapClient()->__soapCall('wsconvemovilidad', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWsconvemovilidad;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\WsconvemovilidadResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
