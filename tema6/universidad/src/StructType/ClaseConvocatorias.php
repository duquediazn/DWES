<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseConvocatorias StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseConvocatorias extends AbstractStructBase
{
    /**
     * The cod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cod = null;
    /**
     * The descripcion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descripcion = null;
    /**
     * Constructor method for ClaseConvocatorias
     * @uses ClaseConvocatorias::setCod()
     * @uses ClaseConvocatorias::setDescripcion()
     * @param string $cod
     * @param string $descripcion
     */
    public function __construct(?string $cod = null, ?string $descripcion = null)
    {
        $this
            ->setCod($cod)
            ->setDescripcion($descripcion);
    }
    /**
     * Get cod value
     * @return string|null
     */
    public function getCod(): ?string
    {
        return $this->cod;
    }
    /**
     * Set cod value
     * @param string $cod
     * @return \StructType\ClaseConvocatorias
     */
    public function setCod(?string $cod = null): self
    {
        // validation for constraint: string
        if (!is_null($cod) && !is_string($cod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cod, true), gettype($cod)), __LINE__);
        }
        $this->cod = $cod;
        
        return $this;
    }
    /**
     * Get descripcion value
     * @return string|null
     */
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }
    /**
     * Set descripcion value
     * @param string $descripcion
     * @return \StructType\ClaseConvocatorias
     */
    public function setDescripcion(?string $descripcion = null): self
    {
        // validation for constraint: string
        if (!is_null($descripcion) && !is_string($descripcion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcion, true), gettype($descripcion)), __LINE__);
        }
        $this->descripcion = $descripcion;
        
        return $this;
    }
}
