<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseDptoCen ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseDptoCen extends AbstractStructArrayBase
{
    /**
     * The ClaseDptoCen
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseDptoCen[]|null
     */
    protected ?array $ClaseDptoCen = null;
    /**
     * Constructor method for ArrayOfClaseDptoCen
     * @uses ArrayOfClaseDptoCen::setClaseDptoCen()
     * @param \StructType\ClaseDptoCen[] $claseDptoCen
     */
    public function __construct(?array $claseDptoCen = null)
    {
        $this
            ->setClaseDptoCen($claseDptoCen);
    }
    /**
     * Get ClaseDptoCen value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseDptoCen[]|null
     */
    public function getClaseDptoCen(): ?array
    {
        return $this->ClaseDptoCen ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseDptoCen method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseDptoCen method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseDptoCenForArrayConstraintFromSetClaseDptoCen(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseDptoCenClaseDptoCenItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseDptoCenClaseDptoCenItem instanceof \StructType\ClaseDptoCen) {
                $invalidValues[] = is_object($arrayOfClaseDptoCenClaseDptoCenItem) ? get_class($arrayOfClaseDptoCenClaseDptoCenItem) : sprintf('%s(%s)', gettype($arrayOfClaseDptoCenClaseDptoCenItem), var_export($arrayOfClaseDptoCenClaseDptoCenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseDptoCen property can only contain items of type \StructType\ClaseDptoCen, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseDptoCen value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseDptoCen[] $claseDptoCen
     * @return \ArrayType\ArrayOfClaseDptoCen
     */
    public function setClaseDptoCen(?array $claseDptoCen = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseDptoCenArrayErrorMessage = self::validateClaseDptoCenForArrayConstraintFromSetClaseDptoCen($claseDptoCen))) {
            throw new InvalidArgumentException($claseDptoCenArrayErrorMessage, __LINE__);
        }
        if (is_null($claseDptoCen) || (is_array($claseDptoCen) && empty($claseDptoCen))) {
            unset($this->ClaseDptoCen);
        } else {
            $this->ClaseDptoCen = $claseDptoCen;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseDptoCen|null
     */
    public function current(): ?\StructType\ClaseDptoCen
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseDptoCen|null
     */
    public function item($index): ?\StructType\ClaseDptoCen
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseDptoCen|null
     */
    public function first(): ?\StructType\ClaseDptoCen
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseDptoCen|null
     */
    public function last(): ?\StructType\ClaseDptoCen
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseDptoCen|null
     */
    public function offsetGet($offset): ?\StructType\ClaseDptoCen
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseDptoCen $item
     * @return \ArrayType\ArrayOfClaseDptoCen
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseDptoCen) {
            throw new InvalidArgumentException(sprintf('The ClaseDptoCen property can only contain items of type \StructType\ClaseDptoCen, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseDptoCen
     */
    public function getAttributeName(): string
    {
        return 'ClaseDptoCen';
    }
}
