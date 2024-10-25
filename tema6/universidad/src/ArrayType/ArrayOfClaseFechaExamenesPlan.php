<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseFechaExamenesPlan ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseFechaExamenesPlan extends AbstractStructArrayBase
{
    /**
     * The ClaseFechaExamenesPlan
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseFechaExamenesPlan[]|null
     */
    protected ?array $ClaseFechaExamenesPlan = null;
    /**
     * Constructor method for ArrayOfClaseFechaExamenesPlan
     * @uses ArrayOfClaseFechaExamenesPlan::setClaseFechaExamenesPlan()
     * @param \StructType\ClaseFechaExamenesPlan[] $claseFechaExamenesPlan
     */
    public function __construct(?array $claseFechaExamenesPlan = null)
    {
        $this
            ->setClaseFechaExamenesPlan($claseFechaExamenesPlan);
    }
    /**
     * Get ClaseFechaExamenesPlan value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseFechaExamenesPlan[]|null
     */
    public function getClaseFechaExamenesPlan(): ?array
    {
        return $this->ClaseFechaExamenesPlan ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseFechaExamenesPlan method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseFechaExamenesPlan method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseFechaExamenesPlanForArrayConstraintFromSetClaseFechaExamenesPlan(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseFechaExamenesPlanClaseFechaExamenesPlanItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseFechaExamenesPlanClaseFechaExamenesPlanItem instanceof \StructType\ClaseFechaExamenesPlan) {
                $invalidValues[] = is_object($arrayOfClaseFechaExamenesPlanClaseFechaExamenesPlanItem) ? get_class($arrayOfClaseFechaExamenesPlanClaseFechaExamenesPlanItem) : sprintf('%s(%s)', gettype($arrayOfClaseFechaExamenesPlanClaseFechaExamenesPlanItem), var_export($arrayOfClaseFechaExamenesPlanClaseFechaExamenesPlanItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseFechaExamenesPlan property can only contain items of type \StructType\ClaseFechaExamenesPlan, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseFechaExamenesPlan value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseFechaExamenesPlan[] $claseFechaExamenesPlan
     * @return \ArrayType\ArrayOfClaseFechaExamenesPlan
     */
    public function setClaseFechaExamenesPlan(?array $claseFechaExamenesPlan = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseFechaExamenesPlanArrayErrorMessage = self::validateClaseFechaExamenesPlanForArrayConstraintFromSetClaseFechaExamenesPlan($claseFechaExamenesPlan))) {
            throw new InvalidArgumentException($claseFechaExamenesPlanArrayErrorMessage, __LINE__);
        }
        if (is_null($claseFechaExamenesPlan) || (is_array($claseFechaExamenesPlan) && empty($claseFechaExamenesPlan))) {
            unset($this->ClaseFechaExamenesPlan);
        } else {
            $this->ClaseFechaExamenesPlan = $claseFechaExamenesPlan;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseFechaExamenesPlan|null
     */
    public function current(): ?\StructType\ClaseFechaExamenesPlan
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseFechaExamenesPlan|null
     */
    public function item($index): ?\StructType\ClaseFechaExamenesPlan
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseFechaExamenesPlan|null
     */
    public function first(): ?\StructType\ClaseFechaExamenesPlan
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseFechaExamenesPlan|null
     */
    public function last(): ?\StructType\ClaseFechaExamenesPlan
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseFechaExamenesPlan|null
     */
    public function offsetGet($offset): ?\StructType\ClaseFechaExamenesPlan
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseFechaExamenesPlan $item
     * @return \ArrayType\ArrayOfClaseFechaExamenesPlan
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseFechaExamenesPlan) {
            throw new InvalidArgumentException(sprintf('The ClaseFechaExamenesPlan property can only contain items of type \StructType\ClaseFechaExamenesPlan, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseFechaExamenesPlan
     */
    public function getAttributeName(): string
    {
        return 'ClaseFechaExamenesPlan';
    }
}
