<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseAreasDpto ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseAreasDpto extends AbstractStructArrayBase
{
    /**
     * The ClaseAreasDpto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseAreasDpto[]|null
     */
    protected ?array $ClaseAreasDpto = null;
    /**
     * Constructor method for ArrayOfClaseAreasDpto
     * @uses ArrayOfClaseAreasDpto::setClaseAreasDpto()
     * @param \StructType\ClaseAreasDpto[] $claseAreasDpto
     */
    public function __construct(?array $claseAreasDpto = null)
    {
        $this
            ->setClaseAreasDpto($claseAreasDpto);
    }
    /**
     * Get ClaseAreasDpto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseAreasDpto[]|null
     */
    public function getClaseAreasDpto(): ?array
    {
        return $this->ClaseAreasDpto ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseAreasDpto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseAreasDpto method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseAreasDptoForArrayConstraintFromSetClaseAreasDpto(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseAreasDptoClaseAreasDptoItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseAreasDptoClaseAreasDptoItem instanceof \StructType\ClaseAreasDpto) {
                $invalidValues[] = is_object($arrayOfClaseAreasDptoClaseAreasDptoItem) ? get_class($arrayOfClaseAreasDptoClaseAreasDptoItem) : sprintf('%s(%s)', gettype($arrayOfClaseAreasDptoClaseAreasDptoItem), var_export($arrayOfClaseAreasDptoClaseAreasDptoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseAreasDpto property can only contain items of type \StructType\ClaseAreasDpto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseAreasDpto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseAreasDpto[] $claseAreasDpto
     * @return \ArrayType\ArrayOfClaseAreasDpto
     */
    public function setClaseAreasDpto(?array $claseAreasDpto = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseAreasDptoArrayErrorMessage = self::validateClaseAreasDptoForArrayConstraintFromSetClaseAreasDpto($claseAreasDpto))) {
            throw new InvalidArgumentException($claseAreasDptoArrayErrorMessage, __LINE__);
        }
        if (is_null($claseAreasDpto) || (is_array($claseAreasDpto) && empty($claseAreasDpto))) {
            unset($this->ClaseAreasDpto);
        } else {
            $this->ClaseAreasDpto = $claseAreasDpto;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseAreasDpto|null
     */
    public function current(): ?\StructType\ClaseAreasDpto
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseAreasDpto|null
     */
    public function item($index): ?\StructType\ClaseAreasDpto
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseAreasDpto|null
     */
    public function first(): ?\StructType\ClaseAreasDpto
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseAreasDpto|null
     */
    public function last(): ?\StructType\ClaseAreasDpto
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseAreasDpto|null
     */
    public function offsetGet($offset): ?\StructType\ClaseAreasDpto
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseAreasDpto $item
     * @return \ArrayType\ArrayOfClaseAreasDpto
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseAreasDpto) {
            throw new InvalidArgumentException(sprintf('The ClaseAreasDpto property can only contain items of type \StructType\ClaseAreasDpto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseAreasDpto
     */
    public function getAttributeName(): string
    {
        return 'ClaseAreasDpto';
    }
}
