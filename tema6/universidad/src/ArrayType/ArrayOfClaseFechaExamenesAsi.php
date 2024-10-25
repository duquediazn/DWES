<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseFechaExamenesAsi ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseFechaExamenesAsi extends AbstractStructArrayBase
{
    /**
     * The ClaseFechaExamenesAsi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseFechaExamenesAsi[]|null
     */
    protected ?array $ClaseFechaExamenesAsi = null;
    /**
     * Constructor method for ArrayOfClaseFechaExamenesAsi
     * @uses ArrayOfClaseFechaExamenesAsi::setClaseFechaExamenesAsi()
     * @param \StructType\ClaseFechaExamenesAsi[] $claseFechaExamenesAsi
     */
    public function __construct(?array $claseFechaExamenesAsi = null)
    {
        $this
            ->setClaseFechaExamenesAsi($claseFechaExamenesAsi);
    }
    /**
     * Get ClaseFechaExamenesAsi value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseFechaExamenesAsi[]|null
     */
    public function getClaseFechaExamenesAsi(): ?array
    {
        return $this->ClaseFechaExamenesAsi ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseFechaExamenesAsi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseFechaExamenesAsi method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseFechaExamenesAsiForArrayConstraintFromSetClaseFechaExamenesAsi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseFechaExamenesAsiClaseFechaExamenesAsiItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseFechaExamenesAsiClaseFechaExamenesAsiItem instanceof \StructType\ClaseFechaExamenesAsi) {
                $invalidValues[] = is_object($arrayOfClaseFechaExamenesAsiClaseFechaExamenesAsiItem) ? get_class($arrayOfClaseFechaExamenesAsiClaseFechaExamenesAsiItem) : sprintf('%s(%s)', gettype($arrayOfClaseFechaExamenesAsiClaseFechaExamenesAsiItem), var_export($arrayOfClaseFechaExamenesAsiClaseFechaExamenesAsiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseFechaExamenesAsi property can only contain items of type \StructType\ClaseFechaExamenesAsi, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseFechaExamenesAsi value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseFechaExamenesAsi[] $claseFechaExamenesAsi
     * @return \ArrayType\ArrayOfClaseFechaExamenesAsi
     */
    public function setClaseFechaExamenesAsi(?array $claseFechaExamenesAsi = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseFechaExamenesAsiArrayErrorMessage = self::validateClaseFechaExamenesAsiForArrayConstraintFromSetClaseFechaExamenesAsi($claseFechaExamenesAsi))) {
            throw new InvalidArgumentException($claseFechaExamenesAsiArrayErrorMessage, __LINE__);
        }
        if (is_null($claseFechaExamenesAsi) || (is_array($claseFechaExamenesAsi) && empty($claseFechaExamenesAsi))) {
            unset($this->ClaseFechaExamenesAsi);
        } else {
            $this->ClaseFechaExamenesAsi = $claseFechaExamenesAsi;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseFechaExamenesAsi|null
     */
    public function current(): ?\StructType\ClaseFechaExamenesAsi
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseFechaExamenesAsi|null
     */
    public function item($index): ?\StructType\ClaseFechaExamenesAsi
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseFechaExamenesAsi|null
     */
    public function first(): ?\StructType\ClaseFechaExamenesAsi
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseFechaExamenesAsi|null
     */
    public function last(): ?\StructType\ClaseFechaExamenesAsi
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseFechaExamenesAsi|null
     */
    public function offsetGet($offset): ?\StructType\ClaseFechaExamenesAsi
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseFechaExamenesAsi $item
     * @return \ArrayType\ArrayOfClaseFechaExamenesAsi
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseFechaExamenesAsi) {
            throw new InvalidArgumentException(sprintf('The ClaseFechaExamenesAsi property can only contain items of type \StructType\ClaseFechaExamenesAsi, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseFechaExamenesAsi
     */
    public function getAttributeName(): string
    {
        return 'ClaseFechaExamenesAsi';
    }
}
