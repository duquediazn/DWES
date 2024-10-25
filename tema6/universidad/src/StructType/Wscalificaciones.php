<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wscalificaciones StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wscalificaciones extends AbstractStructBase
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
     * The pcodasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodasi = null;
    /**
     * Constructor method for wscalificaciones
     * @uses Wscalificaciones::setPlengua()
     * @uses Wscalificaciones::setPcodasi()
     * @param string $plengua
     * @param string $pcodasi
     */
    public function __construct(?string $plengua = null, ?string $pcodasi = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcodasi($pcodasi);
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
     * @return \StructType\Wscalificaciones
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
     * @return \StructType\Wscalificaciones
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
}
