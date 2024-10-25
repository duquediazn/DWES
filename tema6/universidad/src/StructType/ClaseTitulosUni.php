<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseTitulosUni StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseTitulosUni extends AbstractStructBase
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
     * The tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tipo = null;
    /**
     * The area
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $area = null;
    /**
     * The url
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * The imagen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $imagen = null;
    /**
     * Constructor method for ClaseTitulosUni
     * @uses ClaseTitulosUni::setCodigo()
     * @uses ClaseTitulosUni::setNombre()
     * @uses ClaseTitulosUni::setTipo()
     * @uses ClaseTitulosUni::setArea()
     * @uses ClaseTitulosUni::setUrl()
     * @uses ClaseTitulosUni::setImagen()
     * @param string $codigo
     * @param string $nombre
     * @param string $tipo
     * @param string $area
     * @param string $url
     * @param string $imagen
     */
    public function __construct(?string $codigo = null, ?string $nombre = null, ?string $tipo = null, ?string $area = null, ?string $url = null, ?string $imagen = null)
    {
        $this
            ->setCodigo($codigo)
            ->setNombre($nombre)
            ->setTipo($tipo)
            ->setArea($area)
            ->setUrl($url)
            ->setImagen($imagen);
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
     * @return \StructType\ClaseTitulosUni
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
     * @return \StructType\ClaseTitulosUni
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
     * Get tipo value
     * @return string|null
     */
    public function getTipo(): ?string
    {
        return $this->tipo;
    }
    /**
     * Set tipo value
     * @param string $tipo
     * @return \StructType\ClaseTitulosUni
     */
    public function setTipo(?string $tipo = null): self
    {
        // validation for constraint: string
        if (!is_null($tipo) && !is_string($tipo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipo, true), gettype($tipo)), __LINE__);
        }
        $this->tipo = $tipo;
        
        return $this;
    }
    /**
     * Get area value
     * @return string|null
     */
    public function getArea(): ?string
    {
        return $this->area;
    }
    /**
     * Set area value
     * @param string $area
     * @return \StructType\ClaseTitulosUni
     */
    public function setArea(?string $area = null): self
    {
        // validation for constraint: string
        if (!is_null($area) && !is_string($area)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($area, true), gettype($area)), __LINE__);
        }
        $this->area = $area;
        
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \StructType\ClaseTitulosUni
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        
        return $this;
    }
    /**
     * Get imagen value
     * @return string|null
     */
    public function getImagen(): ?string
    {
        return $this->imagen;
    }
    /**
     * Set imagen value
     * @param string $imagen
     * @return \StructType\ClaseTitulosUni
     */
    public function setImagen(?string $imagen = null): self
    {
        // validation for constraint: string
        if (!is_null($imagen) && !is_string($imagen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imagen, true), gettype($imagen)), __LINE__);
        }
        $this->imagen = $imagen;
        
        return $this;
    }
}
