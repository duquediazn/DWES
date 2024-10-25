<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsconvemovilidadResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsconvemovilidadResponse extends AbstractStructBase
{
    /**
     * The wsconvemovilidadResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseConveMovilidad|null
     */
    protected ?\ArrayType\ArrayOfClaseConveMovilidad $wsconvemovilidadResult = null;
    /**
     * Constructor method for wsconvemovilidadResponse
     * @uses WsconvemovilidadResponse::setWsconvemovilidadResult()
     * @param \ArrayType\ArrayOfClaseConveMovilidad $wsconvemovilidadResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseConveMovilidad $wsconvemovilidadResult = null)
    {
        $this
            ->setWsconvemovilidadResult($wsconvemovilidadResult);
    }
    /**
     * Get wsconvemovilidadResult value
     * @return \ArrayType\ArrayOfClaseConveMovilidad|null
     */
    public function getWsconvemovilidadResult(): ?\ArrayType\ArrayOfClaseConveMovilidad
    {
        return $this->wsconvemovilidadResult;
    }
    /**
     * Set wsconvemovilidadResult value
     * @param \ArrayType\ArrayOfClaseConveMovilidad $wsconvemovilidadResult
     * @return \StructType\WsconvemovilidadResponse
     */
    public function setWsconvemovilidadResult(?\ArrayType\ArrayOfClaseConveMovilidad $wsconvemovilidadResult = null): self
    {
        $this->wsconvemovilidadResult = $wsconvemovilidadResult;
        
        return $this;
    }
}
