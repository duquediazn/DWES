<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsfechaexamenesasiResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsfechaexamenesasiResponse extends AbstractStructBase
{
    /**
     * The wsfechaexamenesasiResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseFechaExamenesAsi|null
     */
    protected ?\ArrayType\ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult = null;
    /**
     * Constructor method for wsfechaexamenesasiResponse
     * @uses WsfechaexamenesasiResponse::setWsfechaexamenesasiResult()
     * @param \ArrayType\ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult = null)
    {
        $this
            ->setWsfechaexamenesasiResult($wsfechaexamenesasiResult);
    }
    /**
     * Get wsfechaexamenesasiResult value
     * @return \ArrayType\ArrayOfClaseFechaExamenesAsi|null
     */
    public function getWsfechaexamenesasiResult(): ?\ArrayType\ArrayOfClaseFechaExamenesAsi
    {
        return $this->wsfechaexamenesasiResult;
    }
    /**
     * Set wsfechaexamenesasiResult value
     * @param \ArrayType\ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult
     * @return \StructType\WsfechaexamenesasiResponse
     */
    public function setWsfechaexamenesasiResult(?\ArrayType\ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult = null): self
    {
        $this->wsfechaexamenesasiResult = $wsfechaexamenesasiResult;
        
        return $this;
    }
}
