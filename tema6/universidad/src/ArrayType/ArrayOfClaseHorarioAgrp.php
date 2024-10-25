<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseHorarioAgrp ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseHorarioAgrp extends AbstractStructArrayBase
{
    /**
     * The ClaseHorarioAgrp
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseHorarioAgrp[]|null
     */
    protected ?array $ClaseHorarioAgrp = null;
    /**
     * Constructor method for ArrayOfClaseHorarioAgrp
     * @uses ArrayOfClaseHorarioAgrp::setClaseHorarioAgrp()
     * @param \StructType\ClaseHorarioAgrp[] $claseHorarioAgrp
     */
    public function __construct(?array $claseHorarioAgrp = null)
    {
        $this
            ->setClaseHorarioAgrp($claseHorarioAgrp);
    }
    /**
     * Get ClaseHorarioAgrp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseHorarioAgrp[]|null
     */
    public function getClaseHorarioAgrp(): ?array
    {
        return $this->ClaseHorarioAgrp ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseHorarioAgrp method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseHorarioAgrp method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseHorarioAgrpForArrayConstraintFromSetClaseHorarioAgrp(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseHorarioAgrpClaseHorarioAgrpItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseHorarioAgrpClaseHorarioAgrpItem instanceof \StructType\ClaseHorarioAgrp) {
                $invalidValues[] = is_object($arrayOfClaseHorarioAgrpClaseHorarioAgrpItem) ? get_class($arrayOfClaseHorarioAgrpClaseHorarioAgrpItem) : sprintf('%s(%s)', gettype($arrayOfClaseHorarioAgrpClaseHorarioAgrpItem), var_export($arrayOfClaseHorarioAgrpClaseHorarioAgrpItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseHorarioAgrp property can only contain items of type \StructType\ClaseHorarioAgrp, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseHorarioAgrp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseHorarioAgrp[] $claseHorarioAgrp
     * @return \ArrayType\ArrayOfClaseHorarioAgrp
     */
    public function setClaseHorarioAgrp(?array $claseHorarioAgrp = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseHorarioAgrpArrayErrorMessage = self::validateClaseHorarioAgrpForArrayConstraintFromSetClaseHorarioAgrp($claseHorarioAgrp))) {
            throw new InvalidArgumentException($claseHorarioAgrpArrayErrorMessage, __LINE__);
        }
        if (is_null($claseHorarioAgrp) || (is_array($claseHorarioAgrp) && empty($claseHorarioAgrp))) {
            unset($this->ClaseHorarioAgrp);
        } else {
            $this->ClaseHorarioAgrp = $claseHorarioAgrp;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseHorarioAgrp|null
     */
    public function current(): ?\StructType\ClaseHorarioAgrp
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseHorarioAgrp|null
     */
    public function item($index): ?\StructType\ClaseHorarioAgrp
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseHorarioAgrp|null
     */
    public function first(): ?\StructType\ClaseHorarioAgrp
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseHorarioAgrp|null
     */
    public function last(): ?\StructType\ClaseHorarioAgrp
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseHorarioAgrp|null
     */
    public function offsetGet($offset): ?\StructType\ClaseHorarioAgrp
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseHorarioAgrp $item
     * @return \ArrayType\ArrayOfClaseHorarioAgrp
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseHorarioAgrp) {
            throw new InvalidArgumentException(sprintf('The ClaseHorarioAgrp property can only contain items of type \StructType\ClaseHorarioAgrp, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseHorarioAgrp
     */
    public function getAttributeName(): string
    {
        return 'ClaseHorarioAgrp';
    }
}
