<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseAsiDepto ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseAsiDepto extends AbstractStructArrayBase
{
    /**
     * The ClaseAsiDepto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseAsiDepto[]|null
     */
    protected ?array $ClaseAsiDepto = null;
    /**
     * Constructor method for ArrayOfClaseAsiDepto
     * @uses ArrayOfClaseAsiDepto::setClaseAsiDepto()
     * @param \StructType\ClaseAsiDepto[] $claseAsiDepto
     */
    public function __construct(?array $claseAsiDepto = null)
    {
        $this
            ->setClaseAsiDepto($claseAsiDepto);
    }
    /**
     * Get ClaseAsiDepto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseAsiDepto[]|null
     */
    public function getClaseAsiDepto(): ?array
    {
        return $this->ClaseAsiDepto ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseAsiDepto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseAsiDepto method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseAsiDeptoForArrayConstraintFromSetClaseAsiDepto(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseAsiDeptoClaseAsiDeptoItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseAsiDeptoClaseAsiDeptoItem instanceof \StructType\ClaseAsiDepto) {
                $invalidValues[] = is_object($arrayOfClaseAsiDeptoClaseAsiDeptoItem) ? get_class($arrayOfClaseAsiDeptoClaseAsiDeptoItem) : sprintf('%s(%s)', gettype($arrayOfClaseAsiDeptoClaseAsiDeptoItem), var_export($arrayOfClaseAsiDeptoClaseAsiDeptoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseAsiDepto property can only contain items of type \StructType\ClaseAsiDepto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseAsiDepto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseAsiDepto[] $claseAsiDepto
     * @return \ArrayType\ArrayOfClaseAsiDepto
     */
    public function setClaseAsiDepto(?array $claseAsiDepto = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseAsiDeptoArrayErrorMessage = self::validateClaseAsiDeptoForArrayConstraintFromSetClaseAsiDepto($claseAsiDepto))) {
            throw new InvalidArgumentException($claseAsiDeptoArrayErrorMessage, __LINE__);
        }
        if (is_null($claseAsiDepto) || (is_array($claseAsiDepto) && empty($claseAsiDepto))) {
            unset($this->ClaseAsiDepto);
        } else {
            $this->ClaseAsiDepto = $claseAsiDepto;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseAsiDepto|null
     */
    public function current(): ?\StructType\ClaseAsiDepto
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseAsiDepto|null
     */
    public function item($index): ?\StructType\ClaseAsiDepto
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseAsiDepto|null
     */
    public function first(): ?\StructType\ClaseAsiDepto
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseAsiDepto|null
     */
    public function last(): ?\StructType\ClaseAsiDepto
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseAsiDepto|null
     */
    public function offsetGet($offset): ?\StructType\ClaseAsiDepto
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseAsiDepto $item
     * @return \ArrayType\ArrayOfClaseAsiDepto
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseAsiDepto) {
            throw new InvalidArgumentException(sprintf('The ClaseAsiDepto property can only contain items of type \StructType\ClaseAsiDepto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseAsiDepto
     */
    public function getAttributeName(): string
    {
        return 'ClaseAsiDepto';
    }
}
