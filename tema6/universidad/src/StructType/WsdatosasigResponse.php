<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsdatosasigResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsdatosasigResponse extends AbstractStructBase
{
    /**
     * The wsdatosasigResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseDatosAsig|null
     */
    protected ?\ArrayType\ArrayOfClaseDatosAsig $wsdatosasigResult = null;
    /**
     * Constructor method for wsdatosasigResponse
     * @uses WsdatosasigResponse::setWsdatosasigResult()
     * @param \ArrayType\ArrayOfClaseDatosAsig $wsdatosasigResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseDatosAsig $wsdatosasigResult = null)
    {
        $this
            ->setWsdatosasigResult($wsdatosasigResult);
    }
    /**
     * Get wsdatosasigResult value
     * @return \ArrayType\ArrayOfClaseDatosAsig|null
     */
    public function getWsdatosasigResult(): ?\ArrayType\ArrayOfClaseDatosAsig
    {
        return $this->wsdatosasigResult;
    }
    /**
     * Set wsdatosasigResult value
     * @param \ArrayType\ArrayOfClaseDatosAsig $wsdatosasigResult
     * @return \StructType\WsdatosasigResponse
     */
    public function setWsdatosasigResult(?\ArrayType\ArrayOfClaseDatosAsig $wsdatosasigResult = null): self
    {
        $this->wsdatosasigResult = $wsdatosasigResult;
        
        return $this;
    }
}
