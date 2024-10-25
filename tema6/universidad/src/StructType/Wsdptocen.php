<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsdptocen StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsdptocen extends AbstractStructBase
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
     * The pcodcen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcodcen = null;
    /**
     * The pcoddep
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcoddep = null;
    /**
     * Constructor method for wsdptocen
     * @uses Wsdptocen::setPlengua()
     * @uses Wsdptocen::setPcodcen()
     * @uses Wsdptocen::setPcoddep()
     * @param string $plengua
     * @param string $pcodcen
     * @param string $pcoddep
     */
    public function __construct(?string $plengua = null, ?string $pcodcen = null, ?string $pcoddep = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcodcen($pcodcen)
            ->setPcoddep($pcoddep);
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
     * @return \StructType\Wsdptocen
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
     * @return \StructType\Wsdptocen
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
     * Get pcoddep value
     * @return string|null
     */
    public function getPcoddep(): ?string
    {
        return $this->pcoddep;
    }
    /**
     * Set pcoddep value
     * @param string $pcoddep
     * @return \StructType\Wsdptocen
     */
    public function setPcoddep(?string $pcoddep = null): self
    {
        // validation for constraint: string
        if (!is_null($pcoddep) && !is_string($pcoddep)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pcoddep, true), gettype($pcoddep)), __LINE__);
        }
        $this->pcoddep = $pcoddep;
        
        return $this;
    }
}
