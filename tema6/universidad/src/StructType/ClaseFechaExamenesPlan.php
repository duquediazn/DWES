<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseFechaExamenesPlan StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseFechaExamenesPlan extends AbstractStructBase
{
    /**
     * The codexa
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codexa = null;
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
     * The idactiv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idactiv = null;
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
     * The idperiodo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idperiodo = null;
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
     * The tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tipo = null;
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
     * The diasemana
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $diasemana = null;
    /**
     * The abrdsm
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $abrdsm = null;
    /**
     * The dsm
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dsm = null;
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
     * The campus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $campus = null;
    /**
     * The edificio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $edificio = null;
    /**
     * The orden
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orden = null;
    /**
     * The flgaula
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flgaula = null;
    /**
     * The turno
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $turno = null;
    /**
     * The duracion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $duracion = null;
    /**
     * The capacidad_aulas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $capacidad_aulas = null;
    /**
     * The observa_ge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $observa_ge = null;
    /**
     * Constructor method for ClaseFechaExamenesPlan
     * @uses ClaseFechaExamenesPlan::setCodexa()
     * @uses ClaseFechaExamenesPlan::setFecha()
     * @uses ClaseFechaExamenesPlan::setCodasi()
     * @uses ClaseFechaExamenesPlan::setNomasi()
     * @uses ClaseFechaExamenesPlan::setIdactiv()
     * @uses ClaseFechaExamenesPlan::setCodgrp()
     * @uses ClaseFechaExamenesPlan::setCodconv()
     * @uses ClaseFechaExamenesPlan::setConv()
     * @uses ClaseFechaExamenesPlan::setIdperiodo()
     * @uses ClaseFechaExamenesPlan::setObservaciones()
     * @uses ClaseFechaExamenesPlan::setCodest()
     * @uses ClaseFechaExamenesPlan::setNumcurso()
     * @uses ClaseFechaExamenesPlan::setDesccurso()
     * @uses ClaseFechaExamenesPlan::setTipo()
     * @uses ClaseFechaExamenesPlan::setFechareal()
     * @uses ClaseFechaExamenesPlan::setHoraini()
     * @uses ClaseFechaExamenesPlan::setHorafin()
     * @uses ClaseFechaExamenesPlan::setDiasemana()
     * @uses ClaseFechaExamenesPlan::setAbrdsm()
     * @uses ClaseFechaExamenesPlan::setDsm()
     * @uses ClaseFechaExamenesPlan::setAula()
     * @uses ClaseFechaExamenesPlan::setAulasig()
     * @uses ClaseFechaExamenesPlan::setDescaula()
     * @uses ClaseFechaExamenesPlan::setCampus()
     * @uses ClaseFechaExamenesPlan::setEdificio()
     * @uses ClaseFechaExamenesPlan::setOrden()
     * @uses ClaseFechaExamenesPlan::setFlgaula()
     * @uses ClaseFechaExamenesPlan::setTurno()
     * @uses ClaseFechaExamenesPlan::setDuracion()
     * @uses ClaseFechaExamenesPlan::setCapacidad_aulas()
     * @uses ClaseFechaExamenesPlan::setObserva_ge()
     * @param string $codexa
     * @param string $fecha
     * @param string $codasi
     * @param string $nomasi
     * @param string $idactiv
     * @param string $codgrp
     * @param string $codconv
     * @param string $conv
     * @param string $idperiodo
     * @param string $observaciones
     * @param string $codest
     * @param string $numcurso
     * @param string $desccurso
     * @param string $tipo
     * @param string $fechareal
     * @param string $horaini
     * @param string $horafin
     * @param string $diasemana
     * @param string $abrdsm
     * @param string $dsm
     * @param string $aula
     * @param string $aulasig
     * @param string $descaula
     * @param string $campus
     * @param string $edificio
     * @param string $orden
     * @param string $flgaula
     * @param string $turno
     * @param string $duracion
     * @param string $capacidad_aulas
     * @param string $observa_ge
     */
    public function __construct(?string $codexa = null, ?string $fecha = null, ?string $codasi = null, ?string $nomasi = null, ?string $idactiv = null, ?string $codgrp = null, ?string $codconv = null, ?string $conv = null, ?string $idperiodo = null, ?string $observaciones = null, ?string $codest = null, ?string $numcurso = null, ?string $desccurso = null, ?string $tipo = null, ?string $fechareal = null, ?string $horaini = null, ?string $horafin = null, ?string $diasemana = null, ?string $abrdsm = null, ?string $dsm = null, ?string $aula = null, ?string $aulasig = null, ?string $descaula = null, ?string $campus = null, ?string $edificio = null, ?string $orden = null, ?string $flgaula = null, ?string $turno = null, ?string $duracion = null, ?string $capacidad_aulas = null, ?string $observa_ge = null)
    {
        $this
            ->setCodexa($codexa)
            ->setFecha($fecha)
            ->setCodasi($codasi)
            ->setNomasi($nomasi)
            ->setIdactiv($idactiv)
            ->setCodgrp($codgrp)
            ->setCodconv($codconv)
            ->setConv($conv)
            ->setIdperiodo($idperiodo)
            ->setObservaciones($observaciones)
            ->setCodest($codest)
            ->setNumcurso($numcurso)
            ->setDesccurso($desccurso)
            ->setTipo($tipo)
            ->setFechareal($fechareal)
            ->setHoraini($horaini)
            ->setHorafin($horafin)
            ->setDiasemana($diasemana)
            ->setAbrdsm($abrdsm)
            ->setDsm($dsm)
            ->setAula($aula)
            ->setAulasig($aulasig)
            ->setDescaula($descaula)
            ->setCampus($campus)
            ->setEdificio($edificio)
            ->setOrden($orden)
            ->setFlgaula($flgaula)
            ->setTurno($turno)
            ->setDuracion($duracion)
            ->setCapacidad_aulas($capacidad_aulas)
            ->setObserva_ge($observa_ge);
    }
    /**
     * Get codexa value
     * @return string|null
     */
    public function getCodexa(): ?string
    {
        return $this->codexa;
    }
    /**
     * Set codexa value
     * @param string $codexa
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setCodexa(?string $codexa = null): self
    {
        // validation for constraint: string
        if (!is_null($codexa) && !is_string($codexa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codexa, true), gettype($codexa)), __LINE__);
        }
        $this->codexa = $codexa;
        
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * Get idactiv value
     * @return string|null
     */
    public function getIdactiv(): ?string
    {
        return $this->idactiv;
    }
    /**
     * Set idactiv value
     * @param string $idactiv
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setIdactiv(?string $idactiv = null): self
    {
        // validation for constraint: string
        if (!is_null($idactiv) && !is_string($idactiv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idactiv, true), gettype($idactiv)), __LINE__);
        }
        $this->idactiv = $idactiv;
        
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * Get idperiodo value
     * @return string|null
     */
    public function getIdperiodo(): ?string
    {
        return $this->idperiodo;
    }
    /**
     * Set idperiodo value
     * @param string $idperiodo
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setIdperiodo(?string $idperiodo = null): self
    {
        // validation for constraint: string
        if (!is_null($idperiodo) && !is_string($idperiodo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idperiodo, true), gettype($idperiodo)), __LINE__);
        }
        $this->idperiodo = $idperiodo;
        
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * Get diasemana value
     * @return string|null
     */
    public function getDiasemana(): ?string
    {
        return $this->diasemana;
    }
    /**
     * Set diasemana value
     * @param string $diasemana
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setDiasemana(?string $diasemana = null): self
    {
        // validation for constraint: string
        if (!is_null($diasemana) && !is_string($diasemana)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diasemana, true), gettype($diasemana)), __LINE__);
        }
        $this->diasemana = $diasemana;
        
        return $this;
    }
    /**
     * Get abrdsm value
     * @return string|null
     */
    public function getAbrdsm(): ?string
    {
        return $this->abrdsm;
    }
    /**
     * Set abrdsm value
     * @param string $abrdsm
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setAbrdsm(?string $abrdsm = null): self
    {
        // validation for constraint: string
        if (!is_null($abrdsm) && !is_string($abrdsm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abrdsm, true), gettype($abrdsm)), __LINE__);
        }
        $this->abrdsm = $abrdsm;
        
        return $this;
    }
    /**
     * Get dsm value
     * @return string|null
     */
    public function getDsm(): ?string
    {
        return $this->dsm;
    }
    /**
     * Set dsm value
     * @param string $dsm
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setDsm(?string $dsm = null): self
    {
        // validation for constraint: string
        if (!is_null($dsm) && !is_string($dsm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dsm, true), gettype($dsm)), __LINE__);
        }
        $this->dsm = $dsm;
        
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * Get campus value
     * @return string|null
     */
    public function getCampus(): ?string
    {
        return $this->campus;
    }
    /**
     * Set campus value
     * @param string $campus
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setCampus(?string $campus = null): self
    {
        // validation for constraint: string
        if (!is_null($campus) && !is_string($campus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campus, true), gettype($campus)), __LINE__);
        }
        $this->campus = $campus;
        
        return $this;
    }
    /**
     * Get edificio value
     * @return string|null
     */
    public function getEdificio(): ?string
    {
        return $this->edificio;
    }
    /**
     * Set edificio value
     * @param string $edificio
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setEdificio(?string $edificio = null): self
    {
        // validation for constraint: string
        if (!is_null($edificio) && !is_string($edificio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($edificio, true), gettype($edificio)), __LINE__);
        }
        $this->edificio = $edificio;
        
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
     * @return \StructType\ClaseFechaExamenesPlan
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
    /**
     * Get flgaula value
     * @return string|null
     */
    public function getFlgaula(): ?string
    {
        return $this->flgaula;
    }
    /**
     * Set flgaula value
     * @param string $flgaula
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setFlgaula(?string $flgaula = null): self
    {
        // validation for constraint: string
        if (!is_null($flgaula) && !is_string($flgaula)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flgaula, true), gettype($flgaula)), __LINE__);
        }
        $this->flgaula = $flgaula;
        
        return $this;
    }
    /**
     * Get turno value
     * @return string|null
     */
    public function getTurno(): ?string
    {
        return $this->turno;
    }
    /**
     * Set turno value
     * @param string $turno
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setTurno(?string $turno = null): self
    {
        // validation for constraint: string
        if (!is_null($turno) && !is_string($turno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($turno, true), gettype($turno)), __LINE__);
        }
        $this->turno = $turno;
        
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
     * @return \StructType\ClaseFechaExamenesPlan
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
     * Get capacidad_aulas value
     * @return string|null
     */
    public function getCapacidad_aulas(): ?string
    {
        return $this->capacidad_aulas;
    }
    /**
     * Set capacidad_aulas value
     * @param string $capacidad_aulas
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setCapacidad_aulas(?string $capacidad_aulas = null): self
    {
        // validation for constraint: string
        if (!is_null($capacidad_aulas) && !is_string($capacidad_aulas)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($capacidad_aulas, true), gettype($capacidad_aulas)), __LINE__);
        }
        $this->capacidad_aulas = $capacidad_aulas;
        
        return $this;
    }
    /**
     * Get observa_ge value
     * @return string|null
     */
    public function getObserva_ge(): ?string
    {
        return $this->observa_ge;
    }
    /**
     * Set observa_ge value
     * @param string $observa_ge
     * @return \StructType\ClaseFechaExamenesPlan
     */
    public function setObserva_ge(?string $observa_ge = null): self
    {
        // validation for constraint: string
        if (!is_null($observa_ge) && !is_string($observa_ge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observa_ge, true), gettype($observa_ge)), __LINE__);
        }
        $this->observa_ge = $observa_ge;
        
        return $this;
    }
}
