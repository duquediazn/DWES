<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wshorariosResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WshorariosResponse extends AbstractStructBase
{
    /**
     * The wshorariosResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseHorarios|null
     */
    protected ?\ArrayType\ArrayOfClaseHorarios $wshorariosResult = null;
    /**
     * Constructor method for wshorariosResponse
     * @uses WshorariosResponse::setWshorariosResult()
     * @param \ArrayType\ArrayOfClaseHorarios $wshorariosResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseHorarios $wshorariosResult = null)
    {
        $this
            ->setWshorariosResult($wshorariosResult);
    }
    /**
     * Get wshorariosResult value
     * @return \ArrayType\ArrayOfClaseHorarios|null
     */
    public function getWshorariosResult(): ?\ArrayType\ArrayOfClaseHorarios
    {
        return $this->wshorariosResult;
    }
    /**
     * Set wshorariosResult value
     * @param \ArrayType\ArrayOfClaseHorarios $wshorariosResult
     * @return \StructType\WshorariosResponse
     */
    public function setWshorariosResult(?\ArrayType\ArrayOfClaseHorarios $wshorariosResult = null): self
    {
        $this->wshorariosResult = $wshorariosResult;
        
        return $this;
    }
}
