<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaseDptoCen StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClaseDptoCen extends AbstractStructBase
{
    /**
     * The codcen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codcen = null;
    /**
     * The coddep
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $coddep = null;
    /**
     * The nomdep
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomdep = null;
    /**
     * The emaildep
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $emaildep = null;
    /**
     * Constructor method for ClaseDptoCen
     * @uses ClaseDptoCen::setCodcen()
     * @uses ClaseDptoCen::setCoddep()
     * @uses ClaseDptoCen::setNomdep()
     * @uses ClaseDptoCen::setEmaildep()
     * @param string $codcen
     * @param string $coddep
     * @param string $nomdep
     * @param string $emaildep
     */
    public function __construct(?string $codcen = null, ?string $coddep = null, ?string $nomdep = null, ?string $emaildep = null)
    {
        $this
            ->setCodcen($codcen)
            ->setCoddep($coddep)
            ->setNomdep($nomdep)
            ->setEmaildep($emaildep);
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
     * @return \StructType\ClaseDptoCen
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
     * Get coddep value
     * @return string|null
     */
    public function getCoddep(): ?string
    {
        return $this->coddep;
    }
    /**
     * Set coddep value
     * @param string $coddep
     * @return \StructType\ClaseDptoCen
     */
    public function setCoddep(?string $coddep = null): self
    {
        // validation for constraint: string
        if (!is_null($coddep) && !is_string($coddep)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coddep, true), gettype($coddep)), __LINE__);
        }
        $this->coddep = $coddep;
        
        return $this;
    }
    /**
     * Get nomdep value
     * @return string|null
     */
    public function getNomdep(): ?string
    {
        return $this->nomdep;
    }
    /**
     * Set nomdep value
     * @param string $nomdep
     * @return \StructType\ClaseDptoCen
     */
    public function setNomdep(?string $nomdep = null): self
    {
        // validation for constraint: string
        if (!is_null($nomdep) && !is_string($nomdep)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomdep, true), gettype($nomdep)), __LINE__);
        }
        $this->nomdep = $nomdep;
        
        return $this;
    }
    /**
     * Get emaildep value
     * @return string|null
     */
    public function getEmaildep(): ?string
    {
        return $this->emaildep;
    }
    /**
     * Set emaildep value
     * @param string $emaildep
     * @return \StructType\ClaseDptoCen
     */
    public function setEmaildep(?string $emaildep = null): self
    {
        // validation for constraint: string
        if (!is_null($emaildep) && !is_string($emaildep)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emaildep, true), gettype($emaildep)), __LINE__);
        }
        $this->emaildep = $emaildep;
        
        return $this;
    }
}
