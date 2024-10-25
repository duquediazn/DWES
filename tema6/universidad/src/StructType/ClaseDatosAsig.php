<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseDatosAsig StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseDatosAsig extends AbstractStructBase
{
    /**
     * The caca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $caca = null;
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
     * The nomasicorto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomasicorto = null;
    /**
     * The crdtsteo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crdtsteo = null;
    /**
     * The crdtspra
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crdtspra = null;
    /**
     * The crdtects
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crdtects = null;
    /**
     * The duracion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $duracion = null;
    /**
     * The duracion_codalf
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $duracion_codalf = null;
    /**
     * The tfg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tfg = null;
    /**
     * The programa
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $programa = null;
    /**
     * Constructor method for ClaseDatosAsig
     * @uses ClaseDatosAsig::setCaca()
     * @uses ClaseDatosAsig::setCodasi()
     * @uses ClaseDatosAsig::setNomasi()
     * @uses ClaseDatosAsig::setNomasicorto()
     * @uses ClaseDatosAsig::setCrdtsteo()
     * @uses ClaseDatosAsig::setCrdtspra()
     * @uses ClaseDatosAsig::setCrdtects()
     * @uses ClaseDatosAsig::setDuracion()
     * @uses ClaseDatosAsig::setDuracion_codalf()
     * @uses ClaseDatosAsig::setTfg()
     * @uses ClaseDatosAsig::setPrograma()
     * @param string $caca
     * @param string $codasi
     * @param string $nomasi
     * @param string $nomasicorto
     * @param string $crdtsteo
     * @param string $crdtspra
     * @param string $crdtects
     * @param string $duracion
     * @param string $duracion_codalf
     * @param string $tfg
     * @param string $programa
     */
    public function __construct(?string $caca = null, ?string $codasi = null, ?string $nomasi = null, ?string $nomasicorto = null, ?string $crdtsteo = null, ?string $crdtspra = null, ?string $crdtects = null, ?string $duracion = null, ?string $duracion_codalf = null, ?string $tfg = null, ?string $programa = null)
    {
        $this
            ->setCaca($caca)
            ->setCodasi($codasi)
            ->setNomasi($nomasi)
            ->setNomasicorto($nomasicorto)
            ->setCrdtsteo($crdtsteo)
            ->setCrdtspra($crdtspra)
            ->setCrdtects($crdtects)
            ->setDuracion($duracion)
            ->setDuracion_codalf($duracion_codalf)
            ->setTfg($tfg)
            ->setPrograma($programa);
    }
    /**
     * Get caca value
     * @return string|null
     */
    public function getCaca(): ?string
    {
        return $this->caca;
    }
    /**
     * Set caca value
     * @param string $caca
     * @return \StructType\ClaseDatosAsig
     */
    public function setCaca(?string $caca = null): self
    {
        // validation for constraint: string
        if (!is_null($caca) && !is_string($caca)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($caca, true), gettype($caca)), __LINE__);
        }
        $this->caca = $caca;
        
        return $this;
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
     * @return \StructType\ClaseDatosAsig
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
     * @return \StructType\ClaseDatosAsig
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
     * Get nomasicorto value
     * @return string|null
     */
    public function getNomasicorto(): ?string
    {
        return $this->nomasicorto;
    }
    /**
     * Set nomasicorto value
     * @param string $nomasicorto
     * @return \StructType\ClaseDatosAsig
     */
    public function setNomasicorto(?string $nomasicorto = null): self
    {
        // validation for constraint: string
        if (!is_null($nomasicorto) && !is_string($nomasicorto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomasicorto, true), gettype($nomasicorto)), __LINE__);
        }
        $this->nomasicorto = $nomasicorto;
        
        return $this;
    }
    /**
     * Get crdtsteo value
     * @return string|null
     */
    public function getCrdtsteo(): ?string
    {
        return $this->crdtsteo;
    }
    /**
     * Set crdtsteo value
     * @param string $crdtsteo
     * @return \StructType\ClaseDatosAsig
     */
    public function setCrdtsteo(?string $crdtsteo = null): self
    {
        // validation for constraint: string
        if (!is_null($crdtsteo) && !is_string($crdtsteo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crdtsteo, true), gettype($crdtsteo)), __LINE__);
        }
        $this->crdtsteo = $crdtsteo;
        
        return $this;
    }
    /**
     * Get crdtspra value
     * @return string|null
     */
    public function getCrdtspra(): ?string
    {
        return $this->crdtspra;
    }
    /**
     * Set crdtspra value
     * @param string $crdtspra
     * @return \StructType\ClaseDatosAsig
     */
    public function setCrdtspra(?string $crdtspra = null): self
    {
        // validation for constraint: string
        if (!is_null($crdtspra) && !is_string($crdtspra)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crdtspra, true), gettype($crdtspra)), __LINE__);
        }
        $this->crdtspra = $crdtspra;
        
        return $this;
    }
    /**
     * Get crdtects value
     * @return string|null
     */
    public function getCrdtects(): ?string
    {
        return $this->crdtects;
    }
    /**
     * Set crdtects value
     * @param string $crdtects
     * @return \StructType\ClaseDatosAsig
     */
    public function setCrdtects(?string $crdtects = null): self
    {
        // validation for constraint: string
        if (!is_null($crdtects) && !is_string($crdtects)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crdtects, true), gettype($crdtects)), __LINE__);
        }
        $this->crdtects = $crdtects;
        
        return $this;
    }
    /**
     * Get duracion value
     * @return string|null
     */
    public function getDuracion(): ?string
    {
        return $this->duracion;
    }
    /**
     * Set duracion value
     * @param string $duracion
     * @return \StructType\ClaseDatosAsig
     */
    public function setDuracion(?string $duracion = null): self
    {
        // validation for constraint: string
        if (!is_null($duracion) && !is_string($duracion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duracion, true), gettype($duracion)), __LINE__);
        }
        $this->duracion = $duracion;
        
        return $this;
    }
    /**
     * Get duracion_codalf value
     * @return string|null
     */
    public function getDuracion_codalf(): ?string
    {
        return $this->duracion_codalf;
    }
    /**
     * Set duracion_codalf value
     * @param string $duracion_codalf
     * @return \StructType\ClaseDatosAsig
     */
    public function setDuracion_codalf(?string $duracion_codalf = null): self
    {
        // validation for constraint: string
        if (!is_null($duracion_codalf) && !is_string($duracion_codalf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duracion_codalf, true), gettype($duracion_codalf)), __LINE__);
        }
        $this->duracion_codalf = $duracion_codalf;
        
        return $this;
    }
    /**
     * Get tfg value
     * @return string|null
     */
    public function getTfg(): ?string
    {
        return $this->tfg;
    }
    /**
     * Set tfg value
     * @param string $tfg
     * @return \StructType\ClaseDatosAsig
     */
    public function setTfg(?string $tfg = null): self
    {
        // validation for constraint: string
        if (!is_null($tfg) && !is_string($tfg)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tfg, true), gettype($tfg)), __LINE__);
        }
        $this->tfg = $tfg;
        
        return $this;
    }
    /**
     * Get programa value
     * @return string|null
     */
    public function getPrograma(): ?string
    {
        return $this->programa;
    }
    /**
     * Set programa value
     * @param string $programa
     * @return \StructType\ClaseDatosAsig
     */
    public function setPrograma(?string $programa = null): self
    {
        // validation for constraint: string
        if (!is_null($programa) && !is_string($programa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($programa, true), gettype($programa)), __LINE__);
        }
        $this->programa = $programa;
        
        return $this;
    }
}
