<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseGrupoAsi StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseGrupoAsi extends AbstractStructBase
{
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
     * The turno
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $turno = null;
    /**
     * The idioma
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idioma = null;
    /**
     * The duracion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $duracion = null;
    /**
     * The idgrpactiv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idgrpactiv = null;
    /**
     * The descripcion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descripcion = null;
    /**
     * The claseactiv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $claseactiv = null;
    /**
     * The descactiv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descactiv = null;
    /**
     * The capacidadgrupo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $capacidadgrupo = null;
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
     * Constructor method for ClaseGrupoAsi
     * @uses ClaseGrupoAsi::setEjecodnum()
     * @uses ClaseGrupoAsi::setVaccodnum()
     * @uses ClaseGrupoAsi::setGaccodnum()
     * @uses ClaseGrupoAsi::setTurno()
     * @uses ClaseGrupoAsi::setIdioma()
     * @uses ClaseGrupoAsi::setDuracion()
     * @uses ClaseGrupoAsi::setIdgrpactiv()
     * @uses ClaseGrupoAsi::setDescripcion()
     * @uses ClaseGrupoAsi::setClaseactiv()
     * @uses ClaseGrupoAsi::setDescactiv()
     * @uses ClaseGrupoAsi::setCapacidadgrupo()
     * @uses ClaseGrupoAsi::setNodocodnum()
     * @uses ClaseGrupoAsi::setPlacodalf()
     * @param string $ejecodnum
     * @param string $vaccodnum
     * @param string $gaccodnum
     * @param string $turno
     * @param string $idioma
     * @param string $duracion
     * @param string $idgrpactiv
     * @param string $descripcion
     * @param string $claseactiv
     * @param string $descactiv
     * @param string $capacidadgrupo
     * @param string $nodocodnum
     * @param string $placodalf
     */
    public function __construct(?string $ejecodnum = null, ?string $vaccodnum = null, ?string $gaccodnum = null, ?string $turno = null, ?string $idioma = null, ?string $duracion = null, ?string $idgrpactiv = null, ?string $descripcion = null, ?string $claseactiv = null, ?string $descactiv = null, ?string $capacidadgrupo = null, ?string $nodocodnum = null, ?string $placodalf = null)
    {
        $this
            ->setEjecodnum($ejecodnum)
            ->setVaccodnum($vaccodnum)
            ->setGaccodnum($gaccodnum)
            ->setTurno($turno)
            ->setIdioma($idioma)
            ->setDuracion($duracion)
            ->setIdgrpactiv($idgrpactiv)
            ->setDescripcion($descripcion)
            ->setClaseactiv($claseactiv)
            ->setDescactiv($descactiv)
            ->setCapacidadgrupo($capacidadgrupo)
            ->setNodocodnum($nodocodnum)
            ->setPlacodalf($placodalf);
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
     * @return \StructType\ClaseGrupoAsi
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
     * @return \StructType\ClaseGrupoAsi
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
     * @return \StructType\ClaseGrupoAsi
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
     * @return \StructType\ClaseGrupoAsi
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
     * @return \StructType\ClaseGrupoAsi
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
     * @return \StructType\ClaseGrupoAsi
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
     * Get idgrpactiv value
     * @return string|null
     */
    public function getIdgrpactiv(): ?string
    {
        return $this->idgrpactiv;
    }
    /**
     * Set idgrpactiv value
     * @param string $idgrpactiv
     * @return \StructType\ClaseGrupoAsi
     */
    public function setIdgrpactiv(?string $idgrpactiv = null): self
    {
        // validation for constraint: string
        if (!is_null($idgrpactiv) && !is_string($idgrpactiv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idgrpactiv, true), gettype($idgrpactiv)), __LINE__);
        }
        $this->idgrpactiv = $idgrpactiv;
        
        return $this;
    }
    /**
     * Get descripcion value
     * @return string|null
     */
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }
    /**
     * Set descripcion value
     * @param string $descripcion
     * @return \StructType\ClaseGrupoAsi
     */
    public function setDescripcion(?string $descripcion = null): self
    {
        // validation for constraint: string
        if (!is_null($descripcion) && !is_string($descripcion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcion, true), gettype($descripcion)), __LINE__);
        }
        $this->descripcion = $descripcion;
        
        return $this;
    }
    /**
     * Get claseactiv value
     * @return string|null
     */
    public function getClaseactiv(): ?string
    {
        return $this->claseactiv;
    }
    /**
     * Set claseactiv value
     * @param string $claseactiv
     * @return \StructType\ClaseGrupoAsi
     */
    public function setClaseactiv(?string $claseactiv = null): self
    {
        // validation for constraint: string
        if (!is_null($claseactiv) && !is_string($claseactiv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($claseactiv, true), gettype($claseactiv)), __LINE__);
        }
        $this->claseactiv = $claseactiv;
        
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
     * @return \StructType\ClaseGrupoAsi
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
     * @return \StructType\ClaseGrupoAsi
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
     * @return \StructType\ClaseGrupoAsi
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
     * @return \StructType\ClaseGrupoAsi
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
