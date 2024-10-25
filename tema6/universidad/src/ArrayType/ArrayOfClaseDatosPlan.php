<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseDatosPlan ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseDatosPlan extends AbstractStructArrayBase
{
    /**
     * The ClaseDatosPlan
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseDatosPlan[]|null
     */
    protected ?array $ClaseDatosPlan = null;
    /**
     * Constructor method for ArrayOfClaseDatosPlan
     * @uses ArrayOfClaseDatosPlan::setClaseDatosPlan()
     * @param \StructType\ClaseDatosPlan[] $claseDatosPlan
     */
    public function __construct(?array $claseDatosPlan = null)
    {
        $this
            ->setClaseDatosPlan($claseDatosPlan);
    }
    /**
     * Get ClaseDatosPlan value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseDatosPlan[]|null
     */
    public function getClaseDatosPlan(): ?array
    {
        return $this->ClaseDatosPlan ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseDatosPlan method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseDatosPlan method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseDatosPlanForArrayConstraintFromSetClaseDatosPlan(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseDatosPlanClaseDatosPlanItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseDatosPlanClaseDatosPlanItem instanceof \StructType\ClaseDatosPlan) {
                $invalidValues[] = is_object($arrayOfClaseDatosPlanClaseDatosPlanItem) ? get_class($arrayOfClaseDatosPlanClaseDatosPlanItem) : sprintf('%s(%s)', gettype($arrayOfClaseDatosPlanClaseDatosPlanItem), var_export($arrayOfClaseDatosPlanClaseDatosPlanItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseDatosPlan property can only contain items of type \StructType\ClaseDatosPlan, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseDatosPlan value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseDatosPlan[] $claseDatosPlan
     * @return \ArrayType\ArrayOfClaseDatosPlan
     */
    public function setClaseDatosPlan(?array $claseDatosPlan = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseDatosPlanArrayErrorMessage = self::validateClaseDatosPlanForArrayConstraintFromSetClaseDatosPlan($claseDatosPlan))) {
            throw new InvalidArgumentException($claseDatosPlanArrayErrorMessage, __LINE__);
        }
        if (is_null($claseDatosPlan) || (is_array($claseDatosPlan) && empty($claseDatosPlan))) {
            unset($this->ClaseDatosPlan);
        } else {
            $this->ClaseDatosPlan = $claseDatosPlan;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseDatosPlan|null
     */
    public function current(): ?\StructType\ClaseDatosPlan
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseDatosPlan|null
     */
    public function item($index): ?\StructType\ClaseDatosPlan
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseDatosPlan|null
     */
    public function first(): ?\StructType\ClaseDatosPlan
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseDatosPlan|null
     */
    public function last(): ?\StructType\ClaseDatosPlan
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseDatosPlan|null
     */
    public function offsetGet($offset): ?\StructType\ClaseDatosPlan
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseDatosPlan $item
     * @return \ArrayType\ArrayOfClaseDatosPlan
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseDatosPlan) {
            throw new InvalidArgumentException(sprintf('The ClaseDatosPlan property can only contain items of type \StructType\ClaseDatosPlan, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseDatosPlan
     */
    public function getAttributeName(): string
    {
        return 'ClaseDatosPlan';
    }
}
