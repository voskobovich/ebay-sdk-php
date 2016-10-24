<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property \DTS\eBaySDK\PostOrder\Types\ClaimHistoryEventModel[] $history
 * @property \DTS\eBaySDK\PostOrder\Types\ShipmentTrackingDetailType $shipmentTrackingDetails
 */
class ClaimHistoryResponse extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'history' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ClaimHistoryEventModel',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'history'
        ],
        'shipmentTrackingDetails' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ShipmentTrackingDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipmentTrackingDetails'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://davidtsadler.com"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
