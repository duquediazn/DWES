<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsdatosplanResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsdatosplanResponse extends AbstractStructBase
{
    /**
     * The wsdatosplanResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseDatosPlan|null
     */
    protected ?\ArrayType\ArrayOfClaseDatosPlan $wsdatosplanResult = null;
    /**
     * Constructor method for wsdatosplanResponse
     * @uses WsdatosplanResponse::setWsdatosplanResult()
     * @param \ArrayType\ArrayOfClaseDatosPlan $wsdatosplanResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseDatosPlan $wsdatosplanResult = null)
    {
        $this
            ->setWsdatosplanResult($wsdatosplanResult);
    }
    /**
     * Get wsdatosplanResult value
     * @return \ArrayType\ArrayOfClaseDatosPlan|null
     */
    public function getWsdatosplanResult(): ?\ArrayType\ArrayOfClaseDatosPlan
    {
        return $this->wsdatosplanResult;
    }
    /**
     * Set wsdatosplanResult value
     * @param \ArrayType\ArrayOfClaseDatosPlan $wsdatosplanResult
     * @return \StructType\WsdatosplanResponse
     */
    public function setWsdatosplanResult(?\ArrayType\ArrayOfClaseDatosPlan $wsdatosplanResult = null): self
    {
        $this->wsdatosplanResult = $wsdatosplanResult;
        
        return $this;
    }
}
