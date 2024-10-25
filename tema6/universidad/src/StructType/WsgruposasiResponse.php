<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsgruposasiResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsgruposasiResponse extends AbstractStructBase
{
    /**
     * The wsgruposasiResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseGrupoAsi|null
     */
    protected ?\ArrayType\ArrayOfClaseGrupoAsi $wsgruposasiResult = null;
    /**
     * Constructor method for wsgruposasiResponse
     * @uses WsgruposasiResponse::setWsgruposasiResult()
     * @param \ArrayType\ArrayOfClaseGrupoAsi $wsgruposasiResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseGrupoAsi $wsgruposasiResult = null)
    {
        $this
            ->setWsgruposasiResult($wsgruposasiResult);
    }
    /**
     * Get wsgruposasiResult value
     * @return \ArrayType\ArrayOfClaseGrupoAsi|null
     */
    public function getWsgruposasiResult(): ?\ArrayType\ArrayOfClaseGrupoAsi
    {
        return $this->wsgruposasiResult;
    }
    /**
     * Set wsgruposasiResult value
     * @param \ArrayType\ArrayOfClaseGrupoAsi $wsgruposasiResult
     * @return \StructType\WsgruposasiResponse
     */
    public function setWsgruposasiResult(?\ArrayType\ArrayOfClaseGrupoAsi $wsgruposasiResult = null): self
    {
        $this->wsgruposasiResult = $wsgruposasiResult;
        
        return $this;
    }
}
