<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaseDatosAsig ArrayType
 * @subpackage Arrays
 */
class ArrayOfClaseDatosAsig extends AbstractStructArrayBase
{
    /**
     * The ClaseDatosAsig
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaseDatosAsig[]|null
     */
    protected ?array $ClaseDatosAsig = null;
    /**
     * Constructor method for ArrayOfClaseDatosAsig
     * @uses ArrayOfClaseDatosAsig::setClaseDatosAsig()
     * @param \StructType\ClaseDatosAsig[] $claseDatosAsig
     */
    public function __construct(?array $claseDatosAsig = null)
    {
        $this
            ->setClaseDatosAsig($claseDatosAsig);
    }
    /**
     * Get ClaseDatosAsig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaseDatosAsig[]|null
     */
    public function getClaseDatosAsig(): ?array
    {
        return $this->ClaseDatosAsig ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setClaseDatosAsig method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaseDatosAsig method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaseDatosAsigForArrayConstraintFromSetClaseDatosAsig(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaseDatosAsigClaseDatosAsigItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaseDatosAsigClaseDatosAsigItem instanceof \StructType\ClaseDatosAsig) {
                $invalidValues[] = is_object($arrayOfClaseDatosAsigClaseDatosAsigItem) ? get_class($arrayOfClaseDatosAsigClaseDatosAsigItem) : sprintf('%s(%s)', gettype($arrayOfClaseDatosAsigClaseDatosAsigItem), var_export($arrayOfClaseDatosAsigClaseDatosAsigItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaseDatosAsig property can only contain items of type \StructType\ClaseDatosAsig, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaseDatosAsig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaseDatosAsig[] $claseDatosAsig
     * @return \ArrayType\ArrayOfClaseDatosAsig
     */
    public function setClaseDatosAsig(?array $claseDatosAsig = null): self
    {
        // validation for constraint: array
        if ('' !== ($claseDatosAsigArrayErrorMessage = self::validateClaseDatosAsigForArrayConstraintFromSetClaseDatosAsig($claseDatosAsig))) {
            throw new InvalidArgumentException($claseDatosAsigArrayErrorMessage, __LINE__);
        }
        if (is_null($claseDatosAsig) || (is_array($claseDatosAsig) && empty($claseDatosAsig))) {
            unset($this->ClaseDatosAsig);
        } else {
            $this->ClaseDatosAsig = $claseDatosAsig;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaseDatosAsig|null
     */
    public function current(): ?\StructType\ClaseDatosAsig
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaseDatosAsig|null
     */
    public function item($index): ?\StructType\ClaseDatosAsig
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaseDatosAsig|null
     */
    public function first(): ?\StructType\ClaseDatosAsig
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaseDatosAsig|null
     */
    public function last(): ?\StructType\ClaseDatosAsig
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaseDatosAsig|null
     */
    public function offsetGet($offset): ?\StructType\ClaseDatosAsig
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaseDatosAsig $item
     * @return \ArrayType\ArrayOfClaseDatosAsig
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaseDatosAsig) {
            throw new InvalidArgumentException(sprintf('The ClaseDatosAsig property can only contain items of type \StructType\ClaseDatosAsig, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaseDatosAsig
     */
    public function getAttributeName(): string
    {
        return 'ClaseDatosAsig';
    }
}
