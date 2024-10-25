<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseAsiPlan ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseAsiPlan extends AbstractStructArrayBase
{
    /**
     * The ClaseAsiPlan
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseAsiPlan[]|null
     */
    protected ?array $ClaseAsiPlan = null;
    /**
     * Constructor method for ArrayOfClaseAsiPlan
     * @uses ArrayOfClaseAsiPlan::setClaseAsiPlan()
     * @param \StructType\ClaseAsiPlan[] $claseAsiPlan
     */
    public function __construct(?array $claseAsiPlan = null)
    {
        $this
            ->setClaseAsiPlan($claseAsiPlan);
    }
    /**
     * Get ClaseAsiPlan value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseAsiPlan[]|null
     */
    public function getClaseAsiPlan(): ?array
    {
        return $this->ClaseAsiPlan ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseAsiPlan method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseAsiPlan method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseAsiPlanForArrayConstraintFromSetClaseAsiPlan(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseAsiPlanClaseAsiPlanItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseAsiPlanClaseAsiPlanItem instanceof \StructType\ClaseAsiPlan) {
                $invalidValues[] = is_object($arrayOfClaseAsiPlanClaseAsiPlanItem) ? get_class($arrayOfClaseAsiPlanClaseAsiPlanItem) : sprintf('%s(%s)', gettype($arrayOfClaseAsiPlanClaseAsiPlanItem), var_export($arrayOfClaseAsiPlanClaseAsiPlanItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseAsiPlan property can only contain items of type \StructType\ClaseAsiPlan, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseAsiPlan value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseAsiPlan[] $claseAsiPlan
     * @return \ArrayType\ArrayOfClaseAsiPlan
     */
    public function setClaseAsiPlan(?array $claseAsiPlan = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseAsiPlanArrayErrorMessage = self::validateClaseAsiPlanForArrayConstraintFromSetClaseAsiPlan($claseAsiPlan))) {
            throw new InvalidArgumentException($claseAsiPlanArrayErrorMessage, __LINE__);
        }
        if (is_null($claseAsiPlan) || (is_array($claseAsiPlan) && empty($claseAsiPlan))) {
            unset($this->ClaseAsiPlan);
        } else {
            $this->ClaseAsiPlan = $claseAsiPlan;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseAsiPlan|null
     */
    public function current(): ?\StructType\ClaseAsiPlan
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseAsiPlan|null
     */
    public function item($index): ?\StructType\ClaseAsiPlan
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseAsiPlan|null
     */
    public function first(): ?\StructType\ClaseAsiPlan
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseAsiPlan|null
     */
    public function last(): ?\StructType\ClaseAsiPlan
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseAsiPlan|null
     */
    public function offsetGet($offset): ?\StructType\ClaseAsiPlan
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseAsiPlan $item
     * @return \ArrayType\ArrayOfClaseAsiPlan
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseAsiPlan) {
            throw new InvalidArgumentException(sprintf('The ClaseAsiPlan property can only contain items of type \StructType\ClaseAsiPlan, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseAsiPlan
     */
    public function getAttributeName(): string
    {
        return 'ClaseAsiPlan';
    }
}
