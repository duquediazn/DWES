<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wshorarioagrp StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wshorarioagrp extends AbstractStructBase
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
     * The pagrupa
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pagrupa = null;
    /**
     * Constructor method for wshorarioagrp
     * @uses Wshorarioagrp::setPlengua()
     * @uses Wshorarioagrp::setPcurso()
     * @uses Wshorarioagrp::setPagrupa()
     * @param string $plengua
     * @param string $pcurso
     * @param string $pagrupa
     */
    public function __construct(?string $plengua = null, ?string $pcurso = null, ?string $pagrupa = null)
    {
        $this
            ->setPlengua($plengua)
            ->setPcurso($pcurso)
            ->setPagrupa($pagrupa);
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
     * @return \StructType\Wshorarioagrp
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
     * @return \StructType\Wshorarioagrp
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
     * Get pagrupa value
     * @return string|null
     */
    public function getPagrupa(): ?string
    {
        return $this->pagrupa;
    }
    /**
     * Set pagrupa value
     * @param string $pagrupa
     * @return \StructType\Wshorarioagrp
     */
    public function setPagrupa(?string $pagrupa = null): self
    {
        // validation for constraint: string
        if (!is_null($pagrupa) && !is_string($pagrupa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pagrupa, true), gettype($pagrupa)), __LINE__);
        }
        $this->pagrupa = $pagrupa;
        
        return $this;
    }
}
