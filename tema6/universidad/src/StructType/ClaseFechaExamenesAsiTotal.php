<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseFechaExamenesAsiTotal StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseFechaExamenesAsiTotal extends AbstractStructBase
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
     * Constructor method for ClaseFechaExamenesAsiTotal
     * @uses ClaseFechaExamenesAsiTotal::setId()
     * @uses ClaseFechaExamenesAsiTotal::setFecha()
     * @uses ClaseFechaExamenesAsiTotal::setCodasi()
     * @uses ClaseFechaExamenesAsiTotal::setNomasi()
     * @uses ClaseFechaExamenesAsiTotal::setCodgrp()
     * @uses ClaseFechaExamenesAsiTotal::setCodconv()
     * @uses ClaseFechaExamenesAsiTotal::setConv()
     * @uses ClaseFechaExamenesAsiTotal::setObservaciones()
     * @uses ClaseFechaExamenesAsiTotal::setCodest()
     * @uses ClaseFechaExamenesAsiTotal::setNumcurso()
     * @uses ClaseFechaExamenesAsiTotal::setDesccurso()
     * @uses ClaseFechaExamenesAsiTotal::setComplform()
     * @uses ClaseFechaExamenesAsiTotal::setFechareal()
     * @uses ClaseFechaExamenesAsiTotal::setHoraini()
     * @uses ClaseFechaExamenesAsiTotal::setHorafin()
     * @uses ClaseFechaExamenesAsiTotal::setAula()
     * @uses ClaseFechaExamenesAsiTotal::setAulasig()
     * @uses ClaseFechaExamenesAsiTotal::setDescaula()
     * @uses ClaseFechaExamenesAsiTotal::setDia()
     * @uses ClaseFechaExamenesAsiTotal::setOrden()
     * @uses ClaseFechaExamenesAsiTotal::setFlgaula()
     * @uses ClaseFechaExamenesAsiTotal::setTurno()
     * @uses ClaseFechaExamenesAsiTotal::setDuracion()
     * @uses ClaseFechaExamenesAsiTotal::setCapacidad_aulas()
     * @uses ClaseFechaExamenesAsiTotal::setObserva_ge()
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
     * @param string $flgaula
     * @param string $turno
     * @param string $duracion
     * @param string $capacidad_aulas
     * @param string $observa_ge
     */
    public function __construct(?string $id = null, ?string $fecha = null, ?string $codasi = null, ?string $nomasi = null, ?string $codgrp = null, ?string $codconv = null, ?string $conv = null, ?string $observaciones = null, ?string $codest = null, ?string $numcurso = null, ?string $desccurso = null, ?string $complform = null, ?string $fechareal = null, ?string $horaini = null, ?string $horafin = null, ?string $aula = null, ?string $aulasig = null, ?string $descaula = null, ?string $dia = null, ?string $orden = null, ?string $flgaula = null, ?string $turno = null, ?string $duracion = null, ?string $capacidad_aulas = null, ?string $observa_ge = null)
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
            ->setOrden($orden)
            ->setFlgaula($flgaula)
            ->setTurno($turno)
            ->setDuracion($duracion)
            ->setCapacidad_aulas($capacidad_aulas)
            ->setObserva_ge($observa_ge);
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
     * @return \StructType\ClaseFechaExamenesAsiTotal
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
