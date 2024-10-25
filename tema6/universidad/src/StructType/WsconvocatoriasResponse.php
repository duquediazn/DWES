<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsconvocatoriasResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsconvocatoriasResponse extends AbstractStructBase
{
    /**
     * The wsconvocatoriasResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseConvocatorias|null
     */
    protected ?\ArrayType\ArrayOfClaseConvocatorias $wsconvocatoriasResult = null;
    /**
     * Constructor method for wsconvocatoriasResponse
     * @uses WsconvocatoriasResponse::setWsconvocatoriasResult()
     * @param \ArrayType\ArrayOfClaseConvocatorias $wsconvocatoriasResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseConvocatorias $wsconvocatoriasResult = null)
    {
        $this
            ->setWsconvocatoriasResult($wsconvocatoriasResult);
    }
    /**
     * Get wsconvocatoriasResult value
     * @return \ArrayType\ArrayOfClaseConvocatorias|null
     */
    public function getWsconvocatoriasResult(): ?\ArrayType\ArrayOfClaseConvocatorias
    {
        return $this->wsconvocatoriasResult;
    }
    /**
     * Set wsconvocatoriasResult value
     * @param \ArrayType\ArrayOfClaseConvocatorias $wsconvocatoriasResult
     * @return \StructType\WsconvocatoriasResponse
     */
    public function setWsconvocatoriasResult(?\ArrayType\ArrayOfClaseConvocatorias $wsconvocatoriasResult = null): self
    {
        $this->wsconvocatoriasResult = $wsconvocatoriasResult;
        
        return $this;
    }
}
