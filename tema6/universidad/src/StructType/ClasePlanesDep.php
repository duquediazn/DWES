<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClasePlanesDep StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClasePlanesDep extends AbstractStructBase
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
     * The coddep
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $coddep = null;
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
     * Constructor method for ClasePlanesDep
     * @uses ClasePlanesDep::setCurso()
     * @uses ClasePlanesDep::setCoddep()
     * @uses ClasePlanesDep::setCodplan()
     * @uses ClasePlanesDep::setNomplan()
     * @param string $curso
     * @param string $coddep
     * @param string $codplan
     * @param string $nomplan
     */
    public function __construct(?string $curso = null, ?string $coddep = null, ?string $codplan = null, ?string $nomplan = null)
    {
        $this
            ->setCurso($curso)
            ->setCoddep($coddep)
            ->setCodplan($codplan)
            ->setNomplan($nomplan);
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
     * @return \StructType\ClasePlanesDep
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
     * Get coddep value
     * @return string|null
     */
    public function getCoddep(): ?string
    {
        return $this->coddep;
    }
    /**
     * Set coddep value
     * @param string $coddep
     * @return \StructType\ClasePlanesDep
     */
    public function setCoddep(?string $coddep = null): self
    {
        // validation for constraint: string
        if (!is_null($coddep) && !is_string($coddep)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coddep, true), gettype($coddep)), __LINE__);
        }
        $this->coddep = $coddep;
        
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
     * @return \StructType\ClasePlanesDep
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
     * @return \StructType\ClasePlanesDep
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
}
