<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsdptocenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsdptocenResponse extends AbstractStructBase
{
    /**
     * The wsdptocenResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseDptoCen|null
     */
    protected ?\ArrayType\ArrayOfClaseDptoCen $wsdptocenResult = null;
    /**
     * Constructor method for wsdptocenResponse
     * @uses WsdptocenResponse::setWsdptocenResult()
     * @param \ArrayType\ArrayOfClaseDptoCen $wsdptocenResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseDptoCen $wsdptocenResult = null)
    {
        $this
            ->setWsdptocenResult($wsdptocenResult);
    }
    /**
     * Get wsdptocenResult value
     * @return \ArrayType\ArrayOfClaseDptoCen|null
     */
    public function getWsdptocenResult(): ?\ArrayType\ArrayOfClaseDptoCen
    {
        return $this->wsdptocenResult;
    }
    /**
     * Set wsdptocenResult value
     * @param \ArrayType\ArrayOfClaseDptoCen $wsdptocenResult
     * @return \StructType\WsdptocenResponse
     */
    public function setWsdptocenResult(?\ArrayType\ArrayOfClaseDptoCen $wsdptocenResult = null): self
    {
        $this->wsdptocenResult = $wsdptocenResult;
        
        return $this;
    }
}
