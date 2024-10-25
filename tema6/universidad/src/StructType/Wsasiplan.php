<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsasiplan StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsasiplan extends AbstractStructBase
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
     * The pcodest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodest = null;
    /**
     * Constructor method for wsasiplan
     * @uses Wsasiplan::setPlengua()
     * @uses Wsasiplan::setPcurso()
     * @uses Wsasiplan::setPcodest()
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcodest
     */
    public function __construct(?string $plengua = null, ?string $pcurso = null, ?string $pcodest = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcurso($pcurso)
            ->setPcodest($pcodest);
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
     * @return \StructType\Wsasiplan
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
     * @return \StructType\Wsasiplan
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
     * @return \StructType\Wsasiplan
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
}
