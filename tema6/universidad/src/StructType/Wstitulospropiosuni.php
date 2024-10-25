<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wstitulospropiosuni StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wstitulospropiosuni extends AbstractStructBase
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
     * The ptipocurso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ptipocurso = null;
    /**
     * Constructor method for wstitulospropiosuni
     * @uses Wstitulospropiosuni::setPlengua()
     * @uses Wstitulospropiosuni::setPcurso()
     * @uses Wstitulospropiosuni::setPtipocurso()
     * @param string $plengua
     * @param string $pcurso
     * @param string $ptipocurso
     */
    public function __construct(?string $plengua = null, ?string $pcurso = null, ?string $ptipocurso = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcurso($pcurso)
            ->setPtipocurso($ptipocurso);
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
     * @return \StructType\Wstitulospropiosuni
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
     * @return \StructType\Wstitulospropiosuni
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
     * Get ptipocurso value
     * @return string|null
     */
    public function getPtipocurso(): ?string
    {
        return $this->ptipocurso;
    }
    /**
     * Set ptipocurso value
     * @param string $ptipocurso
     * @return \StructType\Wstitulospropiosuni
     */
    public function setPtipocurso(?string $ptipocurso = null): self
    {
        // validation for constraint: string
        if (!is_null($ptipocurso) && !is_string($ptipocurso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ptipocurso, true), gettype($ptipocurso)), __LINE__);
        }
        $this->ptipocurso = $ptipocurso;
        
        return $this;
    }
}
