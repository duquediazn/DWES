<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsagrupacionesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsagrupacionesResponse extends AbstractStructBase
{
    /**
     * The wsagrupacionesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseAgrupaciones|null
     */
    protected ?\ArrayType\ArrayOfClaseAgrupaciones $wsagrupacionesResult = null;
    /**
     * Constructor method for wsagrupacionesResponse
     * @uses WsagrupacionesResponse::setWsagrupacionesResult()
     * @param \ArrayType\ArrayOfClaseAgrupaciones $wsagrupacionesResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseAgrupaciones $wsagrupacionesResult = null)
    {
        $this
            ->setWsagrupacionesResult($wsagrupacionesResult);
    }
    /**
     * Get wsagrupacionesResult value
     * @return \ArrayType\ArrayOfClaseAgrupaciones|null
     */
    public function getWsagrupacionesResult(): ?\ArrayType\ArrayOfClaseAgrupaciones
    {
        return $this->wsagrupacionesResult;
    }
    /**
     * Set wsagrupacionesResult value
     * @param \ArrayType\ArrayOfClaseAgrupaciones $wsagrupacionesResult
     * @return \StructType\WsagrupacionesResponse
     */
    public function setWsagrupacionesResult(?\ArrayType\ArrayOfClaseAgrupaciones $wsagrupacionesResult = null): self
    {
        $this->wsagrupacionesResult = $wsagrupacionesResult;
        
        return $this;
    }
}
