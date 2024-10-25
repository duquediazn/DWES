<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseDptoAsig ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseDptoAsig extends AbstractStructArrayBase
{
    /**
     * The ClaseDptoAsig
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseDptoAsig[]|null
     */
    protected ?array $ClaseDptoAsig = null;
    /**
     * Constructor method for ArrayOfClaseDptoAsig
     * @uses ArrayOfClaseDptoAsig::setClaseDptoAsig()
     * @param \StructType\ClaseDptoAsig[] $claseDptoAsig
     */
    public function __construct(?array $claseDptoAsig = null)
    {
        $this
            ->setClaseDptoAsig($claseDptoAsig);
    }
    /**
     * Get ClaseDptoAsig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseDptoAsig[]|null
     */
    public function getClaseDptoAsig(): ?array
    {
        return $this->ClaseDptoAsig ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseDptoAsig method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseDptoAsig method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseDptoAsigForArrayConstraintFromSetClaseDptoAsig(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseDptoAsigClaseDptoAsigItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseDptoAsigClaseDptoAsigItem instanceof \StructType\ClaseDptoAsig) {
                $invalidValues[] = is_object($arrayOfClaseDptoAsigClaseDptoAsigItem) ? get_class($arrayOfClaseDptoAsigClaseDptoAsigItem) : sprintf('%s(%s)', gettype($arrayOfClaseDptoAsigClaseDptoAsigItem), var_export($arrayOfClaseDptoAsigClaseDptoAsigItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseDptoAsig property can only contain items of type \StructType\ClaseDptoAsig, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseDptoAsig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseDptoAsig[] $claseDptoAsig
     * @return \ArrayType\ArrayOfClaseDptoAsig
     */
    public function setClaseDptoAsig(?array $claseDptoAsig = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseDptoAsigArrayErrorMessage = self::validateClaseDptoAsigForArrayConstraintFromSetClaseDptoAsig($claseDptoAsig))) {
            throw new InvalidArgumentException($claseDptoAsigArrayErrorMessage, __LINE__);
        }
        if (is_null($claseDptoAsig) || (is_array($claseDptoAsig) && empty($claseDptoAsig))) {
            unset($this->ClaseDptoAsig);
        } else {
            $this->ClaseDptoAsig = $claseDptoAsig;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseDptoAsig|null
     */
    public function current(): ?\StructType\ClaseDptoAsig
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseDptoAsig|null
     */
    public function item($index): ?\StructType\ClaseDptoAsig
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseDptoAsig|null
     */
    public function first(): ?\StructType\ClaseDptoAsig
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseDptoAsig|null
     */
    public function last(): ?\StructType\ClaseDptoAsig
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseDptoAsig|null
     */
    public function offsetGet($offset): ?\StructType\ClaseDptoAsig
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseDptoAsig $item
     * @return \ArrayType\ArrayOfClaseDptoAsig
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseDptoAsig) {
            throw new InvalidArgumentException(sprintf('The ClaseDptoAsig property can only contain items of type \StructType\ClaseDptoAsig, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseDptoAsig
     */
    public function getAttributeName(): string
    {
        return 'ClaseDptoAsig';
    }
}
