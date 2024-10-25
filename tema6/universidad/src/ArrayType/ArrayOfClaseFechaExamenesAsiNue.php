<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseFechaExamenesAsiNue ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseFechaExamenesAsiNue extends AbstractStructArrayBase
{
    /**
     * The ClaseFechaExamenesAsiNue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseFechaExamenesAsiNue[]|null
     */
    protected ?array $ClaseFechaExamenesAsiNue = null;
    /**
     * Constructor method for ArrayOfClaseFechaExamenesAsiNue
     * @uses ArrayOfClaseFechaExamenesAsiNue::setClaseFechaExamenesAsiNue()
     * @param \StructType\ClaseFechaExamenesAsiNue[] $claseFechaExamenesAsiNue
     */
    public function __construct(?array $claseFechaExamenesAsiNue = null)
    {
        $this
            ->setClaseFechaExamenesAsiNue($claseFechaExamenesAsiNue);
    }
    /**
     * Get ClaseFechaExamenesAsiNue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseFechaExamenesAsiNue[]|null
     */
    public function getClaseFechaExamenesAsiNue(): ?array
    {
        return $this->ClaseFechaExamenesAsiNue ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseFechaExamenesAsiNue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseFechaExamenesAsiNue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseFechaExamenesAsiNueForArrayConstraintFromSetClaseFechaExamenesAsiNue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseFechaExamenesAsiNueClaseFechaExamenesAsiNueItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseFechaExamenesAsiNueClaseFechaExamenesAsiNueItem instanceof \StructType\ClaseFechaExamenesAsiNue) {
                $invalidValues[] = is_object($arrayOfClaseFechaExamenesAsiNueClaseFechaExamenesAsiNueItem) ? get_class($arrayOfClaseFechaExamenesAsiNueClaseFechaExamenesAsiNueItem) : sprintf('%s(%s)', gettype($arrayOfClaseFechaExamenesAsiNueClaseFechaExamenesAsiNueItem), var_export($arrayOfClaseFechaExamenesAsiNueClaseFechaExamenesAsiNueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseFechaExamenesAsiNue property can only contain items of type \StructType\ClaseFechaExamenesAsiNue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseFechaExamenesAsiNue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseFechaExamenesAsiNue[] $claseFechaExamenesAsiNue
     * @return \ArrayType\ArrayOfClaseFechaExamenesAsiNue
     */
    public function setClaseFechaExamenesAsiNue(?array $claseFechaExamenesAsiNue = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseFechaExamenesAsiNueArrayErrorMessage = self::validateClaseFechaExamenesAsiNueForArrayConstraintFromSetClaseFechaExamenesAsiNue($claseFechaExamenesAsiNue))) {
            throw new InvalidArgumentException($claseFechaExamenesAsiNueArrayErrorMessage, __LINE__);
        }
        if (is_null($claseFechaExamenesAsiNue) || (is_array($claseFechaExamenesAsiNue) && empty($claseFechaExamenesAsiNue))) {
            unset($this->ClaseFechaExamenesAsiNue);
        } else {
            $this->ClaseFechaExamenesAsiNue = $claseFechaExamenesAsiNue;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseFechaExamenesAsiNue|null
     */
    public function current(): ?\StructType\ClaseFechaExamenesAsiNue
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseFechaExamenesAsiNue|null
     */
    public function item($index): ?\StructType\ClaseFechaExamenesAsiNue
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseFechaExamenesAsiNue|null
     */
    public function first(): ?\StructType\ClaseFechaExamenesAsiNue
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseFechaExamenesAsiNue|null
     */
    public function last(): ?\StructType\ClaseFechaExamenesAsiNue
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseFechaExamenesAsiNue|null
     */
    public function offsetGet($offset): ?\StructType\ClaseFechaExamenesAsiNue
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseFechaExamenesAsiNue $item
     * @return \ArrayType\ArrayOfClaseFechaExamenesAsiNue
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseFechaExamenesAsiNue) {
            throw new InvalidArgumentException(sprintf('The ClaseFechaExamenesAsiNue property can only contain items of type \StructType\ClaseFechaExamenesAsiNue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseFechaExamenesAsiNue
     */
    public function getAttributeName(): string
    {
        return 'ClaseFechaExamenesAsiNue';
    }
}
