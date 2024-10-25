<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsplanesdepResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsplanesdepResponse extends AbstractStructBase
{
    /**
     * The wsplanesdepResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClasePlanesDep|null
     */
    protected ?\ArrayType\ArrayOfClasePlanesDep $wsplanesdepResult = null;
    /**
     * Constructor method for wsplanesdepResponse
     * @uses WsplanesdepResponse::setWsplanesdepResult()
     * @param \ArrayType\ArrayOfClasePlanesDep $wsplanesdepResult
     */
    public function __construct(?\ArrayType\ArrayOfClasePlanesDep $wsplanesdepResult = null)
    {
        $this
            ->setWsplanesdepResult($wsplanesdepResult);
    }
    /**
     * Get wsplanesdepResult value
     * @return \ArrayType\ArrayOfClasePlanesDep|null
     */
    public function getWsplanesdepResult(): ?\ArrayType\ArrayOfClasePlanesDep
    {
        return $this->wsplanesdepResult;
    }
    /**
     * Set wsplanesdepResult value
     * @param \ArrayType\ArrayOfClasePlanesDep $wsplanesdepResult
     * @return \StructType\WsplanesdepResponse
     */
    public function setWsplanesdepResult(?\ArrayType\ArrayOfClasePlanesDep $wsplanesdepResult = null): self
    {
        $this->wsplanesdepResult = $wsplanesdepResult;
        
        return $this;
    }
}
