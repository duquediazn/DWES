<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseAsiDepto StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseAsiDepto extends AbstractStructBase
{
    /**
     * The codasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codasi = null;
    /**
     * The nomasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomasi = null;
    /**
     * The enlaceasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $enlaceasi = null;
    /**
     * The codest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codest = null;
    /**
     * The nomest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomest = null;
    /**
     * The cred_teoasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cred_teoasi = null;
    /**
     * The cred_prasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cred_prasi = null;
    /**
     * The cred_asignatura
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cred_asignatura = null;
    /**
     * The cred_no_presenciales
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cred_no_presenciales = null;
    /**
     * The cred_teodepare
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cred_teodepare = null;
    /**
     * The cred_pradepare
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cred_pradepare = null;
    /**
     * Constructor method for ClaseAsiDepto
     * @uses ClaseAsiDepto::setCodasi()
     * @uses ClaseAsiDepto::setNomasi()
     * @uses ClaseAsiDepto::setEnlaceasi()
     * @uses ClaseAsiDepto::setCodest()
     * @uses ClaseAsiDepto::setNomest()
     * @uses ClaseAsiDepto::setCred_teoasi()
     * @uses ClaseAsiDepto::setCred_prasi()
     * @uses ClaseAsiDepto::setCred_asignatura()
     * @uses ClaseAsiDepto::setCred_no_presenciales()
     * @uses ClaseAsiDepto::setCred_teodepare()
     * @uses ClaseAsiDepto::setCred_pradepare()
     * @param string $codasi
     * @param string $nomasi
     * @param string $enlaceasi
     * @param string $codest
     * @param string $nomest
     * @param string $cred_teoasi
     * @param string $cred_prasi
     * @param string $cred_asignatura
     * @param string $cred_no_presenciales
     * @param string $cred_teodepare
     * @param string $cred_pradepare
     */
    public function __construct(?string $codasi = null, ?string $nomasi = null, ?string $enlaceasi = null, ?string $codest = null, ?string $nomest = null, ?string $cred_teoasi = null, ?string $cred_prasi = null, ?string $cred_asignatura = null, ?string $cred_no_presenciales = null, ?string $cred_teodepare = null, ?string $cred_pradepare = null)
    {
        $this
            ->setCodasi($codasi)
            ->setNomasi($nomasi)
            ->setEnlaceasi($enlaceasi)
            ->setCodest($codest)
            ->setNomest($nomest)
            ->setCred_teoasi($cred_teoasi)
            ->setCred_prasi($cred_prasi)
            ->setCred_asignatura($cred_asignatura)
            ->setCred_no_presenciales($cred_no_presenciales)
            ->setCred_teodepare($cred_teodepare)
            ->setCred_pradepare($cred_pradepare);
    }
    /**
     * Get codasi value
     * @return string|null
     */
    public function getCodasi(): ?string
    {
        return $this->codasi;
    }
    /**
     * Set codasi value
     * @param string $codasi
     * @return \StructType\ClaseAsiDepto
     */
    public function setCodasi(?string $codasi = null): self
    {
        // validation for constraint: string
        if (!is_null($codasi) && !is_string($codasi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codasi, true), gettype($codasi)), __LINE__);
        }
        $this->codasi = $codasi;
        
        return $this;
    }
    /**
     * Get nomasi value
     * @return string|null
     */
    public function getNomasi(): ?string
    {
        return $this->nomasi;
    }
    /**
     * Set nomasi value
     * @param string $nomasi
     * @return \StructType\ClaseAsiDepto
     */
    public function setNomasi(?string $nomasi = null): self
    {
        // validation for constraint: string
        if (!is_null($nomasi) && !is_string($nomasi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomasi, true), gettype($nomasi)), __LINE__);
        }
        $this->nomasi = $nomasi;
        
        return $this;
    }
    /**
     * Get enlaceasi value
     * @return string|null
     */
    public function getEnlaceasi(): ?string
    {
        return $this->enlaceasi;
    }
    /**
     * Set enlaceasi value
     * @param string $enlaceasi
     * @return \StructType\ClaseAsiDepto
     */
    public function setEnlaceasi(?string $enlaceasi = null): self
    {
        // validation for constraint: string
        if (!is_null($enlaceasi) && !is_string($enlaceasi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enlaceasi, true), gettype($enlaceasi)), __LINE__);
        }
        $this->enlaceasi = $enlaceasi;
        
        return $this;
    }
    /**
     * Get codest value
     * @return string|null
     */
    public function getCodest(): ?string
    {
        return $this->codest;
    }
    /**
     * Set codest value
     * @param string $codest
     * @return \StructType\ClaseAsiDepto
     */
    public function setCodest(?string $codest = null): self
    {
        // validation for constraint: string
        if (!is_null($codest) && !is_string($codest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codest, true), gettype($codest)), __LINE__);
        }
        $this->codest = $codest;
        
        return $this;
    }
    /**
     * Get nomest value
     * @return string|null
     */
    public function getNomest(): ?string
    {
        return $this->nomest;
    }
    /**
     * Set nomest value
     * @param string $nomest
     * @return \StructType\ClaseAsiDepto
     */
    public function setNomest(?string $nomest = null): self
    {
        // validation for constraint: string
        if (!is_null($nomest) && !is_string($nomest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomest, true), gettype($nomest)), __LINE__);
        }
        $this->nomest = $nomest;
        
        return $this;
    }
    /**
     * Get cred_teoasi value
     * @return string|null
     */
    public function getCred_teoasi(): ?string
    {
        return $this->cred_teoasi;
    }
    /**
     * Set cred_teoasi value
     * @param string $cred_teoasi
     * @return \StructType\ClaseAsiDepto
     */
    public function setCred_teoasi(?string $cred_teoasi = null): self
    {
        // validation for constraint: string
        if (!is_null($cred_teoasi) && !is_string($cred_teoasi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cred_teoasi, true), gettype($cred_teoasi)), __LINE__);
        }
        $this->cred_teoasi = $cred_teoasi;
        
        return $this;
    }
    /**
     * Get cred_prasi value
     * @return string|null
     */
    public function getCred_prasi(): ?string
    {
        return $this->cred_prasi;
    }
    /**
     * Set cred_prasi value
     * @param string $cred_prasi
     * @return \StructType\ClaseAsiDepto
     */
    public function setCred_prasi(?string $cred_prasi = null): self
    {
        // validation for constraint: string
        if (!is_null($cred_prasi) && !is_string($cred_prasi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cred_prasi, true), gettype($cred_prasi)), __LINE__);
        }
        $this->cred_prasi = $cred_prasi;
        
        return $this;
    }
    /**
     * Get cred_asignatura value
     * @return string|null
     */
    public function getCred_asignatura(): ?string
    {
        return $this->cred_asignatura;
    }
    /**
     * Set cred_asignatura value
     * @param string $cred_asignatura
     * @return \StructType\ClaseAsiDepto
     */
    public function setCred_asignatura(?string $cred_asignatura = null): self
    {
        // validation for constraint: string
        if (!is_null($cred_asignatura) && !is_string($cred_asignatura)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cred_asignatura, true), gettype($cred_asignatura)), __LINE__);
        }
        $this->cred_asignatura = $cred_asignatura;
        
        return $this;
    }
    /**
     * Get cred_no_presenciales value
     * @return string|null
     */
    public function getCred_no_presenciales(): ?string
    {
        return $this->cred_no_presenciales;
    }
    /**
     * Set cred_no_presenciales value
     * @param string $cred_no_presenciales
     * @return \StructType\ClaseAsiDepto
     */
    public function setCred_no_presenciales(?string $cred_no_presenciales = null): self
    {
        // validation for constraint: string
        if (!is_null($cred_no_presenciales) && !is_string($cred_no_presenciales)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cred_no_presenciales, true), gettype($cred_no_presenciales)), __LINE__);
        }
        $this->cred_no_presenciales = $cred_no_presenciales;
        
        return $this;
    }
    /**
     * Get cred_teodepare value
     * @return string|null
     */
    public function getCred_teodepare(): ?string
    {
        return $this->cred_teodepare;
    }
    /**
     * Set cred_teodepare value
     * @param string $cred_teodepare
     * @return \StructType\ClaseAsiDepto
     */
    public function setCred_teodepare(?string $cred_teodepare = null): self
    {
        // validation for constraint: string
        if (!is_null($cred_teodepare) && !is_string($cred_teodepare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cred_teodepare, true), gettype($cred_teodepare)), __LINE__);
        }
        $this->cred_teodepare = $cred_teodepare;
        
        return $this;
    }
    /**
     * Get cred_pradepare value
     * @return string|null
     */
    public function getCred_pradepare(): ?string
    {
        return $this->cred_pradepare;
    }
    /**
     * Set cred_pradepare value
     * @param string $cred_pradepare
     * @return \StructType\ClaseAsiDepto
     */
    public function setCred_pradepare(?string $cred_pradepare = null): self
    {
        // validation for constraint: string
        if (!is_null($cred_pradepare) && !is_string($cred_pradepare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cred_pradepare, true), gettype($cred_pradepare)), __LINE__);
        }
        $this->cred_pradepare = $cred_pradepare;
        
        return $this;
    }
}
