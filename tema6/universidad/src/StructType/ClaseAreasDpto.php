<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseAreasDpto StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseAreasDpto extends AbstractStructBase
{
    /**
     * The codarea
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codarea = null;
    /**
     * The nomarea
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomarea = null;
    /**
     * Constructor method for ClaseAreasDpto
     * @uses ClaseAreasDpto::setCodarea()
     * @uses ClaseAreasDpto::setNomarea()
     * @param string $codarea
     * @param string $nomarea
     */
    public function __construct(?string $codarea = null, ?string $nomarea = null)
    {
        $this
            ->setCodarea($codarea)
            ->setNomarea($nomarea);
    }
    /**
     * Get codarea value
     * @return string|null
     */
    public function getCodarea(): ?string
    {
        return $this->codarea;
    }
    /**
     * Set codarea value
     * @param string $codarea
     * @return \StructType\ClaseAreasDpto
     */
    public function setCodarea(?string $codarea = null): self
    {
        // validation for constraint: string
        if (!is_null($codarea) && !is_string($codarea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codarea, true), gettype($codarea)), __LINE__);
        }
        $this->codarea = $codarea;
        
        return $this;
    }
    /**
     * Get nomarea value
     * @return string|null
     */
    public function getNomarea(): ?string
    {
        return $this->nomarea;
    }
    /**
     * Set nomarea value
     * @param string $nomarea
     * @return \StructType\ClaseAreasDpto
     */
    public function setNomarea(?string $nomarea = null): self
    {
        // validation for constraint: string
        if (!is_null($nomarea) && !is_string($nomarea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomarea, true), gettype($nomarea)), __LINE__);
        }
        $this->nomarea = $nomarea;
        
        return $this;
    }
}
