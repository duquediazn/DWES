<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsreqidiomab1planResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsreqidiomab1planResponse extends AbstractStructBase
{
    /**
     * The wsreqidiomab1planResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ClaseReqidiomab1plan|null
     */
    protected ?\StructType\ClaseReqidiomab1plan $wsreqidiomab1planResult = null;
    /**
     * Constructor method for wsreqidiomab1planResponse
     * @uses Wsreqidiomab1planResponse::setWsreqidiomab1planResult()
     * @param \StructType\ClaseReqidiomab1plan $wsreqidiomab1planResult
     */
    public function __construct(?\StructType\ClaseReqidiomab1plan $wsreqidiomab1planResult = null)
    {
        $this
            ->setWsreqidiomab1planResult($wsreqidiomab1planResult);
    }
    /**
     * Get wsreqidiomab1planResult value
     * @return \StructType\ClaseReqidiomab1plan|null
     */
    public function getWsreqidiomab1planResult(): ?\StructType\ClaseReqidiomab1plan
    {
        return $this->wsreqidiomab1planResult;
    }
    /**
     * Set wsreqidiomab1planResult value
     * @param \StructType\ClaseReqidiomab1plan $wsreqidiomab1planResult
     * @return \StructType\Wsreqidiomab1planResponse
     */
    public function setWsreqidiomab1planResult(?\StructType\ClaseReqidiomab1plan $wsreqidiomab1planResult = null): self
    {
        $this->wsreqidiomab1planResult = $wsreqidiomab1planResult;
        
        return $this;
    }
}
