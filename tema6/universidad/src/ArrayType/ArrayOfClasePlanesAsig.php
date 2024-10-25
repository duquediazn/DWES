<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClasePlanesAsig ArrayType
 * @subpackage Arrays
 */
class ArrayOfClasePlanesAsig extends AbstractStructArrayBase
{
    /**
     * The ClasePlanesAsig
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClasePlanesAsig[]|null
     */
    protected ?array $ClasePlanesAsig = null;
    /**
     * Constructor method for ArrayOfClasePlanesAsig
     * @uses ArrayOfClasePlanesAsig::setClasePlanesAsig()
     * @param \StructType\ClasePlanesAsig[] $clasePlanesAsig
     */
    public function __construct(?array $clasePlanesAsig = null)
    {
        $this
            ->setClasePlanesAsig($clasePlanesAsig);
    }
    /**
     * Get ClasePlanesAsig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClasePlanesAsig[]|null
     */
    public function getClasePlanesAsig(): ?array
    {
        return $this->ClasePlanesAsig ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClasePlanesAsig method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClasePlanesAsig method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClasePlanesAsigForArrayConstraintFromSetClasePlanesAsig(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClasePlanesAsigClasePlanesAsigItem) {
            // validation for constraint: itemType
            if (!$arrayOfClasePlanesAsigClasePlanesAsigItem instanceof \StructType\ClasePlanesAsig) {
                $invalidValues[] = is_object($arrayOfClasePlanesAsigClasePlanesAsigItem) ? get_class($arrayOfClasePlanesAsigClasePlanesAsigItem) : sprintf('%s(%s)', gettype($arrayOfClasePlanesAsigClasePlanesAsigItem), var_export($arrayOfClasePlanesAsigClasePlanesAsigItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClasePlanesAsig property can only contain items of type \StructType\ClasePlanesAsig, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClasePlanesAsig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClasePlanesAsig[] $clasePlanesAsig
     * @return \ArrayType\ArrayOfClasePlanesAsig
     */
    public function setClasePlanesAsig(?array $clasePlanesAsig = null): self
    {
        // validation for constraint: array
        if ('' !== ($clasePlanesAsigArrayErrorMessage = self::validateClasePlanesAsigForArrayConstraintFromSetClasePlanesAsig($clasePlanesAsig))) {
            throw new InvalidArgumentException($clasePlanesAsigArrayErrorMessage, __LINE__);
        }
        if (is_null($clasePlanesAsig) || (is_array($clasePlanesAsig) && empty($clasePlanesAsig))) {
            unset($this->ClasePlanesAsig);
        } else {
            $this->ClasePlanesAsig = $clasePlanesAsig;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClasePlanesAsig|null
     */
    public function current(): ?\StructType\ClasePlanesAsig
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClasePlanesAsig|null
     */
    public function item($index): ?\StructType\ClasePlanesAsig
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClasePlanesAsig|null
     */
    public function first(): ?\StructType\ClasePlanesAsig
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClasePlanesAsig|null
     */
    public function last(): ?\StructType\ClasePlanesAsig
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClasePlanesAsig|null
     */
    public function offsetGet($offset): ?\StructType\ClasePlanesAsig
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClasePlanesAsig $item
     * @return \ArrayType\ArrayOfClasePlanesAsig
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClasePlanesAsig) {
            throw new InvalidArgumentException(sprintf('The ClasePlanesAsig property can only contain items of type \StructType\ClasePlanesAsig, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClasePlanesAsig
     */
    public function getAttributeName(): string
    {
        return 'ClasePlanesAsig';
    }
}
