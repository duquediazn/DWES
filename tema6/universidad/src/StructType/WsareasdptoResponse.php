<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsareasdptoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsareasdptoResponse extends AbstractStructBase
{
    /**
     * The wsareasdptoResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseAreasDpto|null
     */
    protected ?\ArrayType\ArrayOfClaseAreasDpto $wsareasdptoResult = null;
    /**
     * Constructor method for wsareasdptoResponse
     * @uses WsareasdptoResponse::setWsareasdptoResult()
     * @param \ArrayType\ArrayOfClaseAreasDpto $wsareasdptoResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseAreasDpto $wsareasdptoResult = null)
    {
        $this
            ->setWsareasdptoResult($wsareasdptoResult);
    }
    /**
     * Get wsareasdptoResult value
     * @return \ArrayType\ArrayOfClaseAreasDpto|null
     */
    public function getWsareasdptoResult(): ?\ArrayType\ArrayOfClaseAreasDpto
    {
        return $this->wsareasdptoResult;
    }
    /**
     * Set wsareasdptoResult value
     * @param \ArrayType\ArrayOfClaseAreasDpto $wsareasdptoResult
     * @return \StructType\WsareasdptoResponse
     */
    public function setWsareasdptoResult(?\ArrayType\ArrayOfClaseAreasDpto $wsareasdptoResult = null): self
    {
        $this->wsareasdptoResult = $wsareasdptoResult;
        
        return $this;
    }
}
