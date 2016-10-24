<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property \DTS\eBaySDK\PostOrder\Types\Amount $claimAmount
 * @property string $extTransactionId
 * @property \DTS\eBaySDK\PostOrder\Enums\UserPartyEnum $initiator
 * @property \DTS\eBaySDK\PostOrder\Types\InquiryDetails $inquiryDetails
 * @property \DTS\eBaySDK\PostOrder\Types\ClaimHistoryResponse $inquiryHistoryDetails
 * @property string $inquiryId
 * @property integer $inquiryQuantity
 * @property \DTS\eBaySDK\PostOrder\Types\ItemDetails $itemDetails
 * @property string $itemId
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnAddress $returnDetails
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $sellerMakeItRightByDate
 * @property \DTS\eBaySDK\PostOrder\Types\Amount $shippingCost
 * @property string $status
 * @property string $transactionId
 * @property string $viewPPTrasanctionUrl
 */
class InquiryDetailsResponse extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'claimAmount' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'claimAmount'
        ],
        'extTransactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'extTransactionId'
        ],
        'initiator' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'initiator'
        ],
        'inquiryDetails' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\InquiryDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryDetails'
        ],
        'inquiryHistoryDetails' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ClaimHistoryResponse',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryHistoryDetails'
        ],
        'inquiryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryId'
        ],
        'inquiryQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryQuantity'
        ],
        'itemDetails' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ItemDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemDetails'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'returnDetails' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnAddress',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnDetails'
        ],
        'sellerMakeItRightByDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerMakeItRightByDate'
        ],
        'shippingCost' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCost'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ],
        'transactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionId'
        ],
        'viewPPTrasanctionUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'viewPPTrasanctionUrl'
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
