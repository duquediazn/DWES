<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseGrupoAsi ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseGrupoAsi extends AbstractStructArrayBase
{
    /**
     * The ClaseGrupoAsi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseGrupoAsi[]|null
     */
    protected ?array $ClaseGrupoAsi = null;
    /**
     * Constructor method for ArrayOfClaseGrupoAsi
     * @uses ArrayOfClaseGrupoAsi::setClaseGrupoAsi()
     * @param \StructType\ClaseGrupoAsi[] $claseGrupoAsi
     */
    public function __construct(?array $claseGrupoAsi = null)
    {
        $this
            ->setClaseGrupoAsi($claseGrupoAsi);
    }
    /**
     * Get ClaseGrupoAsi value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseGrupoAsi[]|null
     */
    public function getClaseGrupoAsi(): ?array
    {
        return $this->ClaseGrupoAsi ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseGrupoAsi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseGrupoAsi method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseGrupoAsiForArrayConstraintFromSetClaseGrupoAsi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseGrupoAsiClaseGrupoAsiItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseGrupoAsiClaseGrupoAsiItem instanceof \StructType\ClaseGrupoAsi) {
                $invalidValues[] = is_object($arrayOfClaseGrupoAsiClaseGrupoAsiItem) ? get_class($arrayOfClaseGrupoAsiClaseGrupoAsiItem) : sprintf('%s(%s)', gettype($arrayOfClaseGrupoAsiClaseGrupoAsiItem), var_export($arrayOfClaseGrupoAsiClaseGrupoAsiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseGrupoAsi property can only contain items of type \StructType\ClaseGrupoAsi, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseGrupoAsi value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseGrupoAsi[] $claseGrupoAsi
     * @return \ArrayType\ArrayOfClaseGrupoAsi
     */
    public function setClaseGrupoAsi(?array $claseGrupoAsi = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseGrupoAsiArrayErrorMessage = self::validateClaseGrupoAsiForArrayConstraintFromSetClaseGrupoAsi($claseGrupoAsi))) {
            throw new InvalidArgumentException($claseGrupoAsiArrayErrorMessage, __LINE__);
        }
        if (is_null($claseGrupoAsi) || (is_array($claseGrupoAsi) && empty($claseGrupoAsi))) {
            unset($this->ClaseGrupoAsi);
        } else {
            $this->ClaseGrupoAsi = $claseGrupoAsi;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseGrupoAsi|null
     */
    public function current(): ?\StructType\ClaseGrupoAsi
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseGrupoAsi|null
     */
    public function item($index): ?\StructType\ClaseGrupoAsi
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseGrupoAsi|null
     */
    public function first(): ?\StructType\ClaseGrupoAsi
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseGrupoAsi|null
     */
    public function last(): ?\StructType\ClaseGrupoAsi
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseGrupoAsi|null
     */
    public function offsetGet($offset): ?\StructType\ClaseGrupoAsi
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseGrupoAsi $item
     * @return \ArrayType\ArrayOfClaseGrupoAsi
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseGrupoAsi) {
            throw new InvalidArgumentException(sprintf('The ClaseGrupoAsi property can only contain items of type \StructType\ClaseGrupoAsi, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseGrupoAsi
     */
    public function getAttributeName(): string
    {
        return 'ClaseGrupoAsi';
    }
}
