<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseAsiPlan StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseAsiPlan extends AbstractStructBase
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
     * The tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tipo = null;
    /**
     * The ciclo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ciclo = null;
    /**
     * The curso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $curso = null;
    /**
     * The desccurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $desccurso = null;
    /**
     * The ofertada
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ofertada = null;
    /**
     * The docencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $docencia = null;
    /**
     * The complform
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $complform = null;
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
     * The crdtsects
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crdtsects = null;
    /**
     * The duracion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $duracion = null;
    /**
     * The tfg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tfg = null;
    /**
     * The estadoasi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $estadoasi = null;
    /**
     * Constructor method for ClaseAsiPlan
     * @uses ClaseAsiPlan::setCodest()
     * @uses ClaseAsiPlan::setCaca()
     * @uses ClaseAsiPlan::setCodasi()
     * @uses ClaseAsiPlan::setNomasi()
     * @uses ClaseAsiPlan::setNomasicorto()
     * @uses ClaseAsiPlan::setTipo()
     * @uses ClaseAsiPlan::setCiclo()
     * @uses ClaseAsiPlan::setCurso()
     * @uses ClaseAsiPlan::setDesccurso()
     * @uses ClaseAsiPlan::setOfertada()
     * @uses ClaseAsiPlan::setDocencia()
     * @uses ClaseAsiPlan::setComplform()
     * @uses ClaseAsiPlan::setCrdtsteo()
     * @uses ClaseAsiPlan::setCrdtspra()
     * @uses ClaseAsiPlan::setCrdtsects()
     * @uses ClaseAsiPlan::setDuracion()
     * @uses ClaseAsiPlan::setTfg()
     * @uses ClaseAsiPlan::setEstadoasi()
     * @param string $codest
     * @param string $caca
     * @param string $codasi
     * @param string $nomasi
     * @param string $nomasicorto
     * @param string $tipo
     * @param string $ciclo
     * @param string $curso
     * @param string $desccurso
     * @param string $ofertada
     * @param string $docencia
     * @param string $complform
     * @param string $crdtsteo
     * @param string $crdtspra
     * @param string $crdtsects
     * @param string $duracion
     * @param string $tfg
     * @param string $estadoasi
     */
    public function __construct(?string $codest = null, ?string $caca = null, ?string $codasi = null, ?string $nomasi = null, ?string $nomasicorto = null, ?string $tipo = null, ?string $ciclo = null, ?string $curso = null, ?string $desccurso = null, ?string $ofertada = null, ?string $docencia = null, ?string $complform = null, ?string $crdtsteo = null, ?string $crdtspra = null, ?string $crdtsects = null, ?string $duracion = null, ?string $tfg = null, ?string $estadoasi = null)
    {
        $this
            ->setCodest($codest)
            ->setCaca($caca)
            ->setCodasi($codasi)
            ->setNomasi($nomasi)
            ->setNomasicorto($nomasicorto)
            ->setTipo($tipo)
            ->setCiclo($ciclo)
            ->setCurso($curso)
            ->setDesccurso($desccurso)
            ->setOfertada($ofertada)
            ->setDocencia($docencia)
            ->setComplform($complform)
            ->setCrdtsteo($crdtsteo)
            ->setCrdtspra($crdtspra)
            ->setCrdtsects($crdtsects)
            ->setDuracion($duracion)
            ->setTfg($tfg)
            ->setEstadoasi($estadoasi);
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
     * @return \StructType\ClaseAsiPlan
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
     * @return \StructType\ClaseAsiPlan
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
     * @return \StructType\ClaseAsiPlan
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
     * @return \StructType\ClaseAsiPlan
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
     * @return \StructType\ClaseAsiPlan
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
     * @return \StructType\ClaseAsiPlan
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
     * Get ciclo value
     * @return string|null
     */
    public function getCiclo(): ?string
    {
        return $this->ciclo;
    }
    /**
     * Set ciclo value
     * @param string $ciclo
     * @return \StructType\ClaseAsiPlan
     */
    public function setCiclo(?string $ciclo = null): self
    {
        // validation for constraint: string
        if (!is_null($ciclo) && !is_string($ciclo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ciclo, true), gettype($ciclo)), __LINE__);
        }
        $this->ciclo = $ciclo;
        
        return $this;
    }
    /**
     * Get curso value
     * @return string|null
     */
    public function getCurso(): ?string
    {
        return $this->curso;
    }
    /**
     * Set curso value
     * @param string $curso
     * @return \StructType\ClaseAsiPlan
     */
    public function setCurso(?string $curso = null): self
    {
        // validation for constraint: string
        if (!is_null($curso) && !is_string($curso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($curso, true), gettype($curso)), __LINE__);
        }
        $this->curso = $curso;
        
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
     * @return \StructType\ClaseAsiPlan
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
     * Get ofertada value
     * @return string|null
     */
    public function getOfertada(): ?string
    {
        return $this->ofertada;
    }
    /**
     * Set ofertada value
     * @param string $ofertada
     * @return \StructType\ClaseAsiPlan
     */
    public function setOfertada(?string $ofertada = null): self
    {
        // validation for constraint: string
        if (!is_null($ofertada) && !is_string($ofertada)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ofertada, true), gettype($ofertada)), __LINE__);
        }
        $this->ofertada = $ofertada;
        
        return $this;
    }
    /**
     * Get docencia value
     * @return string|null
     */
    public function getDocencia(): ?string
    {
        return $this->docencia;
    }
    /**
     * Set docencia value
     * @param string $docencia
     * @return \StructType\ClaseAsiPlan
     */
    public function setDocencia(?string $docencia = null): self
    {
        // validation for constraint: string
        if (!is_null($docencia) && !is_string($docencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docencia, true), gettype($docencia)), __LINE__);
        }
        $this->docencia = $docencia;
        
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
     * @return \StructType\ClaseAsiPlan
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
     * @return \StructType\ClaseAsiPlan
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
     * @return \StructType\ClaseAsiPlan
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
     * Get crdtsects value
     * @return string|null
     */
    public function getCrdtsects(): ?string
    {
        return $this->crdtsects;
    }
    /**
     * Set crdtsects value
     * @param string $crdtsects
     * @return \StructType\ClaseAsiPlan
     */
    public function setCrdtsects(?string $crdtsects = null): self
    {
        // validation for constraint: string
        if (!is_null($crdtsects) && !is_string($crdtsects)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crdtsects, true), gettype($crdtsects)), __LINE__);
        }
        $this->crdtsects = $crdtsects;
        
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
     * @return \StructType\ClaseAsiPlan
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
     * @return \StructType\ClaseAsiPlan
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
     * Get estadoasi value
     * @return string|null
     */
    public function getEstadoasi(): ?string
    {
        return $this->estadoasi;
    }
    /**
     * Set estadoasi value
     * @param string $estadoasi
     * @return \StructType\ClaseAsiPlan
     */
    public function setEstadoasi(?string $estadoasi = null): self
    {
        // validation for constraint: string
        if (!is_null($estadoasi) && !is_string($estadoasi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estadoasi, true), gettype($estadoasi)), __LINE__);
        }
        $this->estadoasi = $estadoasi;
        
        return $this;
    }
}
