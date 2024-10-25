<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseAgrupaciones ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseAgrupaciones extends AbstractStructArrayBase
{
    /**
     * The ClaseAgrupaciones
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseAgrupaciones[]|null
     */
    protected ?array $ClaseAgrupaciones = null;
    /**
     * Constructor method for ArrayOfClaseAgrupaciones
     * @uses ArrayOfClaseAgrupaciones::setClaseAgrupaciones()
     * @param \StructType\ClaseAgrupaciones[] $claseAgrupaciones
     */
    public function __construct(?array $claseAgrupaciones = null)
    {
        $this
            ->setClaseAgrupaciones($claseAgrupaciones);
    }
    /**
     * Get ClaseAgrupaciones value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseAgrupaciones[]|null
     */
    public function getClaseAgrupaciones(): ?array
    {
        return $this->ClaseAgrupaciones ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseAgrupaciones method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseAgrupaciones method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseAgrupacionesForArrayConstraintFromSetClaseAgrupaciones(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseAgrupacionesClaseAgrupacionesItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseAgrupacionesClaseAgrupacionesItem instanceof \StructType\ClaseAgrupaciones) {
                $invalidValues[] = is_object($arrayOfClaseAgrupacionesClaseAgrupacionesItem) ? get_class($arrayOfClaseAgrupacionesClaseAgrupacionesItem) : sprintf('%s(%s)', gettype($arrayOfClaseAgrupacionesClaseAgrupacionesItem), var_export($arrayOfClaseAgrupacionesClaseAgrupacionesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseAgrupaciones property can only contain items of type \StructType\ClaseAgrupaciones, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseAgrupaciones value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseAgrupaciones[] $claseAgrupaciones
     * @return \ArrayType\ArrayOfClaseAgrupaciones
     */
    public function setClaseAgrupaciones(?array $claseAgrupaciones = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseAgrupacionesArrayErrorMessage = self::validateClaseAgrupacionesForArrayConstraintFromSetClaseAgrupaciones($claseAgrupaciones))) {
            throw new InvalidArgumentException($claseAgrupacionesArrayErrorMessage, __LINE__);
        }
        if (is_null($claseAgrupaciones) || (is_array($claseAgrupaciones) && empty($claseAgrupaciones))) {
            unset($this->ClaseAgrupaciones);
        } else {
            $this->ClaseAgrupaciones = $claseAgrupaciones;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseAgrupaciones|null
     */
    public function current(): ?\StructType\ClaseAgrupaciones
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseAgrupaciones|null
     */
    public function item($index): ?\StructType\ClaseAgrupaciones
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseAgrupaciones|null
     */
    public function first(): ?\StructType\ClaseAgrupaciones
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseAgrupaciones|null
     */
    public function last(): ?\StructType\ClaseAgrupaciones
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseAgrupaciones|null
     */
    public function offsetGet($offset): ?\StructType\ClaseAgrupaciones
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseAgrupaciones $item
     * @return \ArrayType\ArrayOfClaseAgrupaciones
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseAgrupaciones) {
            throw new InvalidArgumentException(sprintf('The ClaseAgrupaciones property can only contain items of type \StructType\ClaseAgrupaciones, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseAgrupaciones
     */
    public function getAttributeName(): string
    {
        return 'ClaseAgrupaciones';
    }
}
