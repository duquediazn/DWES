<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseConvocatorias ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseConvocatorias extends AbstractStructArrayBase
{
    /**
     * The ClaseConvocatorias
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseConvocatorias[]|null
     */
    protected ?array $ClaseConvocatorias = null;
    /**
     * Constructor method for ArrayOfClaseConvocatorias
     * @uses ArrayOfClaseConvocatorias::setClaseConvocatorias()
     * @param \StructType\ClaseConvocatorias[] $claseConvocatorias
     */
    public function __construct(?array $claseConvocatorias = null)
    {
        $this
            ->setClaseConvocatorias($claseConvocatorias);
    }
    /**
     * Get ClaseConvocatorias value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseConvocatorias[]|null
     */
    public function getClaseConvocatorias(): ?array
    {
        return $this->ClaseConvocatorias ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseConvocatorias method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseConvocatorias method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseConvocatoriasForArrayConstraintFromSetClaseConvocatorias(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseConvocatoriasClaseConvocatoriasItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseConvocatoriasClaseConvocatoriasItem instanceof \StructType\ClaseConvocatorias) {
                $invalidValues[] = is_object($arrayOfClaseConvocatoriasClaseConvocatoriasItem) ? get_class($arrayOfClaseConvocatoriasClaseConvocatoriasItem) : sprintf('%s(%s)', gettype($arrayOfClaseConvocatoriasClaseConvocatoriasItem), var_export($arrayOfClaseConvocatoriasClaseConvocatoriasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseConvocatorias property can only contain items of type \StructType\ClaseConvocatorias, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseConvocatorias value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseConvocatorias[] $claseConvocatorias
     * @return \ArrayType\ArrayOfClaseConvocatorias
     */
    public function setClaseConvocatorias(?array $claseConvocatorias = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseConvocatoriasArrayErrorMessage = self::validateClaseConvocatoriasForArrayConstraintFromSetClaseConvocatorias($claseConvocatorias))) {
            throw new InvalidArgumentException($claseConvocatoriasArrayErrorMessage, __LINE__);
        }
        if (is_null($claseConvocatorias) || (is_array($claseConvocatorias) && empty($claseConvocatorias))) {
            unset($this->ClaseConvocatorias);
        } else {
            $this->ClaseConvocatorias = $claseConvocatorias;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseConvocatorias|null
     */
    public function current(): ?\StructType\ClaseConvocatorias
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseConvocatorias|null
     */
    public function item($index): ?\StructType\ClaseConvocatorias
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseConvocatorias|null
     */
    public function first(): ?\StructType\ClaseConvocatorias
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseConvocatorias|null
     */
    public function last(): ?\StructType\ClaseConvocatorias
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseConvocatorias|null
     */
    public function offsetGet($offset): ?\StructType\ClaseConvocatorias
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseConvocatorias $item
     * @return \ArrayType\ArrayOfClaseConvocatorias
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseConvocatorias) {
            throw new InvalidArgumentException(sprintf('The ClaseConvocatorias property can only contain items of type \StructType\ClaseConvocatorias, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseConvocatorias
     */
    public function getAttributeName(): string
    {
        return 'ClaseConvocatorias';
    }
}
