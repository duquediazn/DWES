<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseReqidiomab1plan StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseReqidiomab1plan extends AbstractStructBase
{
    /**
     * The tienerequisitob1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tienerequisitob1 = null;
    /**
     * Constructor method for ClaseReqidiomab1plan
     * @uses ClaseReqidiomab1plan::setTienerequisitob1()
     * @param string $tienerequisitob1
     */
    public function __construct(?string $tienerequisitob1 = null)
    {
        $this
            ->setTienerequisitob1($tienerequisitob1);
    }
    /**
     * Get tienerequisitob1 value
     * @return string|null
     */
    public function getTienerequisitob1(): ?string
    {
        return $this->tienerequisitob1;
    }
    /**
     * Set tienerequisitob1 value
     * @param string $tienerequisitob1
     * @return \StructType\ClaseReqidiomab1plan
     */
    public function setTienerequisitob1(?string $tienerequisitob1 = null): self
    {
        // validation for constraint: string
        if (!is_null($tienerequisitob1) && !is_string($tienerequisitob1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tienerequisitob1, true), gettype($tienerequisitob1)), __LINE__);
        }
        $this->tienerequisitob1 = $tienerequisitob1;
        
        return $this;
    }
}
