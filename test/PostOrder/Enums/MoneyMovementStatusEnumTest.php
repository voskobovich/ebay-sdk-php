<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Enums;

use DTS\eBaySDK\PostOrder\Enums\MoneyMovementStatusEnum;

class MoneyMovementStatusEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MoneyMovementStatusEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Enums\MoneyMovementStatusEnum', $this->obj);
    }
}
