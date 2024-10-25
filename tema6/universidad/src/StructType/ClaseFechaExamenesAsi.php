<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseFechaExamenesAsi StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseFechaExamenesAsi extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The fecha
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fecha = null;
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
     * The codgrp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codgrp = null;
    /**
     * The codconv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codconv = null;
    /**
     * The conv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $conv = null;
    /**
     * The observaciones
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $observaciones = null;
    /**
     * The codest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codest = null;
    /**
     * The numcurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numcurso = null;
    /**
     * The desccurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $desccurso = null;
    /**
     * The complform
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $complform = null;
    /**
     * The fechareal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fechareal = null;
    /**
     * The horaini
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horaini = null;
    /**
     * The horafin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horafin = null;
    /**
     * The aula
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $aula = null;
    /**
     * The aulasig
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $aulasig = null;
    /**
     * The descaula
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descaula = null;
    /**
     * The dia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dia = null;
    /**
     * The orden
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orden = null;
    /**
     * Constructor method for ClaseFechaExamenesAsi
     * @uses ClaseFechaExamenesAsi::setId()
     * @uses ClaseFechaExamenesAsi::setFecha()
     * @uses ClaseFechaExamenesAsi::setCodasi()
     * @uses ClaseFechaExamenesAsi::setNomasi()
     * @uses ClaseFechaExamenesAsi::setCodgrp()
     * @uses ClaseFechaExamenesAsi::setCodconv()
     * @uses ClaseFechaExamenesAsi::setConv()
     * @uses ClaseFechaExamenesAsi::setObservaciones()
     * @uses ClaseFechaExamenesAsi::setCodest()
     * @uses ClaseFechaExamenesAsi::setNumcurso()
     * @uses ClaseFechaExamenesAsi::setDesccurso()
     * @uses ClaseFechaExamenesAsi::setComplform()
     * @uses ClaseFechaExamenesAsi::setFechareal()
     * @uses ClaseFechaExamenesAsi::setHoraini()
     * @uses ClaseFechaExamenesAsi::setHorafin()
     * @uses ClaseFechaExamenesAsi::setAula()
     * @uses ClaseFechaExamenesAsi::setAulasig()
     * @uses ClaseFechaExamenesAsi::setDescaula()
     * @uses ClaseFechaExamenesAsi::setDia()
     * @uses ClaseFechaExamenesAsi::setOrden()
     * @param string $id
     * @param string $fecha
     * @param string $codasi
     * @param string $nomasi
     * @param string $codgrp
     * @param string $codconv
     * @param string $conv
     * @param string $observaciones
     * @param string $codest
     * @param string $numcurso
     * @param string $desccurso
     * @param string $complform
     * @param string $fechareal
     * @param string $horaini
     * @param string $horafin
     * @param string $aula
     * @param string $aulasig
     * @param string $descaula
     * @param string $dia
     * @param string $orden
     */
    public function __construct(?string $id = null, ?string $fecha = null, ?string $codasi = null, ?string $nomasi = null, ?string $codgrp = null, ?string $codconv = null, ?string $conv = null, ?string $observaciones = null, ?string $codest = null, ?string $numcurso = null, ?string $desccurso = null, ?string $complform = null, ?string $fechareal = null, ?string $horaini = null, ?string $horafin = null, ?string $aula = null, ?string $aulasig = null, ?string $descaula = null, ?string $dia = null, ?string $orden = null)
    {
        $this
            ->setId($id)
            ->setFecha($fecha)
            ->setCodasi($codasi)
            ->setNomasi($nomasi)
            ->setCodgrp($codgrp)
            ->setCodconv($codconv)
            ->setConv($conv)
            ->setObservaciones($observaciones)
            ->setCodest($codest)
            ->setNumcurso($numcurso)
            ->setDesccurso($desccurso)
            ->setComplform($complform)
            ->setFechareal($fechareal)
            ->setHoraini($horaini)
            ->setHorafin($horafin)
            ->setAula($aula)
            ->setAulasig($aulasig)
            ->setDescaula($descaula)
            ->setDia($dia)
            ->setOrden($orden);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get fecha value
     * @return string|null
     */
    public function getFecha(): ?string
    {
        return $this->fecha;
    }
    /**
     * Set fecha value
     * @param string $fecha
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setFecha(?string $fecha = null): self
    {
        // validation for constraint: string
        if (!is_null($fecha) && !is_string($fecha)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fecha, true), gettype($fecha)), __LINE__);
        }
        $this->fecha = $fecha;
        
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
     * @return \StructType\ClaseFechaExamenesAsi
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
     * @return \StructType\ClaseFechaExamenesAsi
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
     * Get codgrp value
     * @return string|null
     */
    public function getCodgrp(): ?string
    {
        return $this->codgrp;
    }
    /**
     * Set codgrp value
     * @param string $codgrp
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setCodgrp(?string $codgrp = null): self
    {
        // validation for constraint: string
        if (!is_null($codgrp) && !is_string($codgrp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codgrp, true), gettype($codgrp)), __LINE__);
        }
        $this->codgrp = $codgrp;
        
        return $this;
    }
    /**
     * Get codconv value
     * @return string|null
     */
    public function getCodconv(): ?string
    {
        return $this->codconv;
    }
    /**
     * Set codconv value
     * @param string $codconv
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setCodconv(?string $codconv = null): self
    {
        // validation for constraint: string
        if (!is_null($codconv) && !is_string($codconv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codconv, true), gettype($codconv)), __LINE__);
        }
        $this->codconv = $codconv;
        
        return $this;
    }
    /**
     * Get conv value
     * @return string|null
     */
    public function getConv(): ?string
    {
        return $this->conv;
    }
    /**
     * Set conv value
     * @param string $conv
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setConv(?string $conv = null): self
    {
        // validation for constraint: string
        if (!is_null($conv) && !is_string($conv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conv, true), gettype($conv)), __LINE__);
        }
        $this->conv = $conv;
        
        return $this;
    }
    /**
     * Get observaciones value
     * @return string|null
     */
    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }
    /**
     * Set observaciones value
     * @param string $observaciones
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setObservaciones(?string $observaciones = null): self
    {
        // validation for constraint: string
        if (!is_null($observaciones) && !is_string($observaciones)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones, true), gettype($observaciones)), __LINE__);
        }
        $this->observaciones = $observaciones;
        
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
     * @return \StructType\ClaseFechaExamenesAsi
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
     * Get numcurso value
     * @return string|null
     */
    public function getNumcurso(): ?string
    {
        return $this->numcurso;
    }
    /**
     * Set numcurso value
     * @param string $numcurso
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setNumcurso(?string $numcurso = null): self
    {
        // validation for constraint: string
        if (!is_null($numcurso) && !is_string($numcurso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numcurso, true), gettype($numcurso)), __LINE__);
        }
        $this->numcurso = $numcurso;
        
        return $this;
    }
    /**
     * Get desccurso value
     * @return string|null
     */
    public function getDesccurso(): ?string
    {
        return $this->desccurso;
    }
    /**
     * Set desccurso value
     * @param string $desccurso
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setDesccurso(?string $desccurso = null): self
    {
        // validation for constraint: string
        if (!is_null($desccurso) && !is_string($desccurso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desccurso, true), gettype($desccurso)), __LINE__);
        }
        $this->desccurso = $desccurso;
        
        return $this;
    }
    /**
     * Get complform value
     * @return string|null
     */
    public function getComplform(): ?string
    {
        return $this->complform;
    }
    /**
     * Set complform value
     * @param string $complform
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setComplform(?string $complform = null): self
    {
        // validation for constraint: string
        if (!is_null($complform) && !is_string($complform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($complform, true), gettype($complform)), __LINE__);
        }
        $this->complform = $complform;
        
        return $this;
    }
    /**
     * Get fechareal value
     * @return string|null
     */
    public function getFechareal(): ?string
    {
        return $this->fechareal;
    }
    /**
     * Set fechareal value
     * @param string $fechareal
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setFechareal(?string $fechareal = null): self
    {
        // validation for constraint: string
        if (!is_null($fechareal) && !is_string($fechareal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechareal, true), gettype($fechareal)), __LINE__);
        }
        $this->fechareal = $fechareal;
        
        return $this;
    }
    /**
     * Get horaini value
     * @return string|null
     */
    public function getHoraini(): ?string
    {
        return $this->horaini;
    }
    /**
     * Set horaini value
     * @param string $horaini
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setHoraini(?string $horaini = null): self
    {
        // validation for constraint: string
        if (!is_null($horaini) && !is_string($horaini)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horaini, true), gettype($horaini)), __LINE__);
        }
        $this->horaini = $horaini;
        
        return $this;
    }
    /**
     * Get horafin value
     * @return string|null
     */
    public function getHorafin(): ?string
    {
        return $this->horafin;
    }
    /**
     * Set horafin value
     * @param string $horafin
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setHorafin(?string $horafin = null): self
    {
        // validation for constraint: string
        if (!is_null($horafin) && !is_string($horafin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horafin, true), gettype($horafin)), __LINE__);
        }
        $this->horafin = $horafin;
        
        return $this;
    }
    /**
     * Get aula value
     * @return string|null
     */
    public function getAula(): ?string
    {
        return $this->aula;
    }
    /**
     * Set aula value
     * @param string $aula
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setAula(?string $aula = null): self
    {
        // validation for constraint: string
        if (!is_null($aula) && !is_string($aula)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aula, true), gettype($aula)), __LINE__);
        }
        $this->aula = $aula;
        
        return $this;
    }
    /**
     * Get aulasig value
     * @return string|null
     */
    public function getAulasig(): ?string
    {
        return $this->aulasig;
    }
    /**
     * Set aulasig value
     * @param string $aulasig
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setAulasig(?string $aulasig = null): self
    {
        // validation for constraint: string
        if (!is_null($aulasig) && !is_string($aulasig)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aulasig, true), gettype($aulasig)), __LINE__);
        }
        $this->aulasig = $aulasig;
        
        return $this;
    }
    /**
     * Get descaula value
     * @return string|null
     */
    public function getDescaula(): ?string
    {
        return $this->descaula;
    }
    /**
     * Set descaula value
     * @param string $descaula
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setDescaula(?string $descaula = null): self
    {
        // validation for constraint: string
        if (!is_null($descaula) && !is_string($descaula)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descaula, true), gettype($descaula)), __LINE__);
        }
        $this->descaula = $descaula;
        
        return $this;
    }
    /**
     * Get dia value
     * @return string|null
     */
    public function getDia(): ?string
    {
        return $this->dia;
    }
    /**
     * Set dia value
     * @param string $dia
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setDia(?string $dia = null): self
    {
        // validation for constraint: string
        if (!is_null($dia) && !is_string($dia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dia, true), gettype($dia)), __LINE__);
        }
        $this->dia = $dia;
        
        return $this;
    }
    /**
     * Get orden value
     * @return string|null
     */
    public function getOrden(): ?string
    {
        return $this->orden;
    }
    /**
     * Set orden value
     * @param string $orden
     * @return \StructType\ClaseFechaExamenesAsi
     */
    public function setOrden(?string $orden = null): self
    {
        // validation for constraint: string
        if (!is_null($orden) && !is_string($orden)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orden, true), gettype($orden)), __LINE__);
        }
        $this->orden = $orden;
        
        return $this;
    }
}
