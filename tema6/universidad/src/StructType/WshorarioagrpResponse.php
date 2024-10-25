<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wshorarioagrpResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WshorarioagrpResponse extends AbstractStructBase
{
    /**
     * The wshorarioagrpResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfClaseHorarioAgrp|null
     */
    protected ?\ArrayType\ArrayOfClaseHorarioAgrp $wshorarioagrpResult = null;
    /**
     * Constructor method for wshorarioagrpResponse
     * @uses WshorarioagrpResponse::setWshorarioagrpResult()
     * @param \ArrayType\ArrayOfClaseHorarioAgrp $wshorarioagrpResult
     */
    public function __construct(?\ArrayType\ArrayOfClaseHorarioAgrp $wshorarioagrpResult = null)
    {
        $this
            ->setWshorarioagrpResult($wshorarioagrpResult);
    }
    /**
     * Get wshorarioagrpResult value
     * @return \ArrayType\ArrayOfClaseHorarioAgrp|null
     */
    public function getWshorarioagrpResult(): ?\ArrayType\ArrayOfClaseHorarioAgrp
    {
        return $this->wshorarioagrpResult;
    }
    /**
     * Set wshorarioagrpResult value
     * @param \ArrayType\ArrayOfClaseHorarioAgrp $wshorarioagrpResult
     * @return \StructType\WshorarioagrpResponse
     */
    public function setWshorarioagrpResult(?\ArrayType\ArrayOfClaseHorarioAgrp $wshorarioagrpResult = null): self
    {
        $this->wshorarioagrpResult = $wshorarioagrpResult;
        
        return $this;
    }
}
