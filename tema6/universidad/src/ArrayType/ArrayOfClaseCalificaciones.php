<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseCalificaciones ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseCalificaciones extends AbstractStructArrayBase
{
    /**
     * The ClaseCalificaciones
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseCalificaciones[]|null
     */
    protected ?array $ClaseCalificaciones = null;
    /**
     * Constructor method for ArrayOfClaseCalificaciones
     * @uses ArrayOfClaseCalificaciones::setClaseCalificaciones()
     * @param \StructType\ClaseCalificaciones[] $claseCalificaciones
     */
    public function __construct(?array $claseCalificaciones = null)
    {
        $this
            ->setClaseCalificaciones($claseCalificaciones);
    }
    /**
     * Get ClaseCalificaciones value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseCalificaciones[]|null
     */
    public function getClaseCalificaciones(): ?array
    {
        return $this->ClaseCalificaciones ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseCalificaciones method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseCalificaciones method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseCalificacionesForArrayConstraintFromSetClaseCalificaciones(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseCalificacionesClaseCalificacionesItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseCalificacionesClaseCalificacionesItem instanceof \StructType\ClaseCalificaciones) {
                $invalidValues[] = is_object($arrayOfClaseCalificacionesClaseCalificacionesItem) ? get_class($arrayOfClaseCalificacionesClaseCalificacionesItem) : sprintf('%s(%s)', gettype($arrayOfClaseCalificacionesClaseCalificacionesItem), var_export($arrayOfClaseCalificacionesClaseCalificacionesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseCalificaciones property can only contain items of type \StructType\ClaseCalificaciones, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseCalificaciones value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseCalificaciones[] $claseCalificaciones
     * @return \ArrayType\ArrayOfClaseCalificaciones
     */
    public function setClaseCalificaciones(?array $claseCalificaciones = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseCalificacionesArrayErrorMessage = self::validateClaseCalificacionesForArrayConstraintFromSetClaseCalificaciones($claseCalificaciones))) {
            throw new InvalidArgumentException($claseCalificacionesArrayErrorMessage, __LINE__);
        }
        if (is_null($claseCalificaciones) || (is_array($claseCalificaciones) && empty($claseCalificaciones))) {
            unset($this->ClaseCalificaciones);
        } else {
            $this->ClaseCalificaciones = $claseCalificaciones;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseCalificaciones|null
     */
    public function current(): ?\StructType\ClaseCalificaciones
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseCalificaciones|null
     */
    public function item($index): ?\StructType\ClaseCalificaciones
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseCalificaciones|null
     */
    public function first(): ?\StructType\ClaseCalificaciones
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseCalificaciones|null
     */
    public function last(): ?\StructType\ClaseCalificaciones
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseCalificaciones|null
     */
    public function offsetGet($offset): ?\StructType\ClaseCalificaciones
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseCalificaciones $item
     * @return \ArrayType\ArrayOfClaseCalificaciones
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseCalificaciones) {
            throw new InvalidArgumentException(sprintf('The ClaseCalificaciones property can only contain items of type \StructType\ClaseCalificaciones, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseCalificaciones
     */
    public function getAttributeName(): string
    {
        return 'ClaseCalificaciones';
    }
}
