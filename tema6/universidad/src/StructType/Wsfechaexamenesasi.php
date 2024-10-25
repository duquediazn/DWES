<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsfechaexamenesasi StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsfechaexamenesasi extends AbstractStructBase
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
     * The pcodest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodest = null;
    /**
     * The pcurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcurso = null;
    /**
     * The pcodasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodasi = null;
    /**
     * The pcodconvoc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodconvoc = null;
    /**
     * The porden
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $porden = null;
    /**
     * Constructor method for wsfechaexamenesasi
     * @uses Wsfechaexamenesasi::setPlengua()
     * @uses Wsfechaexamenesasi::setPcodest()
     * @uses Wsfechaexamenesasi::setPcurso()
     * @uses Wsfechaexamenesasi::setPcodasi()
     * @uses Wsfechaexamenesasi::setPcodconvoc()
     * @uses Wsfechaexamenesasi::setPorden()
     * @param string $plengua
     * @param string $pcodest
     * @param string $pcurso
     * @param string $pcodasi
     * @param string $pcodconvoc
     * @param string $porden
     */
    public function __construct(?string $plengua = null, ?string $pcodest = null, ?string $pcurso = null, ?string $pcodasi = null, ?string $pcodconvoc = null, ?string $porden = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcodest($pcodest)
            ->setPcurso($pcurso)
            ->setPcodasi($pcodasi)
            ->setPcodconvoc($pcodconvoc)
            ->setPorden($porden);
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
     * @return \StructType\Wsfechaexamenesasi
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
     * @return \StructType\Wsfechaexamenesasi
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
     * @return \StructType\Wsfechaexamenesasi
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
     * @return \StructType\Wsfechaexamenesasi
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
     * Get pcodconvoc value
     * @return string|null
     */
    public function getPcodconvoc(): ?string
    {
        return $this->pcodconvoc;
    }
    /**
     * Set pcodconvoc value
     * @param string $pcodconvoc
     * @return \StructType\Wsfechaexamenesasi
     */
    public function setPcodconvoc(?string $pcodconvoc = null): self
    {
        // validation for constraint: string
        if (!is_null($pcodconvoc) && !is_string($pcodconvoc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcodconvoc, true), gettype($pcodconvoc)), __LINE__);
        }
        $this->pcodconvoc = $pcodconvoc;
        
        return $this;
    }
    /**
     * Get porden value
     * @return string|null
     */
    public function getPorden(): ?string
    {
        return $this->porden;
    }
    /**
     * Set porden value
     * @param string $porden
     * @return \StructType\Wsfechaexamenesasi
     */
    public function setPorden(?string $porden = null): self
    {
        // validation for constraint: string
        if (!is_null($porden) && !is_string($porden)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($porden, true), gettype($porden)), __LINE__);
        }
        $this->porden = $porden;
        
        return $this;
    }
}
