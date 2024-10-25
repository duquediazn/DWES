<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseDptoAsig StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseDptoAsig extends AbstractStructBase
{
    /**
     * The codigo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codigo = null;
    /**
     * The nombre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nombre = null;
    /**
     * The responsable
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $responsable = null;
    /**
     * The porcentaje
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $porcentaje = null;
    /**
     * Constructor method for ClaseDptoAsig
     * @uses ClaseDptoAsig::setCodigo()
     * @uses ClaseDptoAsig::setNombre()
     * @uses ClaseDptoAsig::setResponsable()
     * @uses ClaseDptoAsig::setPorcentaje()
     * @param string $codigo
     * @param string $nombre
     * @param string $responsable
     * @param string $porcentaje
     */
    public function __construct(?string $codigo = null, ?string $nombre = null, ?string $responsable = null, ?string $porcentaje = null)
    {
        $this
            ->setCodigo($codigo)
            ->setNombre($nombre)
            ->setResponsable($responsable)
            ->setPorcentaje($porcentaje);
    }
    /**
     * Get codigo value
     * @return string|null
     */
    public function getCodigo(): ?string
    {
        return $this->codigo;
    }
    /**
     * Set codigo value
     * @param string $codigo
     * @return \StructType\ClaseDptoAsig
     */
    public function setCodigo(?string $codigo = null): self
    {
        // validation for constraint: string
        if (!is_null($codigo) && !is_string($codigo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigo, true), gettype($codigo)), __LINE__);
        }
        $this->codigo = $codigo;
        
        return $this;
    }
    /**
     * Get nombre value
     * @return string|null
     */
    public function getNombre(): ?string
    {
        return $this->nombre;
    }
    /**
     * Set nombre value
     * @param string $nombre
     * @return \StructType\ClaseDptoAsig
     */
    public function setNombre(?string $nombre = null): self
    {
        // validation for constraint: string
        if (!is_null($nombre) && !is_string($nombre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombre, true), gettype($nombre)), __LINE__);
        }
        $this->nombre = $nombre;
        
        return $this;
    }
    /**
     * Get responsable value
     * @return string|null
     */
    public function getResponsable(): ?string
    {
        return $this->responsable;
    }
    /**
     * Set responsable value
     * @param string $responsable
     * @return \StructType\ClaseDptoAsig
     */
    public function setResponsable(?string $responsable = null): self
    {
        // validation for constraint: string
        if (!is_null($responsable) && !is_string($responsable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responsable, true), gettype($responsable)), __LINE__);
        }
        $this->responsable = $responsable;
        
        return $this;
    }
    /**
     * Get porcentaje value
     * @return string|null
     */
    public function getPorcentaje(): ?string
    {
        return $this->porcentaje;
    }
    /**
     * Set porcentaje value
     * @param string $porcentaje
     * @return \StructType\ClaseDptoAsig
     */
    public function setPorcentaje(?string $porcentaje = null): self
    {
        // validation for constraint: string
        if (!is_null($porcentaje) && !is_string($porcentaje)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($porcentaje, true), gettype($porcentaje)), __LINE__);
        }
        $this->porcentaje = $porcentaje;
        
        return $this;
    }
}
