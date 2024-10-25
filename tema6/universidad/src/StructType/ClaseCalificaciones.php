<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseCalificaciones StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseCalificaciones extends AbstractStructBase
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
     * The descripcionasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descripcionasi = null;
    /**
     * The ranmin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ranmin = null;
    /**
     * The ranmax
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ranmax = null;
    /**
     * Constructor method for ClaseCalificaciones
     * @uses ClaseCalificaciones::setCod()
     * @uses ClaseCalificaciones::setDescripcion()
     * @uses ClaseCalificaciones::setDescripcionasi()
     * @uses ClaseCalificaciones::setRanmin()
     * @uses ClaseCalificaciones::setRanmax()
     * @param string $cod
     * @param string $descripcion
     * @param string $descripcionasi
     * @param string $ranmin
     * @param string $ranmax
     */
    public function __construct(?string $cod = null, ?string $descripcion = null, ?string $descripcionasi = null, ?string $ranmin = null, ?string $ranmax = null)
    {
        $this
            ->setCod($cod)
            ->setDescripcion($descripcion)
            ->setDescripcionasi($descripcionasi)
            ->setRanmin($ranmin)
            ->setRanmax($ranmax);
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
     * @return \StructType\ClaseCalificaciones
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
     * @return \StructType\ClaseCalificaciones
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
    /**
     * Get descripcionasi value
     * @return string|null
     */
    public function getDescripcionasi(): ?string
    {
        return $this->descripcionasi;
    }
    /**
     * Set descripcionasi value
     * @param string $descripcionasi
     * @return \StructType\ClaseCalificaciones
     */
    public function setDescripcionasi(?string $descripcionasi = null): self
    {
        // validation for constraint: string
        if (!is_null($descripcionasi) && !is_string($descripcionasi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionasi, true), gettype($descripcionasi)), __LINE__);
        }
        $this->descripcionasi = $descripcionasi;
        
        return $this;
    }
    /**
     * Get ranmin value
     * @return string|null
     */
    public function getRanmin(): ?string
    {
        return $this->ranmin;
    }
    /**
     * Set ranmin value
     * @param string $ranmin
     * @return \StructType\ClaseCalificaciones
     */
    public function setRanmin(?string $ranmin = null): self
    {
        // validation for constraint: string
        if (!is_null($ranmin) && !is_string($ranmin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ranmin, true), gettype($ranmin)), __LINE__);
        }
        $this->ranmin = $ranmin;
        
        return $this;
    }
    /**
     * Get ranmax value
     * @return string|null
     */
    public function getRanmax(): ?string
    {
        return $this->ranmax;
    }
    /**
     * Set ranmax value
     * @param string $ranmax
     * @return \StructType\ClaseCalificaciones
     */
    public function setRanmax(?string $ranmax = null): self
    {
        // validation for constraint: string
        if (!is_null($ranmax) && !is_string($ranmax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ranmax, true), gettype($ranmax)), __LINE__);
        }
        $this->ranmax = $ranmax;
        
        return $this;
    }
}
