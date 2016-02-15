<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $MinActiveItemCount
 * @property string $ListTimeFrom
 * @property string $ListTimeTo
 * @property integer $SpacingIntervalInMinutes
 * @property integer $ListingHoldInventoryLevel
 */
class SellingManagerAutoListMinActiveItemsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'MinActiveItemCount' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinActiveItemCount'
        ],
        'ListTimeFrom' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListTimeFrom'
        ],
        'ListTimeTo' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListTimeTo'
        ],
        'SpacingIntervalInMinutes' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SpacingIntervalInMinutes'
        ],
        'ListingHoldInventoryLevel' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingHoldInventoryLevel'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}