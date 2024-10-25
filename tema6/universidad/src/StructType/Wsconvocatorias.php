<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsconvocatorias StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsconvocatorias extends AbstractStructBase
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
     * The pcodasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodasi = null;
    /**
     * The pidgrupo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pidgrupo = null;
    /**
     * Constructor method for wsconvocatorias
     * @uses Wsconvocatorias::setPlengua()
     * @uses Wsconvocatorias::setPcurso()
     * @uses Wsconvocatorias::setPcodasi()
     * @uses Wsconvocatorias::setPidgrupo()
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcodasi
     * @param string $pidgrupo
     */
    public function __construct(?string $plengua = null, ?string $pcurso = null, ?string $pcodasi = null, ?string $pidgrupo = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcurso($pcurso)
            ->setPcodasi($pcodasi)
            ->setPidgrupo($pidgrupo);
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
     * @return \StructType\Wsconvocatorias
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
     * @return \StructType\Wsconvocatorias
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
     * @return \StructType\Wsconvocatorias
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
     * Get pidgrupo value
     * @return string|null
     */
    public function getPidgrupo(): ?string
    {
        return $this->pidgrupo;
    }
    /**
     * Set pidgrupo value
     * @param string $pidgrupo
     * @return \StructType\Wsconvocatorias
     */
    public function setPidgrupo(?string $pidgrupo = null): self
    {
        // validation for constraint: string
        if (!is_null($pidgrupo) && !is_string($pidgrupo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pidgrupo, true), gettype($pidgrupo)), __LINE__);
        }
        $this->pidgrupo = $pidgrupo;
        
        return $this;
    }
}
