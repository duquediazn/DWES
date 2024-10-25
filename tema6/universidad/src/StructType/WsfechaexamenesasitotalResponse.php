<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsfechaexamenesasitotalResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsfechaexamenesasitotalResponse extends AbstractStructBase
{
    /**
     * The wsfechaexamenesasitotalResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseFechaExamenesAsiTotal|null
     */
    protected ?\ArrayType\ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult = null;
    /**
     * Constructor method for wsfechaexamenesasitotalResponse
     * @uses WsfechaexamenesasitotalResponse::setWsfechaexamenesasitotalResult()
     * @param \ArrayType\ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult = null)
    {
        $this
            ->setWsfechaexamenesasitotalResult($wsfechaexamenesasitotalResult);
    }
    /**
     * Get wsfechaexamenesasitotalResult value
     * @return \ArrayType\ArrayOfClaseFechaExamenesAsiTotal|null
     */
    public function getWsfechaexamenesasitotalResult(): ?\ArrayType\ArrayOfClaseFechaExamenesAsiTotal
    {
        return $this->wsfechaexamenesasitotalResult;
    }
    /**
     * Set wsfechaexamenesasitotalResult value
     * @param \ArrayType\ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult
     * @return \StructType\WsfechaexamenesasitotalResponse
     */
    public function setWsfechaexamenesasitotalResult(?\ArrayType\ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult = null): self
    {
        $this->wsfechaexamenesasitotalResult = $wsfechaexamenesasitotalResult;
        
        return $this;
    }
}
