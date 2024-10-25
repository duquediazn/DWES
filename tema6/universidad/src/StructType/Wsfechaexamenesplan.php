<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsfechaexamenesplan StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsfechaexamenesplan extends AbstractStructBase
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
     * The pcurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcurso = null;
    /**
     * The pcodconv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodconv = null;
    /**
     * The porden
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $porden = null;
    /**
     * Constructor method for wsfechaexamenesplan
     * @uses Wsfechaexamenesplan::setPlengua()
     * @uses Wsfechaexamenesplan::setPcodest()
     * @uses Wsfechaexamenesplan::setPcurso()
     * @uses Wsfechaexamenesplan::setPcodconv()
     * @uses Wsfechaexamenesplan::setPorden()
     * @param string $plengua
     * @param string $pcodest
     * @param string $pcurso
     * @param string $pcodconv
     * @param string $porden
     */
    public function __construct(?string $plengua = null, ?string $pcodest = null, ?string $pcurso = null, ?string $pcodconv = null, ?string $porden = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcodest($pcodest)
            ->setPcurso($pcurso)
            ->setPcodconv($pcodconv)
            ->setPorden($porden);
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
     * @return \StructType\Wsfechaexamenesplan
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
     * @return \StructType\Wsfechaexamenesplan
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
     * @return \StructType\Wsfechaexamenesplan
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
     * Get pcodconv value
     * @return string|null
     */
    public function getPcodconv(): ?string
    {
        return $this->pcodconv;
    }
    /**
     * Set pcodconv value
     * @param string $pcodconv
     * @return \StructType\Wsfechaexamenesplan
     */
    public function setPcodconv(?string $pcodconv = null): self
    {
        // validation for constraint: string
        if (!is_null($pcodconv) && !is_string($pcodconv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcodconv, true), gettype($pcodconv)), __LINE__);
        }
        $this->pcodconv = $pcodconv;
        
        return $this;
    }
    /**
     * Get porden value
     * @return string|null
     */
    public function getPorden(): ?string
    {
        return $this->porden;
    }
    /**
     * Set porden value
     * @param string $porden
     * @return \StructType\Wsfechaexamenesplan
     */
    public function setPorden(?string $porden = null): self
    {
        // validation for constraint: string
        if (!is_null($porden) && !is_string($porden)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($porden, true), gettype($porden)), __LINE__);
        }
        $this->porden = $porden;
        
        return $this;
    }
}
