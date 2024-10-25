<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseTitulosUni ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseTitulosUni extends AbstractStructArrayBase
{
    /**
     * The ClaseTitulosUni
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseTitulosUni[]|null
     */
    protected ?array $ClaseTitulosUni = null;
    /**
     * Constructor method for ArrayOfClaseTitulosUni
     * @uses ArrayOfClaseTitulosUni::setClaseTitulosUni()
     * @param \StructType\ClaseTitulosUni[] $claseTitulosUni
     */
    public function __construct(?array $claseTitulosUni = null)
    {
        $this
            ->setClaseTitulosUni($claseTitulosUni);
    }
    /**
     * Get ClaseTitulosUni value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseTitulosUni[]|null
     */
    public function getClaseTitulosUni(): ?array
    {
        return $this->ClaseTitulosUni ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseTitulosUni method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseTitulosUni method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseTitulosUniForArrayConstraintFromSetClaseTitulosUni(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseTitulosUniClaseTitulosUniItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseTitulosUniClaseTitulosUniItem instanceof \StructType\ClaseTitulosUni) {
                $invalidValues[] = is_object($arrayOfClaseTitulosUniClaseTitulosUniItem) ? get_class($arrayOfClaseTitulosUniClaseTitulosUniItem) : sprintf('%s(%s)', gettype($arrayOfClaseTitulosUniClaseTitulosUniItem), var_export($arrayOfClaseTitulosUniClaseTitulosUniItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseTitulosUni property can only contain items of type \StructType\ClaseTitulosUni, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseTitulosUni value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseTitulosUni[] $claseTitulosUni
     * @return \ArrayType\ArrayOfClaseTitulosUni
     */
    public function setClaseTitulosUni(?array $claseTitulosUni = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseTitulosUniArrayErrorMessage = self::validateClaseTitulosUniForArrayConstraintFromSetClaseTitulosUni($claseTitulosUni))) {
            throw new InvalidArgumentException($claseTitulosUniArrayErrorMessage, __LINE__);
        }
        if (is_null($claseTitulosUni) || (is_array($claseTitulosUni) && empty($claseTitulosUni))) {
            unset($this->ClaseTitulosUni);
        } else {
            $this->ClaseTitulosUni = $claseTitulosUni;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseTitulosUni|null
     */
    public function current(): ?\StructType\ClaseTitulosUni
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseTitulosUni|null
     */
    public function item($index): ?\StructType\ClaseTitulosUni
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseTitulosUni|null
     */
    public function first(): ?\StructType\ClaseTitulosUni
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseTitulosUni|null
     */
    public function last(): ?\StructType\ClaseTitulosUni
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseTitulosUni|null
     */
    public function offsetGet($offset): ?\StructType\ClaseTitulosUni
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseTitulosUni $item
     * @return \ArrayType\ArrayOfClaseTitulosUni
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseTitulosUni) {
            throw new InvalidArgumentException(sprintf('The ClaseTitulosUni property can only contain items of type \StructType\ClaseTitulosUni, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseTitulosUni
     */
    public function getAttributeName(): string
    {
        return 'ClaseTitulosUni';
    }
}
