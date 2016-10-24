<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property string $activity
 * @property \DTS\eBaySDK\PostOrder\Types\ResponseHistoryAttributesType $attributes
 * @property string $author
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $creationDate
 * @property string $fromState
 * @property string $notes
 * @property string $toState
 */
class ReturnResponseHistoryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'activity' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'activity'
        ],
        'attributes' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ResponseHistoryAttributesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'attributes'
        ],
        'author' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'author'
        ],
        'creationDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'fromState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fromState'
        ],
        'notes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'notes'
        ],
        'toState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'toState'
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
