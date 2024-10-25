<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wstitulospropiosuniResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WstitulospropiosuniResponse extends AbstractStructBase
{
    /**
     * The wstitulospropiosuniResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseTitulosPropiosUni|null
     */
    protected ?\ArrayType\ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult = null;
    /**
     * Constructor method for wstitulospropiosuniResponse
     * @uses WstitulospropiosuniResponse::setWstitulospropiosuniResult()
     * @param \ArrayType\ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult = null)
    {
        $this
            ->setWstitulospropiosuniResult($wstitulospropiosuniResult);
    }
    /**
     * Get wstitulospropiosuniResult value
     * @return \ArrayType\ArrayOfClaseTitulosPropiosUni|null
     */
    public function getWstitulospropiosuniResult(): ?\ArrayType\ArrayOfClaseTitulosPropiosUni
    {
        return $this->wstitulospropiosuniResult;
    }
    /**
     * Set wstitulospropiosuniResult value
     * @param \ArrayType\ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult
     * @return \StructType\WstitulospropiosuniResponse
     */
    public function setWstitulospropiosuniResult(?\ArrayType\ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult = null): self
    {
        $this->wstitulospropiosuniResult = $wstitulospropiosuniResult;
        
        return $this;
    }
}
