<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsareasdpto StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsareasdpto extends AbstractStructBase
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
     * The pcurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcurso = null;
    /**
     * The pcoddep
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pcoddep = null;
    /**
     * Constructor method for wsareasdpto
     * @uses Wsareasdpto::setPlengua()
     * @uses Wsareasdpto::setPcurso()
     * @uses Wsareasdpto::setPcoddep()
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcoddep
     */
    public function __construct(?string $plengua = null, ?string $pcurso = null, ?string $pcoddep = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcurso($pcurso)
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
     * @return \StructType\Wsareasdpto
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
     * @return \StructType\Wsareasdpto
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
     * @return \StructType\Wsareasdpto
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
