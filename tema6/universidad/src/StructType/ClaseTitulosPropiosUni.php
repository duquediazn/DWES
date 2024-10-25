<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseTitulosPropiosUni StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseTitulosPropiosUni extends AbstractStructBase
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
     * The tipocurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tipocurso = null;
    /**
     * The desctipocurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $desctipocurso = null;
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
     * Constructor method for ClaseTitulosPropiosUni
     * @uses ClaseTitulosPropiosUni::setCodigo()
     * @uses ClaseTitulosPropiosUni::setNombre()
     * @uses ClaseTitulosPropiosUni::setTipocurso()
     * @uses ClaseTitulosPropiosUni::setDesctipocurso()
     * @uses ClaseTitulosPropiosUni::setUrl()
     * @uses ClaseTitulosPropiosUni::setImagen()
     * @param string $codigo
     * @param string $nombre
     * @param string $tipocurso
     * @param string $desctipocurso
     * @param string $url
     * @param string $imagen
     */
    public function __construct(?string $codigo = null, ?string $nombre = null, ?string $tipocurso = null, ?string $desctipocurso = null, ?string $url = null, ?string $imagen = null)
    {
        $this
            ->setCodigo($codigo)
            ->setNombre($nombre)
            ->setTipocurso($tipocurso)
            ->setDesctipocurso($desctipocurso)
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
     * @return \StructType\ClaseTitulosPropiosUni
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
     * @return \StructType\ClaseTitulosPropiosUni
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
     * Get tipocurso value
     * @return string|null
     */
    public function getTipocurso(): ?string
    {
        return $this->tipocurso;
    }
    /**
     * Set tipocurso value
     * @param string $tipocurso
     * @return \StructType\ClaseTitulosPropiosUni
     */
    public function setTipocurso(?string $tipocurso = null): self
    {
        // validation for constraint: string
        if (!is_null($tipocurso) && !is_string($tipocurso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipocurso, true), gettype($tipocurso)), __LINE__);
        }
        $this->tipocurso = $tipocurso;
        
        return $this;
    }
    /**
     * Get desctipocurso value
     * @return string|null
     */
    public function getDesctipocurso(): ?string
    {
        return $this->desctipocurso;
    }
    /**
     * Set desctipocurso value
     * @param string $desctipocurso
     * @return \StructType\ClaseTitulosPropiosUni
     */
    public function setDesctipocurso(?string $desctipocurso = null): self
    {
        // validation for constraint: string
        if (!is_null($desctipocurso) && !is_string($desctipocurso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desctipocurso, true), gettype($desctipocurso)), __LINE__);
        }
        $this->desctipocurso = $desctipocurso;
        
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
     * @return \StructType\ClaseTitulosPropiosUni
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
     * @return \StructType\ClaseTitulosPropiosUni
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
