<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsasiplanResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsasiplanResponse extends AbstractStructBase
{
    /**
     * The wsasiplanResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseAsiPlan|null
     */
    protected ?\ArrayType\ArrayOfClaseAsiPlan $wsasiplanResult = null;
    /**
     * Constructor method for wsasiplanResponse
     * @uses WsasiplanResponse::setWsasiplanResult()
     * @param \ArrayType\ArrayOfClaseAsiPlan $wsasiplanResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseAsiPlan $wsasiplanResult = null)
    {
        $this
            ->setWsasiplanResult($wsasiplanResult);
    }
    /**
     * Get wsasiplanResult value
     * @return \ArrayType\ArrayOfClaseAsiPlan|null
     */
    public function getWsasiplanResult(): ?\ArrayType\ArrayOfClaseAsiPlan
    {
        return $this->wsasiplanResult;
    }
    /**
     * Set wsasiplanResult value
     * @param \ArrayType\ArrayOfClaseAsiPlan $wsasiplanResult
     * @return \StructType\WsasiplanResponse
     */
    public function setWsasiplanResult(?\ArrayType\ArrayOfClaseAsiPlan $wsasiplanResult = null): self
    {
        $this->wsasiplanResult = $wsasiplanResult;
        
        return $this;
    }
}
