<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClasePlanesDep ArrayType
 * @subpackage Arrays
 */
class ArrayOfClasePlanesDep extends AbstractStructArrayBase
{
    /**
     * The ClasePlanesDep
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClasePlanesDep[]|null
     */
    protected ?array $ClasePlanesDep = null;
    /**
     * Constructor method for ArrayOfClasePlanesDep
     * @uses ArrayOfClasePlanesDep::setClasePlanesDep()
     * @param \StructType\ClasePlanesDep[] $clasePlanesDep
     */
    public function __construct(?array $clasePlanesDep = null)
    {
        $this
            ->setClasePlanesDep($clasePlanesDep);
    }
    /**
     * Get ClasePlanesDep value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClasePlanesDep[]|null
     */
    public function getClasePlanesDep(): ?array
    {
        return $this->ClasePlanesDep ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClasePlanesDep method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClasePlanesDep method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClasePlanesDepForArrayConstraintFromSetClasePlanesDep(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClasePlanesDepClasePlanesDepItem) {
            // validation for constraint: itemType
            if (!$arrayOfClasePlanesDepClasePlanesDepItem instanceof \StructType\ClasePlanesDep) {
                $invalidValues[] = is_object($arrayOfClasePlanesDepClasePlanesDepItem) ? get_class($arrayOfClasePlanesDepClasePlanesDepItem) : sprintf('%s(%s)', gettype($arrayOfClasePlanesDepClasePlanesDepItem), var_export($arrayOfClasePlanesDepClasePlanesDepItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClasePlanesDep property can only contain items of type \StructType\ClasePlanesDep, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClasePlanesDep value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClasePlanesDep[] $clasePlanesDep
     * @return \ArrayType\ArrayOfClasePlanesDep
     */
    public function setClasePlanesDep(?array $clasePlanesDep = null): self
    {
        // validation for constraint: array
        if ('' !== ($clasePlanesDepArrayErrorMessage = self::validateClasePlanesDepForArrayConstraintFromSetClasePlanesDep($clasePlanesDep))) {
            throw new InvalidArgumentException($clasePlanesDepArrayErrorMessage, __LINE__);
        }
        if (is_null($clasePlanesDep) || (is_array($clasePlanesDep) && empty($clasePlanesDep))) {
            unset($this->ClasePlanesDep);
        } else {
            $this->ClasePlanesDep = $clasePlanesDep;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClasePlanesDep|null
     */
    public function current(): ?\StructType\ClasePlanesDep
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClasePlanesDep|null
     */
    public function item($index): ?\StructType\ClasePlanesDep
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClasePlanesDep|null
     */
    public function first(): ?\StructType\ClasePlanesDep
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClasePlanesDep|null
     */
    public function last(): ?\StructType\ClasePlanesDep
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClasePlanesDep|null
     */
    public function offsetGet($offset): ?\StructType\ClasePlanesDep
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClasePlanesDep $item
     * @return \ArrayType\ArrayOfClasePlanesDep
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClasePlanesDep) {
            throw new InvalidArgumentException(sprintf('The ClasePlanesDep property can only contain items of type \StructType\ClasePlanesDep, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClasePlanesDep
     */
    public function getAttributeName(): string
    {
        return 'ClasePlanesDep';
    }
}
