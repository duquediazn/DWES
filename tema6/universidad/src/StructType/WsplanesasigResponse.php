<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsplanesasigResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsplanesasigResponse extends AbstractStructBase
{
    /**
     * The wsplanesasigResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClasePlanesAsig|null
     */
    protected ?\ArrayType\ArrayOfClasePlanesAsig $wsplanesasigResult = null;
    /**
     * Constructor method for wsplanesasigResponse
     * @uses WsplanesasigResponse::setWsplanesasigResult()
     * @param \ArrayType\ArrayOfClasePlanesAsig $wsplanesasigResult
     */
    public function __construct(?\ArrayType\ArrayOfClasePlanesAsig $wsplanesasigResult = null)
    {
        $this
            ->setWsplanesasigResult($wsplanesasigResult);
    }
    /**
     * Get wsplanesasigResult value
     * @return \ArrayType\ArrayOfClasePlanesAsig|null
     */
    public function getWsplanesasigResult(): ?\ArrayType\ArrayOfClasePlanesAsig
    {
        return $this->wsplanesasigResult;
    }
    /**
     * Set wsplanesasigResult value
     * @param \ArrayType\ArrayOfClasePlanesAsig $wsplanesasigResult
     * @return \StructType\WsplanesasigResponse
     */
    public function setWsplanesasigResult(?\ArrayType\ArrayOfClasePlanesAsig $wsplanesasigResult = null): self
    {
        $this->wsplanesasigResult = $wsplanesasigResult;
        
        return $this;
    }
}
