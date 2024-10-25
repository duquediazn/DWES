<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseDatosPlan StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseDatosPlan extends AbstractStructBase
{
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
     * The codestgen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codestgen = null;
    /**
     * The nomestgen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomestgen = null;
    /**
     * The tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tipo = null;
    /**
     * The subtipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $subtipo = null;
    /**
     * The subtiponombre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $subtiponombre = null;
    /**
     * The codcen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codcen = null;
    /**
     * The nomcen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomcen = null;
    /**
     * The anoini
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $anoini = null;
    /**
     * The anofin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $anofin = null;
    /**
     * The codruct
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codruct = null;
    /**
     * The ncursos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ncursos = null;
    /**
     * The tipogra
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tipogra = null;
    /**
     * The area
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $area = null;
    /**
     * The urlmovil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $urlmovil = null;
    /**
     * The imagenmovil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $imagenmovil = null;
    /**
     * Constructor method for ClaseDatosPlan
     * @uses ClaseDatosPlan::setCodest()
     * @uses ClaseDatosPlan::setNomest()
     * @uses ClaseDatosPlan::setCodestgen()
     * @uses ClaseDatosPlan::setNomestgen()
     * @uses ClaseDatosPlan::setTipo()
     * @uses ClaseDatosPlan::setSubtipo()
     * @uses ClaseDatosPlan::setSubtiponombre()
     * @uses ClaseDatosPlan::setCodcen()
     * @uses ClaseDatosPlan::setNomcen()
     * @uses ClaseDatosPlan::setAnoini()
     * @uses ClaseDatosPlan::setAnofin()
     * @uses ClaseDatosPlan::setCodruct()
     * @uses ClaseDatosPlan::setNcursos()
     * @uses ClaseDatosPlan::setTipogra()
     * @uses ClaseDatosPlan::setArea()
     * @uses ClaseDatosPlan::setUrlmovil()
     * @uses ClaseDatosPlan::setImagenmovil()
     * @param string $codest
     * @param string $nomest
     * @param string $codestgen
     * @param string $nomestgen
     * @param string $tipo
     * @param string $subtipo
     * @param string $subtiponombre
     * @param string $codcen
     * @param string $nomcen
     * @param string $anoini
     * @param string $anofin
     * @param string $codruct
     * @param string $ncursos
     * @param string $tipogra
     * @param string $area
     * @param string $urlmovil
     * @param string $imagenmovil
     */
    public function __construct(?string $codest = null, ?string $nomest = null, ?string $codestgen = null, ?string $nomestgen = null, ?string $tipo = null, ?string $subtipo = null, ?string $subtiponombre = null, ?string $codcen = null, ?string $nomcen = null, ?string $anoini = null, ?string $anofin = null, ?string $codruct = null, ?string $ncursos = null, ?string $tipogra = null, ?string $area = null, ?string $urlmovil = null, ?string $imagenmovil = null)
    {
        $this
            ->setCodest($codest)
            ->setNomest($nomest)
            ->setCodestgen($codestgen)
            ->setNomestgen($nomestgen)
            ->setTipo($tipo)
            ->setSubtipo($subtipo)
            ->setSubtiponombre($subtiponombre)
            ->setCodcen($codcen)
            ->setNomcen($nomcen)
            ->setAnoini($anoini)
            ->setAnofin($anofin)
            ->setCodruct($codruct)
            ->setNcursos($ncursos)
            ->setTipogra($tipogra)
            ->setArea($area)
            ->setUrlmovil($urlmovil)
            ->setImagenmovil($imagenmovil);
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
     * @return \StructType\ClaseDatosPlan
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
     * @return \StructType\ClaseDatosPlan
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
     * Get codestgen value
     * @return string|null
     */
    public function getCodestgen(): ?string
    {
        return $this->codestgen;
    }
    /**
     * Set codestgen value
     * @param string $codestgen
     * @return \StructType\ClaseDatosPlan
     */
    public function setCodestgen(?string $codestgen = null): self
    {
        // validation for constraint: string
        if (!is_null($codestgen) && !is_string($codestgen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codestgen, true), gettype($codestgen)), __LINE__);
        }
        $this->codestgen = $codestgen;
        
        return $this;
    }
    /**
     * Get nomestgen value
     * @return string|null
     */
    public function getNomestgen(): ?string
    {
        return $this->nomestgen;
    }
    /**
     * Set nomestgen value
     * @param string $nomestgen
     * @return \StructType\ClaseDatosPlan
     */
    public function setNomestgen(?string $nomestgen = null): self
    {
        // validation for constraint: string
        if (!is_null($nomestgen) && !is_string($nomestgen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomestgen, true), gettype($nomestgen)), __LINE__);
        }
        $this->nomestgen = $nomestgen;
        
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
     * @return \StructType\ClaseDatosPlan
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
     * Get subtipo value
     * @return string|null
     */
    public function getSubtipo(): ?string
    {
        return $this->subtipo;
    }
    /**
     * Set subtipo value
     * @param string $subtipo
     * @return \StructType\ClaseDatosPlan
     */
    public function setSubtipo(?string $subtipo = null): self
    {
        // validation for constraint: string
        if (!is_null($subtipo) && !is_string($subtipo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subtipo, true), gettype($subtipo)), __LINE__);
        }
        $this->subtipo = $subtipo;
        
        return $this;
    }
    /**
     * Get subtiponombre value
     * @return string|null
     */
    public function getSubtiponombre(): ?string
    {
        return $this->subtiponombre;
    }
    /**
     * Set subtiponombre value
     * @param string $subtiponombre
     * @return \StructType\ClaseDatosPlan
     */
    public function setSubtiponombre(?string $subtiponombre = null): self
    {
        // validation for constraint: string
        if (!is_null($subtiponombre) && !is_string($subtiponombre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subtiponombre, true), gettype($subtiponombre)), __LINE__);
        }
        $this->subtiponombre = $subtiponombre;
        
        return $this;
    }
    /**
     * Get codcen value
     * @return string|null
     */
    public function getCodcen(): ?string
    {
        return $this->codcen;
    }
    /**
     * Set codcen value
     * @param string $codcen
     * @return \StructType\ClaseDatosPlan
     */
    public function setCodcen(?string $codcen = null): self
    {
        // validation for constraint: string
        if (!is_null($codcen) && !is_string($codcen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codcen, true), gettype($codcen)), __LINE__);
        }
        $this->codcen = $codcen;
        
        return $this;
    }
    /**
     * Get nomcen value
     * @return string|null
     */
    public function getNomcen(): ?string
    {
        return $this->nomcen;
    }
    /**
     * Set nomcen value
     * @param string $nomcen
     * @return \StructType\ClaseDatosPlan
     */
    public function setNomcen(?string $nomcen = null): self
    {
        // validation for constraint: string
        if (!is_null($nomcen) && !is_string($nomcen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomcen, true), gettype($nomcen)), __LINE__);
        }
        $this->nomcen = $nomcen;
        
        return $this;
    }
    /**
     * Get anoini value
     * @return string|null
     */
    public function getAnoini(): ?string
    {
        return $this->anoini;
    }
    /**
     * Set anoini value
     * @param string $anoini
     * @return \StructType\ClaseDatosPlan
     */
    public function setAnoini(?string $anoini = null): self
    {
        // validation for constraint: string
        if (!is_null($anoini) && !is_string($anoini)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($anoini, true), gettype($anoini)), __LINE__);
        }
        $this->anoini = $anoini;
        
        return $this;
    }
    /**
     * Get anofin value
     * @return string|null
     */
    public function getAnofin(): ?string
    {
        return $this->anofin;
    }
    /**
     * Set anofin value
     * @param string $anofin
     * @return \StructType\ClaseDatosPlan
     */
    public function setAnofin(?string $anofin = null): self
    {
        // validation for constraint: string
        if (!is_null($anofin) && !is_string($anofin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($anofin, true), gettype($anofin)), __LINE__);
        }
        $this->anofin = $anofin;
        
        return $this;
    }
    /**
     * Get codruct value
     * @return string|null
     */
    public function getCodruct(): ?string
    {
        return $this->codruct;
    }
    /**
     * Set codruct value
     * @param string $codruct
     * @return \StructType\ClaseDatosPlan
     */
    public function setCodruct(?string $codruct = null): self
    {
        // validation for constraint: string
        if (!is_null($codruct) && !is_string($codruct)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codruct, true), gettype($codruct)), __LINE__);
        }
        $this->codruct = $codruct;
        
        return $this;
    }
    /**
     * Get ncursos value
     * @return string|null
     */
    public function getNcursos(): ?string
    {
        return $this->ncursos;
    }
    /**
     * Set ncursos value
     * @param string $ncursos
     * @return \StructType\ClaseDatosPlan
     */
    public function setNcursos(?string $ncursos = null): self
    {
        // validation for constraint: string
        if (!is_null($ncursos) && !is_string($ncursos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ncursos, true), gettype($ncursos)), __LINE__);
        }
        $this->ncursos = $ncursos;
        
        return $this;
    }
    /**
     * Get tipogra value
     * @return string|null
     */
    public function getTipogra(): ?string
    {
        return $this->tipogra;
    }
    /**
     * Set tipogra value
     * @param string $tipogra
     * @return \StructType\ClaseDatosPlan
     */
    public function setTipogra(?string $tipogra = null): self
    {
        // validation for constraint: string
        if (!is_null($tipogra) && !is_string($tipogra)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipogra, true), gettype($tipogra)), __LINE__);
        }
        $this->tipogra = $tipogra;
        
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
     * @return \StructType\ClaseDatosPlan
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
     * Get urlmovil value
     * @return string|null
     */
    public function getUrlmovil(): ?string
    {
        return $this->urlmovil;
    }
    /**
     * Set urlmovil value
     * @param string $urlmovil
     * @return \StructType\ClaseDatosPlan
     */
    public function setUrlmovil(?string $urlmovil = null): self
    {
        // validation for constraint: string
        if (!is_null($urlmovil) && !is_string($urlmovil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urlmovil, true), gettype($urlmovil)), __LINE__);
        }
        $this->urlmovil = $urlmovil;
        
        return $this;
    }
    /**
     * Get imagenmovil value
     * @return string|null
     */
    public function getImagenmovil(): ?string
    {
        return $this->imagenmovil;
    }
    /**
     * Set imagenmovil value
     * @param string $imagenmovil
     * @return \StructType\ClaseDatosPlan
     */
    public function setImagenmovil(?string $imagenmovil = null): self
    {
        // validation for constraint: string
        if (!is_null($imagenmovil) && !is_string($imagenmovil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imagenmovil, true), gettype($imagenmovil)), __LINE__);
        }
        $this->imagenmovil = $imagenmovil;
        
        return $this;
    }
}
