<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wscalificacionesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WscalificacionesResponse extends AbstractStructBase
{
    /**
     * The wscalificacionesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseCalificaciones|null
     */
    protected ?\ArrayType\ArrayOfClaseCalificaciones $wscalificacionesResult = null;
    /**
     * Constructor method for wscalificacionesResponse
     * @uses WscalificacionesResponse::setWscalificacionesResult()
     * @param \ArrayType\ArrayOfClaseCalificaciones $wscalificacionesResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseCalificaciones $wscalificacionesResult = null)
    {
        $this
            ->setWscalificacionesResult($wscalificacionesResult);
    }
    /**
     * Get wscalificacionesResult value
     * @return \ArrayType\ArrayOfClaseCalificaciones|null
     */
    public function getWscalificacionesResult(): ?\ArrayType\ArrayOfClaseCalificaciones
    {
        return $this->wscalificacionesResult;
    }
    /**
     * Set wscalificacionesResult value
     * @param \ArrayType\ArrayOfClaseCalificaciones $wscalificacionesResult
     * @return \StructType\WscalificacionesResponse
     */
    public function setWscalificacionesResult(?\ArrayType\ArrayOfClaseCalificaciones $wscalificacionesResult = null): self
    {
        $this->wscalificacionesResult = $wscalificacionesResult;
        
        return $this;
    }
}
