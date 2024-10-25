<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wstitulosuniResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WstitulosuniResponse extends AbstractStructBase
{
    /**
     * The wstitulosuniResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseTitulosUni|null
     */
    protected ?\ArrayType\ArrayOfClaseTitulosUni $wstitulosuniResult = null;
    /**
     * Constructor method for wstitulosuniResponse
     * @uses WstitulosuniResponse::setWstitulosuniResult()
     * @param \ArrayType\ArrayOfClaseTitulosUni $wstitulosuniResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseTitulosUni $wstitulosuniResult = null)
    {
        $this
            ->setWstitulosuniResult($wstitulosuniResult);
    }
    /**
     * Get wstitulosuniResult value
     * @return \ArrayType\ArrayOfClaseTitulosUni|null
     */
    public function getWstitulosuniResult(): ?\ArrayType\ArrayOfClaseTitulosUni
    {
        return $this->wstitulosuniResult;
    }
    /**
     * Set wstitulosuniResult value
     * @param \ArrayType\ArrayOfClaseTitulosUni $wstitulosuniResult
     * @return \StructType\WstitulosuniResponse
     */
    public function setWstitulosuniResult(?\ArrayType\ArrayOfClaseTitulosUni $wstitulosuniResult = null): self
    {
        $this->wstitulosuniResult = $wstitulosuniResult;
        
        return $this;
    }
}
