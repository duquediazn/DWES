<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsasideptoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsasideptoResponse extends AbstractStructBase
{
    /**
     * The wsasideptoResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseAsiDepto|null
     */
    protected ?\ArrayType\ArrayOfClaseAsiDepto $wsasideptoResult = null;
    /**
     * Constructor method for wsasideptoResponse
     * @uses WsasideptoResponse::setWsasideptoResult()
     * @param \ArrayType\ArrayOfClaseAsiDepto $wsasideptoResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseAsiDepto $wsasideptoResult = null)
    {
        $this
            ->setWsasideptoResult($wsasideptoResult);
    }
    /**
     * Get wsasideptoResult value
     * @return \ArrayType\ArrayOfClaseAsiDepto|null
     */
    public function getWsasideptoResult(): ?\ArrayType\ArrayOfClaseAsiDepto
    {
        return $this->wsasideptoResult;
    }
    /**
     * Set wsasideptoResult value
     * @param \ArrayType\ArrayOfClaseAsiDepto $wsasideptoResult
     * @return \StructType\WsasideptoResponse
     */
    public function setWsasideptoResult(?\ArrayType\ArrayOfClaseAsiDepto $wsasideptoResult = null): self
    {
        $this->wsasideptoResult = $wsasideptoResult;
        
        return $this;
    }
}
