<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseHorarioAgrp StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseHorarioAgrp extends AbstractStructBase
{
    /**
     * The idagrupa
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idagrupa = null;
    /**
     * The descagr
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descagr = null;
    /**
     * The codgrp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codgrp = null;
    /**
     * The nomgrp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomgrp = null;
    /**
     * The aula
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $aula = null;
    /**
     * The descaula
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descaula = null;
    /**
     * The dni
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dni = null;
    /**
     * The nombre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nombre = null;
    /**
     * The apellido1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $apellido1 = null;
    /**
     * The apellido2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $apellido2 = null;
    /**
     * The idplaza
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idplaza = null;
    /**
     * The nomplaz
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomplaz = null;
    /**
     * The fechainicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fechainicio = null;
    /**
     * The fechafin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fechafin = null;
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
     * The idactiv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idactiv = null;
    /**
     * The nomact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomact = null;
    /**
     * The teopra
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $teopra = null;
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
     * The dia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dia = null;
    /**
     * The diasem
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $diasem = null;
    /**
     * The edificio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $edificio = null;
    /**
     * The aulasig
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $aulasig = null;
    /**
     * Constructor method for ClaseHorarioAgrp
     * @uses ClaseHorarioAgrp::setIdagrupa()
     * @uses ClaseHorarioAgrp::setDescagr()
     * @uses ClaseHorarioAgrp::setCodgrp()
     * @uses ClaseHorarioAgrp::setNomgrp()
     * @uses ClaseHorarioAgrp::setAula()
     * @uses ClaseHorarioAgrp::setDescaula()
     * @uses ClaseHorarioAgrp::setDni()
     * @uses ClaseHorarioAgrp::setNombre()
     * @uses ClaseHorarioAgrp::setApellido1()
     * @uses ClaseHorarioAgrp::setApellido2()
     * @uses ClaseHorarioAgrp::setIdplaza()
     * @uses ClaseHorarioAgrp::setNomplaz()
     * @uses ClaseHorarioAgrp::setFechainicio()
     * @uses ClaseHorarioAgrp::setFechafin()
     * @uses ClaseHorarioAgrp::setHoraini()
     * @uses ClaseHorarioAgrp::setHorafin()
     * @uses ClaseHorarioAgrp::setIdactiv()
     * @uses ClaseHorarioAgrp::setNomact()
     * @uses ClaseHorarioAgrp::setTeopra()
     * @uses ClaseHorarioAgrp::setCodasi()
     * @uses ClaseHorarioAgrp::setNomasi()
     * @uses ClaseHorarioAgrp::setDia()
     * @uses ClaseHorarioAgrp::setDiasem()
     * @uses ClaseHorarioAgrp::setEdificio()
     * @uses ClaseHorarioAgrp::setAulasig()
     * @param string $idagrupa
     * @param string $descagr
     * @param string $codgrp
     * @param string $nomgrp
     * @param string $aula
     * @param string $descaula
     * @param string $dni
     * @param string $nombre
     * @param string $apellido1
     * @param string $apellido2
     * @param string $idplaza
     * @param string $nomplaz
     * @param string $fechainicio
     * @param string $fechafin
     * @param string $horaini
     * @param string $horafin
     * @param string $idactiv
     * @param string $nomact
     * @param string $teopra
     * @param string $codasi
     * @param string $nomasi
     * @param string $dia
     * @param string $diasem
     * @param string $edificio
     * @param string $aulasig
     */
    public function __construct(?string $idagrupa = null, ?string $descagr = null, ?string $codgrp = null, ?string $nomgrp = null, ?string $aula = null, ?string $descaula = null, ?string $dni = null, ?string $nombre = null, ?string $apellido1 = null, ?string $apellido2 = null, ?string $idplaza = null, ?string $nomplaz = null, ?string $fechainicio = null, ?string $fechafin = null, ?string $horaini = null, ?string $horafin = null, ?string $idactiv = null, ?string $nomact = null, ?string $teopra = null, ?string $codasi = null, ?string $nomasi = null, ?string $dia = null, ?string $diasem = null, ?string $edificio = null, ?string $aulasig = null)
    {
        $this
            ->setIdagrupa($idagrupa)
            ->setDescagr($descagr)
            ->setCodgrp($codgrp)
            ->setNomgrp($nomgrp)
            ->setAula($aula)
            ->setDescaula($descaula)
            ->setDni($dni)
            ->setNombre($nombre)
            ->setApellido1($apellido1)
            ->setApellido2($apellido2)
            ->setIdplaza($idplaza)
            ->setNomplaz($nomplaz)
            ->setFechainicio($fechainicio)
            ->setFechafin($fechafin)
            ->setHoraini($horaini)
            ->setHorafin($horafin)
            ->setIdactiv($idactiv)
            ->setNomact($nomact)
            ->setTeopra($teopra)
            ->setCodasi($codasi)
            ->setNomasi($nomasi)
            ->setDia($dia)
            ->setDiasem($diasem)
            ->setEdificio($edificio)
            ->setAulasig($aulasig);
    }
    /**
     * Get idagrupa value
     * @return string|null
     */
    public function getIdagrupa(): ?string
    {
        return $this->idagrupa;
    }
    /**
     * Set idagrupa value
     * @param string $idagrupa
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setIdagrupa(?string $idagrupa = null): self
    {
        // validation for constraint: string
        if (!is_null($idagrupa) && !is_string($idagrupa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idagrupa, true), gettype($idagrupa)), __LINE__);
        }
        $this->idagrupa = $idagrupa;
        
        return $this;
    }
    /**
     * Get descagr value
     * @return string|null
     */
    public function getDescagr(): ?string
    {
        return $this->descagr;
    }
    /**
     * Set descagr value
     * @param string $descagr
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setDescagr(?string $descagr = null): self
    {
        // validation for constraint: string
        if (!is_null($descagr) && !is_string($descagr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descagr, true), gettype($descagr)), __LINE__);
        }
        $this->descagr = $descagr;
        
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
     * @return \StructType\ClaseHorarioAgrp
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
     * Get nomgrp value
     * @return string|null
     */
    public function getNomgrp(): ?string
    {
        return $this->nomgrp;
    }
    /**
     * Set nomgrp value
     * @param string $nomgrp
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setNomgrp(?string $nomgrp = null): self
    {
        // validation for constraint: string
        if (!is_null($nomgrp) && !is_string($nomgrp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomgrp, true), gettype($nomgrp)), __LINE__);
        }
        $this->nomgrp = $nomgrp;
        
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
     * @return \StructType\ClaseHorarioAgrp
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
     * @return \StructType\ClaseHorarioAgrp
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
     * Get dni value
     * @return string|null
     */
    public function getDni(): ?string
    {
        return $this->dni;
    }
    /**
     * Set dni value
     * @param string $dni
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setDni(?string $dni = null): self
    {
        // validation for constraint: string
        if (!is_null($dni) && !is_string($dni)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dni, true), gettype($dni)), __LINE__);
        }
        $this->dni = $dni;
        
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
     * @return \StructType\ClaseHorarioAgrp
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
     * Get apellido1 value
     * @return string|null
     */
    public function getApellido1(): ?string
    {
        return $this->apellido1;
    }
    /**
     * Set apellido1 value
     * @param string $apellido1
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setApellido1(?string $apellido1 = null): self
    {
        // validation for constraint: string
        if (!is_null($apellido1) && !is_string($apellido1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apellido1, true), gettype($apellido1)), __LINE__);
        }
        $this->apellido1 = $apellido1;
        
        return $this;
    }
    /**
     * Get apellido2 value
     * @return string|null
     */
    public function getApellido2(): ?string
    {
        return $this->apellido2;
    }
    /**
     * Set apellido2 value
     * @param string $apellido2
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setApellido2(?string $apellido2 = null): self
    {
        // validation for constraint: string
        if (!is_null($apellido2) && !is_string($apellido2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apellido2, true), gettype($apellido2)), __LINE__);
        }
        $this->apellido2 = $apellido2;
        
        return $this;
    }
    /**
     * Get idplaza value
     * @return string|null
     */
    public function getIdplaza(): ?string
    {
        return $this->idplaza;
    }
    /**
     * Set idplaza value
     * @param string $idplaza
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setIdplaza(?string $idplaza = null): self
    {
        // validation for constraint: string
        if (!is_null($idplaza) && !is_string($idplaza)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idplaza, true), gettype($idplaza)), __LINE__);
        }
        $this->idplaza = $idplaza;
        
        return $this;
    }
    /**
     * Get nomplaz value
     * @return string|null
     */
    public function getNomplaz(): ?string
    {
        return $this->nomplaz;
    }
    /**
     * Set nomplaz value
     * @param string $nomplaz
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setNomplaz(?string $nomplaz = null): self
    {
        // validation for constraint: string
        if (!is_null($nomplaz) && !is_string($nomplaz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomplaz, true), gettype($nomplaz)), __LINE__);
        }
        $this->nomplaz = $nomplaz;
        
        return $this;
    }
    /**
     * Get fechainicio value
     * @return string|null
     */
    public function getFechainicio(): ?string
    {
        return $this->fechainicio;
    }
    /**
     * Set fechainicio value
     * @param string $fechainicio
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setFechainicio(?string $fechainicio = null): self
    {
        // validation for constraint: string
        if (!is_null($fechainicio) && !is_string($fechainicio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechainicio, true), gettype($fechainicio)), __LINE__);
        }
        $this->fechainicio = $fechainicio;
        
        return $this;
    }
    /**
     * Get fechafin value
     * @return string|null
     */
    public function getFechafin(): ?string
    {
        return $this->fechafin;
    }
    /**
     * Set fechafin value
     * @param string $fechafin
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setFechafin(?string $fechafin = null): self
    {
        // validation for constraint: string
        if (!is_null($fechafin) && !is_string($fechafin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechafin, true), gettype($fechafin)), __LINE__);
        }
        $this->fechafin = $fechafin;
        
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
     * @return \StructType\ClaseHorarioAgrp
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
     * @return \StructType\ClaseHorarioAgrp
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
     * @return \StructType\ClaseHorarioAgrp
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
     * Get nomact value
     * @return string|null
     */
    public function getNomact(): ?string
    {
        return $this->nomact;
    }
    /**
     * Set nomact value
     * @param string $nomact
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setNomact(?string $nomact = null): self
    {
        // validation for constraint: string
        if (!is_null($nomact) && !is_string($nomact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomact, true), gettype($nomact)), __LINE__);
        }
        $this->nomact = $nomact;
        
        return $this;
    }
    /**
     * Get teopra value
     * @return string|null
     */
    public function getTeopra(): ?string
    {
        return $this->teopra;
    }
    /**
     * Set teopra value
     * @param string $teopra
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setTeopra(?string $teopra = null): self
    {
        // validation for constraint: string
        if (!is_null($teopra) && !is_string($teopra)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($teopra, true), gettype($teopra)), __LINE__);
        }
        $this->teopra = $teopra;
        
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
     * @return \StructType\ClaseHorarioAgrp
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
     * @return \StructType\ClaseHorarioAgrp
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
     * @return \StructType\ClaseHorarioAgrp
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
     * Get diasem value
     * @return string|null
     */
    public function getDiasem(): ?string
    {
        return $this->diasem;
    }
    /**
     * Set diasem value
     * @param string $diasem
     * @return \StructType\ClaseHorarioAgrp
     */
    public function setDiasem(?string $diasem = null): self
    {
        // validation for constraint: string
        if (!is_null($diasem) && !is_string($diasem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diasem, true), gettype($diasem)), __LINE__);
        }
        $this->diasem = $diasem;
        
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
     * @return \StructType\ClaseHorarioAgrp
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
     * @return \StructType\ClaseHorarioAgrp
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
}
