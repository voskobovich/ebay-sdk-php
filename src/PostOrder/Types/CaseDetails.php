<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property string $buyerFinalAcceptResolution
 * @property string $buyerInitExpectResolution
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $creationDate
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $escalationDate
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $expirationDate
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $lastBuyerRespDate
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $lastSellerRespDate
 * @property boolean $paypalPaid
 * @property \DTS\eBaySDK\PostOrder\Types\RefundAmounts $refundAmounts
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $refundDeadlineDate
 * @property \DTS\eBaySDK\PostOrder\Types\RefundType $refundType
 */
class CaseDetails extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerFinalAcceptResolution' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerFinalAcceptResolution'
        ],
        'buyerInitExpectResolution' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerInitExpectResolution'
        ],
        'creationDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'escalationDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalationDate'
        ],
        'expirationDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expirationDate'
        ],
        'lastBuyerRespDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastBuyerRespDate'
        ],
        'lastSellerRespDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastSellerRespDate'
        ],
        'paypalPaid' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paypalPaid'
        ],
        'refundAmounts' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\RefundAmounts',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundAmounts'
        ],
        'refundDeadlineDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundDeadlineDate'
        ],
        'refundType' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\RefundType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundType'
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