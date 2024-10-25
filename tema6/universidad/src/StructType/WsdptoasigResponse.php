<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsdptoasigResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsdptoasigResponse extends AbstractStructBase
{
    /**
     * The wsdptoasigResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseDptoAsig|null
     */
    protected ?\ArrayType\ArrayOfClaseDptoAsig $wsdptoasigResult = null;
    /**
     * Constructor method for wsdptoasigResponse
     * @uses WsdptoasigResponse::setWsdptoasigResult()
     * @param \ArrayType\ArrayOfClaseDptoAsig $wsdptoasigResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseDptoAsig $wsdptoasigResult = null)
    {
        $this
            ->setWsdptoasigResult($wsdptoasigResult);
    }
    /**
     * Get wsdptoasigResult value
     * @return \ArrayType\ArrayOfClaseDptoAsig|null
     */
    public function getWsdptoasigResult(): ?\ArrayType\ArrayOfClaseDptoAsig
    {
        return $this->wsdptoasigResult;
    }
    /**
     * Set wsdptoasigResult value
     * @param \ArrayType\ArrayOfClaseDptoAsig $wsdptoasigResult
     * @return \StructType\WsdptoasigResponse
     */
    public function setWsdptoasigResult(?\ArrayType\ArrayOfClaseDptoAsig $wsdptoasigResult = null): self
    {
        $this->wsdptoasigResult = $wsdptoasigResult;
        
        return $this;
    }
}
