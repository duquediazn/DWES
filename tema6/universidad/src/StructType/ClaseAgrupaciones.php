<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseAgrupaciones StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseAgrupaciones extends AbstractStructBase
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
     * The enlaceagrp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $enlaceagrp = null;
    /**
     * The codcen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codcen = null;
    /**
     * The desccen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $desccen = null;
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
     * The numcurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numcurso = null;
    /**
     * The nomturno
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomturno = null;
    /**
     * Constructor method for ClaseAgrupaciones
     * @uses ClaseAgrupaciones::setIdagrupa()
     * @uses ClaseAgrupaciones::setDescagr()
     * @uses ClaseAgrupaciones::setEnlaceagrp()
     * @uses ClaseAgrupaciones::setCodcen()
     * @uses ClaseAgrupaciones::setDesccen()
     * @uses ClaseAgrupaciones::setCodest()
     * @uses ClaseAgrupaciones::setNomest()
     * @uses ClaseAgrupaciones::setNumcurso()
     * @uses ClaseAgrupaciones::setNomturno()
     * @param string $idagrupa
     * @param string $descagr
     * @param string $enlaceagrp
     * @param string $codcen
     * @param string $desccen
     * @param string $codest
     * @param string $nomest
     * @param string $numcurso
     * @param string $nomturno
     */
    public function __construct(?string $idagrupa = null, ?string $descagr = null, ?string $enlaceagrp = null, ?string $codcen = null, ?string $desccen = null, ?string $codest = null, ?string $nomest = null, ?string $numcurso = null, ?string $nomturno = null)
    {
        $this
            ->setIdagrupa($idagrupa)
            ->setDescagr($descagr)
            ->setEnlaceagrp($enlaceagrp)
            ->setCodcen($codcen)
            ->setDesccen($desccen)
            ->setCodest($codest)
            ->setNomest($nomest)
            ->setNumcurso($numcurso)
            ->setNomturno($nomturno);
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
     * @return \StructType\ClaseAgrupaciones
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
     * @return \StructType\ClaseAgrupaciones
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
     * Get enlaceagrp value
     * @return string|null
     */
    public function getEnlaceagrp(): ?string
    {
        return $this->enlaceagrp;
    }
    /**
     * Set enlaceagrp value
     * @param string $enlaceagrp
     * @return \StructType\ClaseAgrupaciones
     */
    public function setEnlaceagrp(?string $enlaceagrp = null): self
    {
        // validation for constraint: string
        if (!is_null($enlaceagrp) && !is_string($enlaceagrp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enlaceagrp, true), gettype($enlaceagrp)), __LINE__);
        }
        $this->enlaceagrp = $enlaceagrp;
        
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
     * @return \StructType\ClaseAgrupaciones
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
     * Get desccen value
     * @return string|null
     */
    public function getDesccen(): ?string
    {
        return $this->desccen;
    }
    /**
     * Set desccen value
     * @param string $desccen
     * @return \StructType\ClaseAgrupaciones
     */
    public function setDesccen(?string $desccen = null): self
    {
        // validation for constraint: string
        if (!is_null($desccen) && !is_string($desccen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desccen, true), gettype($desccen)), __LINE__);
        }
        $this->desccen = $desccen;
        
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
     * @return \StructType\ClaseAgrupaciones
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
     * @return \StructType\ClaseAgrupaciones
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
     * @return \StructType\ClaseAgrupaciones
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
     * Get nomturno value
     * @return string|null
     */
    public function getNomturno(): ?string
    {
        return $this->nomturno;
    }
    /**
     * Set nomturno value
     * @param string $nomturno
     * @return \StructType\ClaseAgrupaciones
     */
    public function setNomturno(?string $nomturno = null): self
    {
        // validation for constraint: string
        if (!is_null($nomturno) && !is_string($nomturno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomturno, true), gettype($nomturno)), __LINE__);
        }
        $this->nomturno = $nomturno;
        
        return $this;
    }
}
