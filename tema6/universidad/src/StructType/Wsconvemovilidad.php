<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wsconvemovilidad StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Wsconvemovilidad extends AbstractStructBase
{
    /**
     * The ptipoflujo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ptipoflujo = null;
    /**
     * Constructor method for wsconvemovilidad
     * @uses Wsconvemovilidad::setPtipoflujo()
     * @param string $ptipoflujo
     */
    public function __construct(?string $ptipoflujo = null)
    {
        $this
            ->setPtipoflujo($ptipoflujo);
    }
    /**
     * Get ptipoflujo value
     * @return string|null
     */
    public function getPtipoflujo(): ?string
    {
        return $this->ptipoflujo;
    }
    /**
     * Set ptipoflujo value
     * @param string $ptipoflujo
     * @return \StructType\Wsconvemovilidad
     */
    public function setPtipoflujo(?string $ptipoflujo = null): self
    {
        // validation for constraint: string
        if (!is_null($ptipoflujo) && !is_string($ptipoflujo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ptipoflujo, true), gettype($ptipoflujo)), __LINE__);
        }
        $this->ptipoflujo = $ptipoflujo;
        
        return $this;
    }
}
