<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsfechaexamenesasinueResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsfechaexamenesasinueResponse extends AbstractStructBase
{
    /**
     * The wsfechaexamenesasinueResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseFechaExamenesAsiNue|null
     */
    protected ?\ArrayType\ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult = null;
    /**
     * Constructor method for wsfechaexamenesasinueResponse
     * @uses WsfechaexamenesasinueResponse::setWsfechaexamenesasinueResult()
     * @param \ArrayType\ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult = null)
    {
        $this
            ->setWsfechaexamenesasinueResult($wsfechaexamenesasinueResult);
    }
    /**
     * Get wsfechaexamenesasinueResult value
     * @return \ArrayType\ArrayOfClaseFechaExamenesAsiNue|null
     */
    public function getWsfechaexamenesasinueResult(): ?\ArrayType\ArrayOfClaseFechaExamenesAsiNue
    {
        return $this->wsfechaexamenesasinueResult;
    }
    /**
     * Set wsfechaexamenesasinueResult value
     * @param \ArrayType\ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult
     * @return \StructType\WsfechaexamenesasinueResponse
     */
    public function setWsfechaexamenesasinueResult(?\ArrayType\ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult = null): self
    {
        $this->wsfechaexamenesasinueResult = $wsfechaexamenesasinueResult;
        
        return $this;
    }
}
