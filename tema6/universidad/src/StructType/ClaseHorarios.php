<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseHorarios StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseHorarios extends AbstractStructBase
{
    /**
     * The teopra
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $teopra = null;
    /**
     * The codgrp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codgrp = null;
    /**
     * The ejecodnum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ejecodnum = null;
    /**
     * The vaccodnum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vaccodnum = null;
    /**
     * The gaccodnum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $gaccodnum = null;
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
     * The dia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dia = null;
    /**
     * The diasemana
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $diasemana = null;
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
     * The descaula
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descaula = null;
    /**
     * The aulasig
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $aulasig = null;
    /**
     * The clase_activ
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $clase_activ = null;
    /**
     * The descactiv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descactiv = null;
    /**
     * The descgrupo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descgrupo = null;
    /**
     * The esara_sn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $esara_sn = null;
    /**
     * The idioma
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idioma = null;
    /**
     * The capacidadgrupo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $capacidadgrupo = null;
    /**
     * The flgcpc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flgcpc = null;
    /**
     * The nodocodnum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nodocodnum = null;
    /**
     * The placodalf
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $placodalf = null;
    /**
     * Constructor method for ClaseHorarios
     * @uses ClaseHorarios::setTeopra()
     * @uses ClaseHorarios::setCodgrp()
     * @uses ClaseHorarios::setEjecodnum()
     * @uses ClaseHorarios::setVaccodnum()
     * @uses ClaseHorarios::setGaccodnum()
     * @uses ClaseHorarios::setFechainicio()
     * @uses ClaseHorarios::setFechafin()
     * @uses ClaseHorarios::setDia()
     * @uses ClaseHorarios::setDiasemana()
     * @uses ClaseHorarios::setHoraini()
     * @uses ClaseHorarios::setHorafin()
     * @uses ClaseHorarios::setAula()
     * @uses ClaseHorarios::setDescaula()
     * @uses ClaseHorarios::setAulasig()
     * @uses ClaseHorarios::setClase_activ()
     * @uses ClaseHorarios::setDescactiv()
     * @uses ClaseHorarios::setDescgrupo()
     * @uses ClaseHorarios::setEsara_sn()
     * @uses ClaseHorarios::setIdioma()
     * @uses ClaseHorarios::setCapacidadgrupo()
     * @uses ClaseHorarios::setFlgcpc()
     * @uses ClaseHorarios::setNodocodnum()
     * @uses ClaseHorarios::setPlacodalf()
     * @param string $teopra
     * @param string $codgrp
     * @param string $ejecodnum
     * @param string $vaccodnum
     * @param string $gaccodnum
     * @param string $fechainicio
     * @param string $fechafin
     * @param string $dia
     * @param string $diasemana
     * @param string $horaini
     * @param string $horafin
     * @param string $aula
     * @param string $descaula
     * @param string $aulasig
     * @param string $clase_activ
     * @param string $descactiv
     * @param string $descgrupo
     * @param string $esara_sn
     * @param string $idioma
     * @param string $capacidadgrupo
     * @param string $flgcpc
     * @param string $nodocodnum
     * @param string $placodalf
     */
    public function __construct(?string $teopra = null, ?string $codgrp = null, ?string $ejecodnum = null, ?string $vaccodnum = null, ?string $gaccodnum = null, ?string $fechainicio = null, ?string $fechafin = null, ?string $dia = null, ?string $diasemana = null, ?string $horaini = null, ?string $horafin = null, ?string $aula = null, ?string $descaula = null, ?string $aulasig = null, ?string $clase_activ = null, ?string $descactiv = null, ?string $descgrupo = null, ?string $esara_sn = null, ?string $idioma = null, ?string $capacidadgrupo = null, ?string $flgcpc = null, ?string $nodocodnum = null, ?string $placodalf = null)
    {
        $this
            ->setTeopra($teopra)
            ->setCodgrp($codgrp)
            ->setEjecodnum($ejecodnum)
            ->setVaccodnum($vaccodnum)
            ->setGaccodnum($gaccodnum)
            ->setFechainicio($fechainicio)
            ->setFechafin($fechafin)
            ->setDia($dia)
            ->setDiasemana($diasemana)
            ->setHoraini($horaini)
            ->setHorafin($horafin)
            ->setAula($aula)
            ->setDescaula($descaula)
            ->setAulasig($aulasig)
            ->setClase_activ($clase_activ)
            ->setDescactiv($descactiv)
            ->setDescgrupo($descgrupo)
            ->setEsara_sn($esara_sn)
            ->setIdioma($idioma)
            ->setCapacidadgrupo($capacidadgrupo)
            ->setFlgcpc($flgcpc)
            ->setNodocodnum($nodocodnum)
            ->setPlacodalf($placodalf);
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
     * @return \StructType\ClaseHorarios
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
     * @return \StructType\ClaseHorarios
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
     * Get ejecodnum value
     * @return string|null
     */
    public function getEjecodnum(): ?string
    {
        return $this->ejecodnum;
    }
    /**
     * Set ejecodnum value
     * @param string $ejecodnum
     * @return \StructType\ClaseHorarios
     */
    public function setEjecodnum(?string $ejecodnum = null): self
    {
        // validation for constraint: string
        if (!is_null($ejecodnum) && !is_string($ejecodnum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ejecodnum, true), gettype($ejecodnum)), __LINE__);
        }
        $this->ejecodnum = $ejecodnum;
        
        return $this;
    }
    /**
     * Get vaccodnum value
     * @return string|null
     */
    public function getVaccodnum(): ?string
    {
        return $this->vaccodnum;
    }
    /**
     * Set vaccodnum value
     * @param string $vaccodnum
     * @return \StructType\ClaseHorarios
     */
    public function setVaccodnum(?string $vaccodnum = null): self
    {
        // validation for constraint: string
        if (!is_null($vaccodnum) && !is_string($vaccodnum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vaccodnum, true), gettype($vaccodnum)), __LINE__);
        }
        $this->vaccodnum = $vaccodnum;
        
        return $this;
    }
    /**
     * Get gaccodnum value
     * @return string|null
     */
    public function getGaccodnum(): ?string
    {
        return $this->gaccodnum;
    }
    /**
     * Set gaccodnum value
     * @param string $gaccodnum
     * @return \StructType\ClaseHorarios
     */
    public function setGaccodnum(?string $gaccodnum = null): self
    {
        // validation for constraint: string
        if (!is_null($gaccodnum) && !is_string($gaccodnum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gaccodnum, true), gettype($gaccodnum)), __LINE__);
        }
        $this->gaccodnum = $gaccodnum;
        
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
     * @return \StructType\ClaseHorarios
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
     * @return \StructType\ClaseHorarios
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
     * @return \StructType\ClaseHorarios
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
     * @return \StructType\ClaseHorarios
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
     * @return \StructType\ClaseHorarios
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
     * @return \StructType\ClaseHorarios
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
     * @return \StructType\ClaseHorarios
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
     * @return \StructType\ClaseHorarios
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
     * @return \StructType\ClaseHorarios
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
     * Get clase_activ value
     * @return string|null
     */
    public function getClase_activ(): ?string
    {
        return $this->clase_activ;
    }
    /**
     * Set clase_activ value
     * @param string $clase_activ
     * @return \StructType\ClaseHorarios
     */
    public function setClase_activ(?string $clase_activ = null): self
    {
        // validation for constraint: string
        if (!is_null($clase_activ) && !is_string($clase_activ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clase_activ, true), gettype($clase_activ)), __LINE__);
        }
        $this->clase_activ = $clase_activ;
        
        return $this;
    }
    /**
     * Get descactiv value
     * @return string|null
     */
    public function getDescactiv(): ?string
    {
        return $this->descactiv;
    }
    /**
     * Set descactiv value
     * @param string $descactiv
     * @return \StructType\ClaseHorarios
     */
    public function setDescactiv(?string $descactiv = null): self
    {
        // validation for constraint: string
        if (!is_null($descactiv) && !is_string($descactiv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descactiv, true), gettype($descactiv)), __LINE__);
        }
        $this->descactiv = $descactiv;
        
        return $this;
    }
    /**
     * Get descgrupo value
     * @return string|null
     */
    public function getDescgrupo(): ?string
    {
        return $this->descgrupo;
    }
    /**
     * Set descgrupo value
     * @param string $descgrupo
     * @return \StructType\ClaseHorarios
     */
    public function setDescgrupo(?string $descgrupo = null): self
    {
        // validation for constraint: string
        if (!is_null($descgrupo) && !is_string($descgrupo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descgrupo, true), gettype($descgrupo)), __LINE__);
        }
        $this->descgrupo = $descgrupo;
        
        return $this;
    }
    /**
     * Get esara_sn value
     * @return string|null
     */
    public function getEsara_sn(): ?string
    {
        return $this->esara_sn;
    }
    /**
     * Set esara_sn value
     * @param string $esara_sn
     * @return \StructType\ClaseHorarios
     */
    public function setEsara_sn(?string $esara_sn = null): self
    {
        // validation for constraint: string
        if (!is_null($esara_sn) && !is_string($esara_sn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($esara_sn, true), gettype($esara_sn)), __LINE__);
        }
        $this->esara_sn = $esara_sn;
        
        return $this;
    }
    /**
     * Get idioma value
     * @return string|null
     */
    public function getIdioma(): ?string
    {
        return $this->idioma;
    }
    /**
     * Set idioma value
     * @param string $idioma
     * @return \StructType\ClaseHorarios
     */
    public function setIdioma(?string $idioma = null): self
    {
        // validation for constraint: string
        if (!is_null($idioma) && !is_string($idioma)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idioma, true), gettype($idioma)), __LINE__);
        }
        $this->idioma = $idioma;
        
        return $this;
    }
    /**
     * Get capacidadgrupo value
     * @return string|null
     */
    public function getCapacidadgrupo(): ?string
    {
        return $this->capacidadgrupo;
    }
    /**
     * Set capacidadgrupo value
     * @param string $capacidadgrupo
     * @return \StructType\ClaseHorarios
     */
    public function setCapacidadgrupo(?string $capacidadgrupo = null): self
    {
        // validation for constraint: string
        if (!is_null($capacidadgrupo) && !is_string($capacidadgrupo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($capacidadgrupo, true), gettype($capacidadgrupo)), __LINE__);
        }
        $this->capacidadgrupo = $capacidadgrupo;
        
        return $this;
    }
    /**
     * Get flgcpc value
     * @return string|null
     */
    public function getFlgcpc(): ?string
    {
        return $this->flgcpc;
    }
    /**
     * Set flgcpc value
     * @param string $flgcpc
     * @return \StructType\ClaseHorarios
     */
    public function setFlgcpc(?string $flgcpc = null): self
    {
        // validation for constraint: string
        if (!is_null($flgcpc) && !is_string($flgcpc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flgcpc, true), gettype($flgcpc)), __LINE__);
        }
        $this->flgcpc = $flgcpc;
        
        return $this;
    }
    /**
     * Get nodocodnum value
     * @return string|null
     */
    public function getNodocodnum(): ?string
    {
        return $this->nodocodnum;
    }
    /**
     * Set nodocodnum value
     * @param string $nodocodnum
     * @return \StructType\ClaseHorarios
     */
    public function setNodocodnum(?string $nodocodnum = null): self
    {
        // validation for constraint: string
        if (!is_null($nodocodnum) && !is_string($nodocodnum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nodocodnum, true), gettype($nodocodnum)), __LINE__);
        }
        $this->nodocodnum = $nodocodnum;
        
        return $this;
    }
    /**
     * Get placodalf value
     * @return string|null
     */
    public function getPlacodalf(): ?string
    {
        return $this->placodalf;
    }
    /**
     * Set placodalf value
     * @param string $placodalf
     * @return \StructType\ClaseHorarios
     */
    public function setPlacodalf(?string $placodalf = null): self
    {
        // validation for constraint: string
        if (!is_null($placodalf) && !is_string($placodalf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($placodalf, true), gettype($placodalf)), __LINE__);
        }
        $this->placodalf = $placodalf;
        
        return $this;
    }
}
