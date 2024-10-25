<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsasidepto StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsasidepto extends AbstractStructBase
{
    /**
     * The plengua
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $plengua = null;
    /**
     * The pcurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcurso = null;
    /**
     * The pcoddep
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcoddep = null;
    /**
     * The pcodest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodest = null;
    /**
     * The pcodarea
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodarea = null;
    /**
     * Constructor method for wsasidepto
     * @uses Wsasidepto::setPlengua()
     * @uses Wsasidepto::setPcurso()
     * @uses Wsasidepto::setPcoddep()
     * @uses Wsasidepto::setPcodest()
     * @uses Wsasidepto::setPcodarea()
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcoddep
     * @param string $pcodest
     * @param string $pcodarea
     */
    public function __construct(?string $plengua = null, ?string $pcurso = null, ?string $pcoddep = null, ?string $pcodest = null, ?string $pcodarea = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcurso($pcurso)
            ->setPcoddep($pcoddep)
            ->setPcodest($pcodest)
            ->setPcodarea($pcodarea);
    }
    /**
     * Get plengua value
     * @return string|null
     */
    public function getPlengua(): ?string
    {
        return $this->plengua;
    }
    /**
     * Set plengua value
     * @param string $plengua
     * @return \StructType\Wsasidepto
     */
    public function setPlengua(?string $plengua = null): self
    {
        // validation for constraint: string
        if (!is_null($plengua) && !is_string($plengua)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plengua, true), gettype($plengua)), __LINE__);
        }
        $this->plengua = $plengua;
        
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
     * @return \StructType\Wsasidepto
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
    /**
     * Get pcoddep value
     * @return string|null
     */
    public function getPcoddep(): ?string
    {
        return $this->pcoddep;
    }
    /**
     * Set pcoddep value
     * @param string $pcoddep
     * @return \StructType\Wsasidepto
     */
    public function setPcoddep(?string $pcoddep = null): self
    {
        // validation for constraint: string
        if (!is_null($pcoddep) && !is_string($pcoddep)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcoddep, true), gettype($pcoddep)), __LINE__);
        }
        $this->pcoddep = $pcoddep;
        
        return $this;
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
     * @return \StructType\Wsasidepto
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
     * Get pcodarea value
     * @return string|null
     */
    public function getPcodarea(): ?string
    {
        return $this->pcodarea;
    }
    /**
     * Set pcodarea value
     * @param string $pcodarea
     * @return \StructType\Wsasidepto
     */
    public function setPcodarea(?string $pcodarea = null): self
    {
        // validation for constraint: string
        if (!is_null($pcodarea) && !is_string($pcodarea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcodarea, true), gettype($pcodarea)), __LINE__);
        }
        $this->pcodarea = $pcodarea;
        
        return $this;
    }
}
