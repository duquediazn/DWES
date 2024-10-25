<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsdatosplan StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsdatosplan extends AbstractStructBase
{
    /**
     * The plengua
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $plengua = null;
    /**
     * The pcodest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodest = null;
    /**
     * The ptipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ptipo = null;
    /**
     * The psubtipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $psubtipo = null;
    /**
     * The pcodcen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodcen = null;
    /**
     * The pcurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcurso = null;
    /**
     * The pflgmovil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pflgmovil = null;
    /**
     * Constructor method for wsdatosplan
     * @uses Wsdatosplan::setPlengua()
     * @uses Wsdatosplan::setPcodest()
     * @uses Wsdatosplan::setPtipo()
     * @uses Wsdatosplan::setPsubtipo()
     * @uses Wsdatosplan::setPcodcen()
     * @uses Wsdatosplan::setPcurso()
     * @uses Wsdatosplan::setPflgmovil()
     * @param string $plengua
     * @param string $pcodest
     * @param string $ptipo
     * @param string $psubtipo
     * @param string $pcodcen
     * @param string $pcurso
     * @param string $pflgmovil
     */
    public function __construct(?string $plengua = null, ?string $pcodest = null, ?string $ptipo = null, ?string $psubtipo = null, ?string $pcodcen = null, ?string $pcurso = null, ?string $pflgmovil = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcodest($pcodest)
            ->setPtipo($ptipo)
            ->setPsubtipo($psubtipo)
            ->setPcodcen($pcodcen)
            ->setPcurso($pcurso)
            ->setPflgmovil($pflgmovil);
    }
    /**
     * Get plengua value
     * @return string|null
     */
    public function getPlengua(): ?string
    {
        return $this->plengua;
    }
    /**
     * Set plengua value
     * @param string $plengua
     * @return \StructType\Wsdatosplan
     */
    public function setPlengua(?string $plengua = null): self
    {
        // validation for constraint: string
        if (!is_null($plengua) && !is_string($plengua)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plengua, true), gettype($plengua)), __LINE__);
        }
        $this->plengua = $plengua;
        
        return $this;
    }
    /**
     * Get pcodest value
     * @return string|null
     */
    public function getPcodest(): ?string
    {
        return $this->pcodest;
    }
    /**
     * Set pcodest value
     * @param string $pcodest
     * @return \StructType\Wsdatosplan
     */
    public function setPcodest(?string $pcodest = null): self
    {
        // validation for constraint: string
        if (!is_null($pcodest) && !is_string($pcodest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcodest, true), gettype($pcodest)), __LINE__);
        }
        $this->pcodest = $pcodest;
        
        return $this;
    }
    /**
     * Get ptipo value
     * @return string|null
     */
    public function getPtipo(): ?string
    {
        return $this->ptipo;
    }
    /**
     * Set ptipo value
     * @param string $ptipo
     * @return \StructType\Wsdatosplan
     */
    public function setPtipo(?string $ptipo = null): self
    {
        // validation for constraint: string
        if (!is_null($ptipo) && !is_string($ptipo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ptipo, true), gettype($ptipo)), __LINE__);
        }
        $this->ptipo = $ptipo;
        
        return $this;
    }
    /**
     * Get psubtipo value
     * @return string|null
     */
    public function getPsubtipo(): ?string
    {
        return $this->psubtipo;
    }
    /**
     * Set psubtipo value
     * @param string $psubtipo
     * @return \StructType\Wsdatosplan
     */
    public function setPsubtipo(?string $psubtipo = null): self
    {
        // validation for constraint: string
        if (!is_null($psubtipo) && !is_string($psubtipo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($psubtipo, true), gettype($psubtipo)), __LINE__);
        }
        $this->psubtipo = $psubtipo;
        
        return $this;
    }
    /**
     * Get pcodcen value
     * @return string|null
     */
    public function getPcodcen(): ?string
    {
        return $this->pcodcen;
    }
    /**
     * Set pcodcen value
     * @param string $pcodcen
     * @return \StructType\Wsdatosplan
     */
    public function setPcodcen(?string $pcodcen = null): self
    {
        // validation for constraint: string
        if (!is_null($pcodcen) && !is_string($pcodcen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcodcen, true), gettype($pcodcen)), __LINE__);
        }
        $this->pcodcen = $pcodcen;
        
        return $this;
    }
    /**
     * Get pcurso value
     * @return string|null
     */
    public function getPcurso(): ?string
    {
        return $this->pcurso;
    }
    /**
     * Set pcurso value
     * @param string $pcurso
     * @return \StructType\Wsdatosplan
     */
    public function setPcurso(?string $pcurso = null): self
    {
        // validation for constraint: string
        if (!is_null($pcurso) && !is_string($pcurso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcurso, true), gettype($pcurso)), __LINE__);
        }
        $this->pcurso = $pcurso;
        
        return $this;
    }
    /**
     * Get pflgmovil value
     * @return string|null
     */
    public function getPflgmovil(): ?string
    {
        return $this->pflgmovil;
    }
    /**
     * Set pflgmovil value
     * @param string $pflgmovil
     * @return \StructType\Wsdatosplan
     */
    public function setPflgmovil(?string $pflgmovil = null): self
    {
        // validation for constraint: string
        if (!is_null($pflgmovil) && !is_string($pflgmovil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pflgmovil, true), gettype($pflgmovil)), __LINE__);
        }
        $this->pflgmovil = $pflgmovil;
        
        return $this;
    }
}
