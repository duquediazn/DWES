<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseConveMovilidad StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseConveMovilidad extends AbstractStructBase
{
    /**
     * The tip_codnum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tip_codnum = null;
    /**
     * The uni_codalf
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $uni_codalf = null;
    /**
     * The pai_codalf
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pai_codalf = null;
    /**
     * The nombre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nombre = null;
    /**
     * The nomuni
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomuni = null;
    /**
     * The are_codalf
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $are_codalf = null;
    /**
     * The desc_area_eng
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $desc_area_eng = null;
    /**
     * The desc_area_val
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $desc_area_val = null;
    /**
     * The desc_area_cas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $desc_area_cas = null;
    /**
     * The nivel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nivel = null;
    /**
     * The plazas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $plazas = null;
    /**
     * The meses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $meses = null;
    /**
     * The vigente
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vigente = null;
    /**
     * The desde
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $desde = null;
    /**
     * The hasta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $hasta = null;
    /**
     * The flgmodificable
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flgmodificable = null;
    /**
     * The disp_desidi2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $disp_desidi2 = null;
    /**
     * The prog_codnum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $prog_codnum = null;
    /**
     * The cen_codnum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cen_codnum = null;
    /**
     * The nom_centro
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nom_centro = null;
    /**
     * The idi_universidad
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idi_universidad = null;
    /**
     * The modo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $modo = null;
    /**
     * The idiomas_nivel1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idiomas_nivel1 = null;
    /**
     * The idiomas_nivel2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idiomas_nivel2 = null;
    /**
     * The idiomas_nivel3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idiomas_nivel3 = null;
    /**
     * The nomcoordina
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomcoordina = null;
    /**
     * The promotor_ua
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $promotor_ua = null;
    /**
     * The web_uni
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $web_uni = null;
    /**
     * The web_oficina
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $web_oficina = null;
    /**
     * Constructor method for ClaseConveMovilidad
     * @uses ClaseConveMovilidad::setTip_codnum()
     * @uses ClaseConveMovilidad::setUni_codalf()
     * @uses ClaseConveMovilidad::setPai_codalf()
     * @uses ClaseConveMovilidad::setNombre()
     * @uses ClaseConveMovilidad::setNomuni()
     * @uses ClaseConveMovilidad::setAre_codalf()
     * @uses ClaseConveMovilidad::setDesc_area_eng()
     * @uses ClaseConveMovilidad::setDesc_area_val()
     * @uses ClaseConveMovilidad::setDesc_area_cas()
     * @uses ClaseConveMovilidad::setNivel()
     * @uses ClaseConveMovilidad::setPlazas()
     * @uses ClaseConveMovilidad::setMeses()
     * @uses ClaseConveMovilidad::setVigente()
     * @uses ClaseConveMovilidad::setDesde()
     * @uses ClaseConveMovilidad::setHasta()
     * @uses ClaseConveMovilidad::setFlgmodificable()
     * @uses ClaseConveMovilidad::setDisp_desidi2()
     * @uses ClaseConveMovilidad::setProg_codnum()
     * @uses ClaseConveMovilidad::setCen_codnum()
     * @uses ClaseConveMovilidad::setNom_centro()
     * @uses ClaseConveMovilidad::setIdi_universidad()
     * @uses ClaseConveMovilidad::setModo()
     * @uses ClaseConveMovilidad::setIdiomas_nivel1()
     * @uses ClaseConveMovilidad::setIdiomas_nivel2()
     * @uses ClaseConveMovilidad::setIdiomas_nivel3()
     * @uses ClaseConveMovilidad::setNomcoordina()
     * @uses ClaseConveMovilidad::setPromotor_ua()
     * @uses ClaseConveMovilidad::setWeb_uni()
     * @uses ClaseConveMovilidad::setWeb_oficina()
     * @param string $tip_codnum
     * @param string $uni_codalf
     * @param string $pai_codalf
     * @param string $nombre
     * @param string $nomuni
     * @param string $are_codalf
     * @param string $desc_area_eng
     * @param string $desc_area_val
     * @param string $desc_area_cas
     * @param string $nivel
     * @param string $plazas
     * @param string $meses
     * @param string $vigente
     * @param string $desde
     * @param string $hasta
     * @param string $flgmodificable
     * @param string $disp_desidi2
     * @param string $prog_codnum
     * @param string $cen_codnum
     * @param string $nom_centro
     * @param string $idi_universidad
     * @param string $modo
     * @param string $idiomas_nivel1
     * @param string $idiomas_nivel2
     * @param string $idiomas_nivel3
     * @param string $nomcoordina
     * @param string $promotor_ua
     * @param string $web_uni
     * @param string $web_oficina
     */
    public function __construct(?string $tip_codnum = null, ?string $uni_codalf = null, ?string $pai_codalf = null, ?string $nombre = null, ?string $nomuni = null, ?string $are_codalf = null, ?string $desc_area_eng = null, ?string $desc_area_val = null, ?string $desc_area_cas = null, ?string $nivel = null, ?string $plazas = null, ?string $meses = null, ?string $vigente = null, ?string $desde = null, ?string $hasta = null, ?string $flgmodificable = null, ?string $disp_desidi2 = null, ?string $prog_codnum = null, ?string $cen_codnum = null, ?string $nom_centro = null, ?string $idi_universidad = null, ?string $modo = null, ?string $idiomas_nivel1 = null, ?string $idiomas_nivel2 = null, ?string $idiomas_nivel3 = null, ?string $nomcoordina = null, ?string $promotor_ua = null, ?string $web_uni = null, ?string $web_oficina = null)
    {
        $this
            ->setTip_codnum($tip_codnum)
            ->setUni_codalf($uni_codalf)
            ->setPai_codalf($pai_codalf)
            ->setNombre($nombre)
            ->setNomuni($nomuni)
            ->setAre_codalf($are_codalf)
            ->setDesc_area_eng($desc_area_eng)
            ->setDesc_area_val($desc_area_val)
            ->setDesc_area_cas($desc_area_cas)
            ->setNivel($nivel)
            ->setPlazas($plazas)
            ->setMeses($meses)
            ->setVigente($vigente)
            ->setDesde($desde)
            ->setHasta($hasta)
            ->setFlgmodificable($flgmodificable)
            ->setDisp_desidi2($disp_desidi2)
            ->setProg_codnum($prog_codnum)
            ->setCen_codnum($cen_codnum)
            ->setNom_centro($nom_centro)
            ->setIdi_universidad($idi_universidad)
            ->setModo($modo)
            ->setIdiomas_nivel1($idiomas_nivel1)
            ->setIdiomas_nivel2($idiomas_nivel2)
            ->setIdiomas_nivel3($idiomas_nivel3)
            ->setNomcoordina($nomcoordina)
            ->setPromotor_ua($promotor_ua)
            ->setWeb_uni($web_uni)
            ->setWeb_oficina($web_oficina);
    }
    /**
     * Get tip_codnum value
     * @return string|null
     */
    public function getTip_codnum(): ?string
    {
        return $this->tip_codnum;
    }
    /**
     * Set tip_codnum value
     * @param string $tip_codnum
     * @return \StructType\ClaseConveMovilidad
     */
    public function setTip_codnum(?string $tip_codnum = null): self
    {
        // validation for constraint: string
        if (!is_null($tip_codnum) && !is_string($tip_codnum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tip_codnum, true), gettype($tip_codnum)), __LINE__);
        }
        $this->tip_codnum = $tip_codnum;
        
        return $this;
    }
    /**
     * Get uni_codalf value
     * @return string|null
     */
    public function getUni_codalf(): ?string
    {
        return $this->uni_codalf;
    }
    /**
     * Set uni_codalf value
     * @param string $uni_codalf
     * @return \StructType\ClaseConveMovilidad
     */
    public function setUni_codalf(?string $uni_codalf = null): self
    {
        // validation for constraint: string
        if (!is_null($uni_codalf) && !is_string($uni_codalf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uni_codalf, true), gettype($uni_codalf)), __LINE__);
        }
        $this->uni_codalf = $uni_codalf;
        
        return $this;
    }
    /**
     * Get pai_codalf value
     * @return string|null
     */
    public function getPai_codalf(): ?string
    {
        return $this->pai_codalf;
    }
    /**
     * Set pai_codalf value
     * @param string $pai_codalf
     * @return \StructType\ClaseConveMovilidad
     */
    public function setPai_codalf(?string $pai_codalf = null): self
    {
        // validation for constraint: string
        if (!is_null($pai_codalf) && !is_string($pai_codalf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pai_codalf, true), gettype($pai_codalf)), __LINE__);
        }
        $this->pai_codalf = $pai_codalf;
        
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
     * @return \StructType\ClaseConveMovilidad
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
     * Get nomuni value
     * @return string|null
     */
    public function getNomuni(): ?string
    {
        return $this->nomuni;
    }
    /**
     * Set nomuni value
     * @param string $nomuni
     * @return \StructType\ClaseConveMovilidad
     */
    public function setNomuni(?string $nomuni = null): self
    {
        // validation for constraint: string
        if (!is_null($nomuni) && !is_string($nomuni)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomuni, true), gettype($nomuni)), __LINE__);
        }
        $this->nomuni = $nomuni;
        
        return $this;
    }
    /**
     * Get are_codalf value
     * @return string|null
     */
    public function getAre_codalf(): ?string
    {
        return $this->are_codalf;
    }
    /**
     * Set are_codalf value
     * @param string $are_codalf
     * @return \StructType\ClaseConveMovilidad
     */
    public function setAre_codalf(?string $are_codalf = null): self
    {
        // validation for constraint: string
        if (!is_null($are_codalf) && !is_string($are_codalf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($are_codalf, true), gettype($are_codalf)), __LINE__);
        }
        $this->are_codalf = $are_codalf;
        
        return $this;
    }
    /**
     * Get desc_area_eng value
     * @return string|null
     */
    public function getDesc_area_eng(): ?string
    {
        return $this->desc_area_eng;
    }
    /**
     * Set desc_area_eng value
     * @param string $desc_area_eng
     * @return \StructType\ClaseConveMovilidad
     */
    public function setDesc_area_eng(?string $desc_area_eng = null): self
    {
        // validation for constraint: string
        if (!is_null($desc_area_eng) && !is_string($desc_area_eng)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desc_area_eng, true), gettype($desc_area_eng)), __LINE__);
        }
        $this->desc_area_eng = $desc_area_eng;
        
        return $this;
    }
    /**
     * Get desc_area_val value
     * @return string|null
     */
    public function getDesc_area_val(): ?string
    {
        return $this->desc_area_val;
    }
    /**
     * Set desc_area_val value
     * @param string $desc_area_val
     * @return \StructType\ClaseConveMovilidad
     */
    public function setDesc_area_val(?string $desc_area_val = null): self
    {
        // validation for constraint: string
        if (!is_null($desc_area_val) && !is_string($desc_area_val)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desc_area_val, true), gettype($desc_area_val)), __LINE__);
        }
        $this->desc_area_val = $desc_area_val;
        
        return $this;
    }
    /**
     * Get desc_area_cas value
     * @return string|null
     */
    public function getDesc_area_cas(): ?string
    {
        return $this->desc_area_cas;
    }
    /**
     * Set desc_area_cas value
     * @param string $desc_area_cas
     * @return \StructType\ClaseConveMovilidad
     */
    public function setDesc_area_cas(?string $desc_area_cas = null): self
    {
        // validation for constraint: string
        if (!is_null($desc_area_cas) && !is_string($desc_area_cas)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desc_area_cas, true), gettype($desc_area_cas)), __LINE__);
        }
        $this->desc_area_cas = $desc_area_cas;
        
        return $this;
    }
    /**
     * Get nivel value
     * @return string|null
     */
    public function getNivel(): ?string
    {
        return $this->nivel;
    }
    /**
     * Set nivel value
     * @param string $nivel
     * @return \StructType\ClaseConveMovilidad
     */
    public function setNivel(?string $nivel = null): self
    {
        // validation for constraint: string
        if (!is_null($nivel) && !is_string($nivel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nivel, true), gettype($nivel)), __LINE__);
        }
        $this->nivel = $nivel;
        
        return $this;
    }
    /**
     * Get plazas value
     * @return string|null
     */
    public function getPlazas(): ?string
    {
        return $this->plazas;
    }
    /**
     * Set plazas value
     * @param string $plazas
     * @return \StructType\ClaseConveMovilidad
     */
    public function setPlazas(?string $plazas = null): self
    {
        // validation for constraint: string
        if (!is_null($plazas) && !is_string($plazas)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plazas, true), gettype($plazas)), __LINE__);
        }
        $this->plazas = $plazas;
        
        return $this;
    }
    /**
     * Get meses value
     * @return string|null
     */
    public function getMeses(): ?string
    {
        return $this->meses;
    }
    /**
     * Set meses value
     * @param string $meses
     * @return \StructType\ClaseConveMovilidad
     */
    public function setMeses(?string $meses = null): self
    {
        // validation for constraint: string
        if (!is_null($meses) && !is_string($meses)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($meses, true), gettype($meses)), __LINE__);
        }
        $this->meses = $meses;
        
        return $this;
    }
    /**
     * Get vigente value
     * @return string|null
     */
    public function getVigente(): ?string
    {
        return $this->vigente;
    }
    /**
     * Set vigente value
     * @param string $vigente
     * @return \StructType\ClaseConveMovilidad
     */
    public function setVigente(?string $vigente = null): self
    {
        // validation for constraint: string
        if (!is_null($vigente) && !is_string($vigente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vigente, true), gettype($vigente)), __LINE__);
        }
        $this->vigente = $vigente;
        
        return $this;
    }
    /**
     * Get desde value
     * @return string|null
     */
    public function getDesde(): ?string
    {
        return $this->desde;
    }
    /**
     * Set desde value
     * @param string $desde
     * @return \StructType\ClaseConveMovilidad
     */
    public function setDesde(?string $desde = null): self
    {
        // validation for constraint: string
        if (!is_null($desde) && !is_string($desde)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desde, true), gettype($desde)), __LINE__);
        }
        $this->desde = $desde;
        
        return $this;
    }
    /**
     * Get hasta value
     * @return string|null
     */
    public function getHasta(): ?string
    {
        return $this->hasta;
    }
    /**
     * Set hasta value
     * @param string $hasta
     * @return \StructType\ClaseConveMovilidad
     */
    public function setHasta(?string $hasta = null): self
    {
        // validation for constraint: string
        if (!is_null($hasta) && !is_string($hasta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hasta, true), gettype($hasta)), __LINE__);
        }
        $this->hasta = $hasta;
        
        return $this;
    }
    /**
     * Get flgmodificable value
     * @return string|null
     */
    public function getFlgmodificable(): ?string
    {
        return $this->flgmodificable;
    }
    /**
     * Set flgmodificable value
     * @param string $flgmodificable
     * @return \StructType\ClaseConveMovilidad
     */
    public function setFlgmodificable(?string $flgmodificable = null): self
    {
        // validation for constraint: string
        if (!is_null($flgmodificable) && !is_string($flgmodificable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flgmodificable, true), gettype($flgmodificable)), __LINE__);
        }
        $this->flgmodificable = $flgmodificable;
        
        return $this;
    }
    /**
     * Get disp_desidi2 value
     * @return string|null
     */
    public function getDisp_desidi2(): ?string
    {
        return $this->disp_desidi2;
    }
    /**
     * Set disp_desidi2 value
     * @param string $disp_desidi2
     * @return \StructType\ClaseConveMovilidad
     */
    public function setDisp_desidi2(?string $disp_desidi2 = null): self
    {
        // validation for constraint: string
        if (!is_null($disp_desidi2) && !is_string($disp_desidi2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disp_desidi2, true), gettype($disp_desidi2)), __LINE__);
        }
        $this->disp_desidi2 = $disp_desidi2;
        
        return $this;
    }
    /**
     * Get prog_codnum value
     * @return string|null
     */
    public function getProg_codnum(): ?string
    {
        return $this->prog_codnum;
    }
    /**
     * Set prog_codnum value
     * @param string $prog_codnum
     * @return \StructType\ClaseConveMovilidad
     */
    public function setProg_codnum(?string $prog_codnum = null): self
    {
        // validation for constraint: string
        if (!is_null($prog_codnum) && !is_string($prog_codnum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prog_codnum, true), gettype($prog_codnum)), __LINE__);
        }
        $this->prog_codnum = $prog_codnum;
        
        return $this;
    }
    /**
     * Get cen_codnum value
     * @return string|null
     */
    public function getCen_codnum(): ?string
    {
        return $this->cen_codnum;
    }
    /**
     * Set cen_codnum value
     * @param string $cen_codnum
     * @return \StructType\ClaseConveMovilidad
     */
    public function setCen_codnum(?string $cen_codnum = null): self
    {
        // validation for constraint: string
        if (!is_null($cen_codnum) && !is_string($cen_codnum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cen_codnum, true), gettype($cen_codnum)), __LINE__);
        }
        $this->cen_codnum = $cen_codnum;
        
        return $this;
    }
    /**
     * Get nom_centro value
     * @return string|null
     */
    public function getNom_centro(): ?string
    {
        return $this->nom_centro;
    }
    /**
     * Set nom_centro value
     * @param string $nom_centro
     * @return \StructType\ClaseConveMovilidad
     */
    public function setNom_centro(?string $nom_centro = null): self
    {
        // validation for constraint: string
        if (!is_null($nom_centro) && !is_string($nom_centro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nom_centro, true), gettype($nom_centro)), __LINE__);
        }
        $this->nom_centro = $nom_centro;
        
        return $this;
    }
    /**
     * Get idi_universidad value
     * @return string|null
     */
    public function getIdi_universidad(): ?string
    {
        return $this->idi_universidad;
    }
    /**
     * Set idi_universidad value
     * @param string $idi_universidad
     * @return \StructType\ClaseConveMovilidad
     */
    public function setIdi_universidad(?string $idi_universidad = null): self
    {
        // validation for constraint: string
        if (!is_null($idi_universidad) && !is_string($idi_universidad)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idi_universidad, true), gettype($idi_universidad)), __LINE__);
        }
        $this->idi_universidad = $idi_universidad;
        
        return $this;
    }
    /**
     * Get modo value
     * @return string|null
     */
    public function getModo(): ?string
    {
        return $this->modo;
    }
    /**
     * Set modo value
     * @param string $modo
     * @return \StructType\ClaseConveMovilidad
     */
    public function setModo(?string $modo = null): self
    {
        // validation for constraint: string
        if (!is_null($modo) && !is_string($modo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modo, true), gettype($modo)), __LINE__);
        }
        $this->modo = $modo;
        
        return $this;
    }
    /**
     * Get idiomas_nivel1 value
     * @return string|null
     */
    public function getIdiomas_nivel1(): ?string
    {
        return $this->idiomas_nivel1;
    }
    /**
     * Set idiomas_nivel1 value
     * @param string $idiomas_nivel1
     * @return \StructType\ClaseConveMovilidad
     */
    public function setIdiomas_nivel1(?string $idiomas_nivel1 = null): self
    {
        // validation for constraint: string
        if (!is_null($idiomas_nivel1) && !is_string($idiomas_nivel1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idiomas_nivel1, true), gettype($idiomas_nivel1)), __LINE__);
        }
        $this->idiomas_nivel1 = $idiomas_nivel1;
        
        return $this;
    }
    /**
     * Get idiomas_nivel2 value
     * @return string|null
     */
    public function getIdiomas_nivel2(): ?string
    {
        return $this->idiomas_nivel2;
    }
    /**
     * Set idiomas_nivel2 value
     * @param string $idiomas_nivel2
     * @return \StructType\ClaseConveMovilidad
     */
    public function setIdiomas_nivel2(?string $idiomas_nivel2 = null): self
    {
        // validation for constraint: string
        if (!is_null($idiomas_nivel2) && !is_string($idiomas_nivel2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idiomas_nivel2, true), gettype($idiomas_nivel2)), __LINE__);
        }
        $this->idiomas_nivel2 = $idiomas_nivel2;
        
        return $this;
    }
    /**
     * Get idiomas_nivel3 value
     * @return string|null
     */
    public function getIdiomas_nivel3(): ?string
    {
        return $this->idiomas_nivel3;
    }
    /**
     * Set idiomas_nivel3 value
     * @param string $idiomas_nivel3
     * @return \StructType\ClaseConveMovilidad
     */
    public function setIdiomas_nivel3(?string $idiomas_nivel3 = null): self
    {
        // validation for constraint: string
        if (!is_null($idiomas_nivel3) && !is_string($idiomas_nivel3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idiomas_nivel3, true), gettype($idiomas_nivel3)), __LINE__);
        }
        $this->idiomas_nivel3 = $idiomas_nivel3;
        
        return $this;
    }
    /**
     * Get nomcoordina value
     * @return string|null
     */
    public function getNomcoordina(): ?string
    {
        return $this->nomcoordina;
    }
    /**
     * Set nomcoordina value
     * @param string $nomcoordina
     * @return \StructType\ClaseConveMovilidad
     */
    public function setNomcoordina(?string $nomcoordina = null): self
    {
        // validation for constraint: string
        if (!is_null($nomcoordina) && !is_string($nomcoordina)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomcoordina, true), gettype($nomcoordina)), __LINE__);
        }
        $this->nomcoordina = $nomcoordina;
        
        return $this;
    }
    /**
     * Get promotor_ua value
     * @return string|null
     */
    public function getPromotor_ua(): ?string
    {
        return $this->promotor_ua;
    }
    /**
     * Set promotor_ua value
     * @param string $promotor_ua
     * @return \StructType\ClaseConveMovilidad
     */
    public function setPromotor_ua(?string $promotor_ua = null): self
    {
        // validation for constraint: string
        if (!is_null($promotor_ua) && !is_string($promotor_ua)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotor_ua, true), gettype($promotor_ua)), __LINE__);
        }
        $this->promotor_ua = $promotor_ua;
        
        return $this;
    }
    /**
     * Get web_uni value
     * @return string|null
     */
    public function getWeb_uni(): ?string
    {
        return $this->web_uni;
    }
    /**
     * Set web_uni value
     * @param string $web_uni
     * @return \StructType\ClaseConveMovilidad
     */
    public function setWeb_uni(?string $web_uni = null): self
    {
        // validation for constraint: string
        if (!is_null($web_uni) && !is_string($web_uni)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($web_uni, true), gettype($web_uni)), __LINE__);
        }
        $this->web_uni = $web_uni;
        
        return $this;
    }
    /**
     * Get web_oficina value
     * @return string|null
     */
    public function getWeb_oficina(): ?string
    {
        return $this->web_oficina;
    }
    /**
     * Set web_oficina value
     * @param string $web_oficina
     * @return \StructType\ClaseConveMovilidad
     */
    public function setWeb_oficina(?string $web_oficina = null): self
    {
        // validation for constraint: string
        if (!is_null($web_oficina) && !is_string($web_oficina)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($web_oficina, true), gettype($web_oficina)), __LINE__);
        }
        $this->web_oficina = $web_oficina;
        
        return $this;
    }
}
