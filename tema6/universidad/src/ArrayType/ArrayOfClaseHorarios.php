<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseHorarios ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseHorarios extends AbstractStructArrayBase
{
    /**
     * The ClaseHorarios
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseHorarios[]|null
     */
    protected ?array $ClaseHorarios = null;
    /**
     * Constructor method for ArrayOfClaseHorarios
     * @uses ArrayOfClaseHorarios::setClaseHorarios()
     * @param \StructType\ClaseHorarios[] $claseHorarios
     */
    public function __construct(?array $claseHorarios = null)
    {
        $this
            ->setClaseHorarios($claseHorarios);
    }
    /**
     * Get ClaseHorarios value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseHorarios[]|null
     */
    public function getClaseHorarios(): ?array
    {
        return $this->ClaseHorarios ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseHorarios method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseHorarios method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseHorariosForArrayConstraintFromSetClaseHorarios(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseHorariosClaseHorariosItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseHorariosClaseHorariosItem instanceof \StructType\ClaseHorarios) {
                $invalidValues[] = is_object($arrayOfClaseHorariosClaseHorariosItem) ? get_class($arrayOfClaseHorariosClaseHorariosItem) : sprintf('%s(%s)', gettype($arrayOfClaseHorariosClaseHorariosItem), var_export($arrayOfClaseHorariosClaseHorariosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseHorarios property can only contain items of type \StructType\ClaseHorarios, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseHorarios value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseHorarios[] $claseHorarios
     * @return \ArrayType\ArrayOfClaseHorarios
     */
    public function setClaseHorarios(?array $claseHorarios = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseHorariosArrayErrorMessage = self::validateClaseHorariosForArrayConstraintFromSetClaseHorarios($claseHorarios))) {
            throw new InvalidArgumentException($claseHorariosArrayErrorMessage, __LINE__);
        }
        if (is_null($claseHorarios) || (is_array($claseHorarios) && empty($claseHorarios))) {
            unset($this->ClaseHorarios);
        } else {
            $this->ClaseHorarios = $claseHorarios;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseHorarios|null
     */
    public function current(): ?\StructType\ClaseHorarios
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseHorarios|null
     */
    public function item($index): ?\StructType\ClaseHorarios
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseHorarios|null
     */
    public function first(): ?\StructType\ClaseHorarios
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseHorarios|null
     */
    public function last(): ?\StructType\ClaseHorarios
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseHorarios|null
     */
    public function offsetGet($offset): ?\StructType\ClaseHorarios
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseHorarios $item
     * @return \ArrayType\ArrayOfClaseHorarios
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseHorarios) {
            throw new InvalidArgumentException(sprintf('The ClaseHorarios property can only contain items of type \StructType\ClaseHorarios, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseHorarios
     */
    public function getAttributeName(): string
    {
        return 'ClaseHorarios';
    }
}
