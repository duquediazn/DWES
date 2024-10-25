<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsreqidiomab1plan StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsreqidiomab1plan extends AbstractStructBase
{
    /**
     * The pcodest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodest = null;
    /**
     * The pcodasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodasi = null;
    /**
     * The pcurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcurso = null;
    /**
     * Constructor method for wsreqidiomab1plan
     * @uses Wsreqidiomab1plan::setPcodest()
     * @uses Wsreqidiomab1plan::setPcodasi()
     * @uses Wsreqidiomab1plan::setPcurso()
     * @param string $pcodest
     * @param string $pcodasi
     * @param string $pcurso
     */
    public function __construct(?string $pcodest = null, ?string $pcodasi = null, ?string $pcurso = null)
    {
        $this
            ->setPcodest($pcodest)
            ->setPcodasi($pcodasi)
            ->setPcurso($pcurso);
    }
    /**
     * Get pcodest value
     * @return string|null
     */
    public function getPcodest(): ?string
    {
        return $this->pcodest;
    }
    /**
     * Set pcodest value
     * @param string $pcodest
     * @return \StructType\Wsreqidiomab1plan
     */
    public function setPcodest(?string $pcodest = null): self
    {
        // validation for constraint: string
        if (!is_null($pcodest) && !is_string($pcodest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcodest, true), gettype($pcodest)), __LINE__);
        }
        $this->pcodest = $pcodest;
        
        return $this;
    }
    /**
     * Get pcodasi value
     * @return string|null
     */
    public function getPcodasi(): ?string
    {
        return $this->pcodasi;
    }
    /**
     * Set pcodasi value
     * @param string $pcodasi
     * @return \StructType\Wsreqidiomab1plan
     */
    public function setPcodasi(?string $pcodasi = null): self
    {
        // validation for constraint: string
        if (!is_null($pcodasi) && !is_string($pcodasi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcodasi, true), gettype($pcodasi)), __LINE__);
        }
        $this->pcodasi = $pcodasi;
        
        return $this;
    }
    /**
     * Get pcurso value
     * @return string|null
     */
    public function getPcurso(): ?string
    {
        return $this->pcurso;
    }
    /**
     * Set pcurso value
     * @param string $pcurso
     * @return \StructType\Wsreqidiomab1plan
     */
    public function setPcurso(?string $pcurso = null): self
    {
        // validation for constraint: string
        if (!is_null($pcurso) && !is_string($pcurso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcurso, true), gettype($pcurso)), __LINE__);
        }
        $this->pcurso = $pcurso;
        
        return $this;
    }
}
