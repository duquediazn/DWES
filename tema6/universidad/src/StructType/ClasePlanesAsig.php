<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClasePlanesAsig StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClasePlanesAsig extends AbstractStructBase
{
    /**
     * The curso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $curso = null;
    /**
     * The asignatura
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $asignatura = null;
    /**
     * The codplan
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codplan = null;
    /**
     * The nomplan
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomplan = null;
    /**
     * The codcen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codcen = null;
    /**
     * Constructor method for ClasePlanesAsig
     * @uses ClasePlanesAsig::setCurso()
     * @uses ClasePlanesAsig::setAsignatura()
     * @uses ClasePlanesAsig::setCodplan()
     * @uses ClasePlanesAsig::setNomplan()
     * @uses ClasePlanesAsig::setCodcen()
     * @param string $curso
     * @param string $asignatura
     * @param string $codplan
     * @param string $nomplan
     * @param string $codcen
     */
    public function __construct(?string $curso = null, ?string $asignatura = null, ?string $codplan = null, ?string $nomplan = null, ?string $codcen = null)
    {
        $this
            ->setCurso($curso)
            ->setAsignatura($asignatura)
            ->setCodplan($codplan)
            ->setNomplan($nomplan)
            ->setCodcen($codcen);
    }
    /**
     * Get curso value
     * @return string|null
     */
    public function getCurso(): ?string
    {
        return $this->curso;
    }
    /**
     * Set curso value
     * @param string $curso
     * @return \StructType\ClasePlanesAsig
     */
    public function setCurso(?string $curso = null): self
    {
        // validation for constraint: string
        if (!is_null($curso) && !is_string($curso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($curso, true), gettype($curso)), __LINE__);
        }
        $this->curso = $curso;
        
        return $this;
    }
    /**
     * Get asignatura value
     * @return string|null
     */
    public function getAsignatura(): ?string
    {
        return $this->asignatura;
    }
    /**
     * Set asignatura value
     * @param string $asignatura
     * @return \StructType\ClasePlanesAsig
     */
    public function setAsignatura(?string $asignatura = null): self
    {
        // validation for constraint: string
        if (!is_null($asignatura) && !is_string($asignatura)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asignatura, true), gettype($asignatura)), __LINE__);
        }
        $this->asignatura = $asignatura;
        
        return $this;
    }
    /**
     * Get codplan value
     * @return string|null
     */
    public function getCodplan(): ?string
    {
        return $this->codplan;
    }
    /**
     * Set codplan value
     * @param string $codplan
     * @return \StructType\ClasePlanesAsig
     */
    public function setCodplan(?string $codplan = null): self
    {
        // validation for constraint: string
        if (!is_null($codplan) && !is_string($codplan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codplan, true), gettype($codplan)), __LINE__);
        }
        $this->codplan = $codplan;
        
        return $this;
    }
    /**
     * Get nomplan value
     * @return string|null
     */
    public function getNomplan(): ?string
    {
        return $this->nomplan;
    }
    /**
     * Set nomplan value
     * @param string $nomplan
     * @return \StructType\ClasePlanesAsig
     */
    public function setNomplan(?string $nomplan = null): self
    {
        // validation for constraint: string
        if (!is_null($nomplan) && !is_string($nomplan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomplan, true), gettype($nomplan)), __LINE__);
        }
        $this->nomplan = $nomplan;
        
        return $this;
    }
    /**
     * Get codcen value
     * @return string|null
     */
    public function getCodcen(): ?string
    {
        return $this->codcen;
    }
    /**
     * Set codcen value
     * @param string $codcen
     * @return \StructType\ClasePlanesAsig
     */
    public function setCodcen(?string $codcen = null): self
    {
        // validation for constraint: string
        if (!is_null($codcen) && !is_string($codcen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codcen, true), gettype($codcen)), __LINE__);
        }
        $this->codcen = $codcen;
        
        return $this;
    }
}
