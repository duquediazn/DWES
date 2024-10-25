<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseTitulosPropiosUni ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseTitulosPropiosUni extends AbstractStructArrayBase
{
    /**
     * The ClaseTitulosPropiosUni
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseTitulosPropiosUni[]|null
     */
    protected ?array $ClaseTitulosPropiosUni = null;
    /**
     * Constructor method for ArrayOfClaseTitulosPropiosUni
     * @uses ArrayOfClaseTitulosPropiosUni::setClaseTitulosPropiosUni()
     * @param \StructType\ClaseTitulosPropiosUni[] $claseTitulosPropiosUni
     */
    public function __construct(?array $claseTitulosPropiosUni = null)
    {
        $this
            ->setClaseTitulosPropiosUni($claseTitulosPropiosUni);
    }
    /**
     * Get ClaseTitulosPropiosUni value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseTitulosPropiosUni[]|null
     */
    public function getClaseTitulosPropiosUni(): ?array
    {
        return $this->ClaseTitulosPropiosUni ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseTitulosPropiosUni method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseTitulosPropiosUni method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseTitulosPropiosUniForArrayConstraintFromSetClaseTitulosPropiosUni(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseTitulosPropiosUniClaseTitulosPropiosUniItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseTitulosPropiosUniClaseTitulosPropiosUniItem instanceof \StructType\ClaseTitulosPropiosUni) {
                $invalidValues[] = is_object($arrayOfClaseTitulosPropiosUniClaseTitulosPropiosUniItem) ? get_class($arrayOfClaseTitulosPropiosUniClaseTitulosPropiosUniItem) : sprintf('%s(%s)', gettype($arrayOfClaseTitulosPropiosUniClaseTitulosPropiosUniItem), var_export($arrayOfClaseTitulosPropiosUniClaseTitulosPropiosUniItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseTitulosPropiosUni property can only contain items of type \StructType\ClaseTitulosPropiosUni, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseTitulosPropiosUni value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseTitulosPropiosUni[] $claseTitulosPropiosUni
     * @return \ArrayType\ArrayOfClaseTitulosPropiosUni
     */
    public function setClaseTitulosPropiosUni(?array $claseTitulosPropiosUni = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseTitulosPropiosUniArrayErrorMessage = self::validateClaseTitulosPropiosUniForArrayConstraintFromSetClaseTitulosPropiosUni($claseTitulosPropiosUni))) {
            throw new InvalidArgumentException($claseTitulosPropiosUniArrayErrorMessage, __LINE__);
        }
        if (is_null($claseTitulosPropiosUni) || (is_array($claseTitulosPropiosUni) && empty($claseTitulosPropiosUni))) {
            unset($this->ClaseTitulosPropiosUni);
        } else {
            $this->ClaseTitulosPropiosUni = $claseTitulosPropiosUni;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseTitulosPropiosUni|null
     */
    public function current(): ?\StructType\ClaseTitulosPropiosUni
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseTitulosPropiosUni|null
     */
    public function item($index): ?\StructType\ClaseTitulosPropiosUni
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseTitulosPropiosUni|null
     */
    public function first(): ?\StructType\ClaseTitulosPropiosUni
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseTitulosPropiosUni|null
     */
    public function last(): ?\StructType\ClaseTitulosPropiosUni
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseTitulosPropiosUni|null
     */
    public function offsetGet($offset): ?\StructType\ClaseTitulosPropiosUni
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseTitulosPropiosUni $item
     * @return \ArrayType\ArrayOfClaseTitulosPropiosUni
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseTitulosPropiosUni) {
            throw new InvalidArgumentException(sprintf('The ClaseTitulosPropiosUni property can only contain items of type \StructType\ClaseTitulosPropiosUni, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseTitulosPropiosUni
     */
    public function getAttributeName(): string
    {
        return 'ClaseTitulosPropiosUni';
    }
}
