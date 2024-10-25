<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsfechaexamenesplanResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsfechaexamenesplanResponse extends AbstractStructBase
{
    /**
     * The wsfechaexamenesplanResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseFechaExamenesPlan|null
     */
    protected ?\ArrayType\ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult = null;
    /**
     * Constructor method for wsfechaexamenesplanResponse
     * @uses WsfechaexamenesplanResponse::setWsfechaexamenesplanResult()
     * @param \ArrayType\ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult = null)
    {
        $this
            ->setWsfechaexamenesplanResult($wsfechaexamenesplanResult);
    }
    /**
     * Get wsfechaexamenesplanResult value
     * @return \ArrayType\ArrayOfClaseFechaExamenesPlan|null
     */
    public function getWsfechaexamenesplanResult(): ?\ArrayType\ArrayOfClaseFechaExamenesPlan
    {
        return $this->wsfechaexamenesplanResult;
    }
    /**
     * Set wsfechaexamenesplanResult value
     * @param \ArrayType\ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult
     * @return \StructType\WsfechaexamenesplanResponse
     */
    public function setWsfechaexamenesplanResult(?\ArrayType\ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult = null): self
    {
        $this->wsfechaexamenesplanResult = $wsfechaexamenesplanResult;
        
        return $this;
    }
}
