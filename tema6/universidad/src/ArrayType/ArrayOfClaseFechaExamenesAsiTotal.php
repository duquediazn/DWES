<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseFechaExamenesAsiTotal ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseFechaExamenesAsiTotal extends AbstractStructArrayBase
{
    /**
     * The ClaseFechaExamenesAsiTotal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseFechaExamenesAsiTotal[]|null
     */
    protected ?array $ClaseFechaExamenesAsiTotal = null;
    /**
     * Constructor method for ArrayOfClaseFechaExamenesAsiTotal
     * @uses ArrayOfClaseFechaExamenesAsiTotal::setClaseFechaExamenesAsiTotal()
     * @param \StructType\ClaseFechaExamenesAsiTotal[] $claseFechaExamenesAsiTotal
     */
    public function __construct(?array $claseFechaExamenesAsiTotal = null)
    {
        $this
            ->setClaseFechaExamenesAsiTotal($claseFechaExamenesAsiTotal);
    }
    /**
     * Get ClaseFechaExamenesAsiTotal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseFechaExamenesAsiTotal[]|null
     */
    public function getClaseFechaExamenesAsiTotal(): ?array
    {
        return $this->ClaseFechaExamenesAsiTotal ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseFechaExamenesAsiTotal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseFechaExamenesAsiTotal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseFechaExamenesAsiTotalForArrayConstraintFromSetClaseFechaExamenesAsiTotal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseFechaExamenesAsiTotalClaseFechaExamenesAsiTotalItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseFechaExamenesAsiTotalClaseFechaExamenesAsiTotalItem instanceof \StructType\ClaseFechaExamenesAsiTotal) {
                $invalidValues[] = is_object($arrayOfClaseFechaExamenesAsiTotalClaseFechaExamenesAsiTotalItem) ? get_class($arrayOfClaseFechaExamenesAsiTotalClaseFechaExamenesAsiTotalItem) : sprintf('%s(%s)', gettype($arrayOfClaseFechaExamenesAsiTotalClaseFechaExamenesAsiTotalItem), var_export($arrayOfClaseFechaExamenesAsiTotalClaseFechaExamenesAsiTotalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseFechaExamenesAsiTotal property can only contain items of type \StructType\ClaseFechaExamenesAsiTotal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseFechaExamenesAsiTotal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseFechaExamenesAsiTotal[] $claseFechaExamenesAsiTotal
     * @return \ArrayType\ArrayOfClaseFechaExamenesAsiTotal
     */
    public function setClaseFechaExamenesAsiTotal(?array $claseFechaExamenesAsiTotal = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseFechaExamenesAsiTotalArrayErrorMessage = self::validateClaseFechaExamenesAsiTotalForArrayConstraintFromSetClaseFechaExamenesAsiTotal($claseFechaExamenesAsiTotal))) {
            throw new InvalidArgumentException($claseFechaExamenesAsiTotalArrayErrorMessage, __LINE__);
        }
        if (is_null($claseFechaExamenesAsiTotal) || (is_array($claseFechaExamenesAsiTotal) && empty($claseFechaExamenesAsiTotal))) {
            unset($this->ClaseFechaExamenesAsiTotal);
        } else {
            $this->ClaseFechaExamenesAsiTotal = $claseFechaExamenesAsiTotal;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseFechaExamenesAsiTotal|null
     */
    public function current(): ?\StructType\ClaseFechaExamenesAsiTotal
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseFechaExamenesAsiTotal|null
     */
    public function item($index): ?\StructType\ClaseFechaExamenesAsiTotal
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseFechaExamenesAsiTotal|null
     */
    public function first(): ?\StructType\ClaseFechaExamenesAsiTotal
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseFechaExamenesAsiTotal|null
     */
    public function last(): ?\StructType\ClaseFechaExamenesAsiTotal
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseFechaExamenesAsiTotal|null
     */
    public function offsetGet($offset): ?\StructType\ClaseFechaExamenesAsiTotal
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseFechaExamenesAsiTotal $item
     * @return \ArrayType\ArrayOfClaseFechaExamenesAsiTotal
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseFechaExamenesAsiTotal) {
            throw new InvalidArgumentException(sprintf('The ClaseFechaExamenesAsiTotal property can only contain items of type \StructType\ClaseFechaExamenesAsiTotal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseFechaExamenesAsiTotal
     */
    public function getAttributeName(): string
    {
        return 'ClaseFechaExamenesAsiTotal';
    }
}
