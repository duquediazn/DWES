<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsfechaexamenesasinue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsfechaexamenesasinue extends AbstractStructBase
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
     * The pcodconv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodconv = null;
    /**
     * The porden
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $porden = null;
    /**
     * Constructor method for wsfechaexamenesasinue
     * @uses Wsfechaexamenesasinue::setPlengua()
     * @uses Wsfechaexamenesasinue::setPcurso()
     * @uses Wsfechaexamenesasinue::setPcodasi()
     * @uses Wsfechaexamenesasinue::setPcodconv()
     * @uses Wsfechaexamenesasinue::setPorden()
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcodasi
     * @param string $pcodconv
     * @param string $porden
     */
    public function __construct(?string $plengua = null, ?string $pcurso = null, ?string $pcodasi = null, ?string $pcodconv = null, ?string $porden = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcurso($pcurso)
            ->setPcodasi($pcodasi)
            ->setPcodconv($pcodconv)
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
     * @return \StructType\Wsfechaexamenesasinue
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
     * @return \StructType\Wsfechaexamenesasinue
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
     * @return \StructType\Wsfechaexamenesasinue
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
     * Get pcodconv value
     * @return string|null
     */
    public function getPcodconv(): ?string
    {
        return $this->pcodconv;
    }
    /**
     * Set pcodconv value
     * @param string $pcodconv
     * @return \StructType\Wsfechaexamenesasinue
     */
    public function setPcodconv(?string $pcodconv = null): self
    {
        // validation for constraint: string
        if (!is_null($pcodconv) && !is_string($pcodconv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcodconv, true), gettype($pcodconv)), __LINE__);
        }
        $this->pcodconv = $pcodconv;
        
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
     * @return \StructType\Wsfechaexamenesasinue
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
