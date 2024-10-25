<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseConveMovilidad ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseConveMovilidad extends AbstractStructArrayBase
{
    /**
     * The ClaseConveMovilidad
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseConveMovilidad[]|null
     */
    protected ?array $ClaseConveMovilidad = null;
    /**
     * Constructor method for ArrayOfClaseConveMovilidad
     * @uses ArrayOfClaseConveMovilidad::setClaseConveMovilidad()
     * @param \StructType\ClaseConveMovilidad[] $claseConveMovilidad
     */
    public function __construct(?array $claseConveMovilidad = null)
    {
        $this
            ->setClaseConveMovilidad($claseConveMovilidad);
    }
    /**
     * Get ClaseConveMovilidad value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseConveMovilidad[]|null
     */
    public function getClaseConveMovilidad(): ?array
    {
        return $this->ClaseConveMovilidad ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseConveMovilidad method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseConveMovilidad method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseConveMovilidadForArrayConstraintFromSetClaseConveMovilidad(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseConveMovilidadClaseConveMovilidadItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseConveMovilidadClaseConveMovilidadItem instanceof \StructType\ClaseConveMovilidad) {
                $invalidValues[] = is_object($arrayOfClaseConveMovilidadClaseConveMovilidadItem) ? get_class($arrayOfClaseConveMovilidadClaseConveMovilidadItem) : sprintf('%s(%s)', gettype($arrayOfClaseConveMovilidadClaseConveMovilidadItem), var_export($arrayOfClaseConveMovilidadClaseConveMovilidadItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseConveMovilidad property can only contain items of type \StructType\ClaseConveMovilidad, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseConveMovilidad value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseConveMovilidad[] $claseConveMovilidad
     * @return \ArrayType\ArrayOfClaseConveMovilidad
     */
    public function setClaseConveMovilidad(?array $claseConveMovilidad = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseConveMovilidadArrayErrorMessage = self::validateClaseConveMovilidadForArrayConstraintFromSetClaseConveMovilidad($claseConveMovilidad))) {
            throw new InvalidArgumentException($claseConveMovilidadArrayErrorMessage, __LINE__);
        }
        if (is_null($claseConveMovilidad) || (is_array($claseConveMovilidad) && empty($claseConveMovilidad))) {
            unset($this->ClaseConveMovilidad);
        } else {
            $this->ClaseConveMovilidad = $claseConveMovilidad;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseConveMovilidad|null
     */
    public function current(): ?\StructType\ClaseConveMovilidad
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseConveMovilidad|null
     */
    public function item($index): ?\StructType\ClaseConveMovilidad
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseConveMovilidad|null
     */
    public function first(): ?\StructType\ClaseConveMovilidad
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseConveMovilidad|null
     */
    public function last(): ?\StructType\ClaseConveMovilidad
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseConveMovilidad|null
     */
    public function offsetGet($offset): ?\StructType\ClaseConveMovilidad
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseConveMovilidad $item
     * @return \ArrayType\ArrayOfClaseConveMovilidad
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseConveMovilidad) {
            throw new InvalidArgumentException(sprintf('The ClaseConveMovilidad property can only contain items of type \StructType\ClaseConveMovilidad, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseConveMovilidad
     */
    public function getAttributeName(): string
    {
        return 'ClaseConveMovilidad';
    }
}
