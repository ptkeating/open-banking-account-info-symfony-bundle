<?php
/**
 * OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentHolidayInnerTest
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Tests\Model
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Account and Transaction API Specification
 *
 * Swagger for Account and Transaction API Specification
 *
 * The version of the OpenAPI document: 3.1.11
 * Contact: ServiceDesk@openbanking.org.uk
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Model;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentHolidayInnerTest Class Doc Comment
 *
 * @category    Class
 * @description Details of capital repayment holiday if any
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentHolidayInner
 */
class OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentHolidayInnerTest extends TestCase
{
    protected OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentHolidayInner|MockObject $object;

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
         $this->object = $this->getMockBuilder(OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentHolidayInner::class)->getMockForAbstractClass();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * @group integration
     * @small
     */
    public function testTestClassExists(): void
    {
        $this->assertTrue(class_exists(OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentHolidayInner::class));
        $this->assertInstanceOf(OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentHolidayInner::class, $this->object);
    }

    /**
     * Test attribute "maxHolidayLength"
     *
     * @group unit
     * @small
     */
    public function testPropertyMaxHolidayLength(): void
    {
        $this->markTestSkipped('Test for property maxHolidayLength not implemented');
    }

    /**
     * Test attribute "maxHolidayPeriod"
     *
     * @group unit
     * @small
     */
    public function testPropertyMaxHolidayPeriod(): void
    {
        $this->markTestSkipped('Test for property maxHolidayPeriod not implemented');
    }

    /**
     * Test attribute "notes"
     *
     * @group unit
     * @small
     */
    public function testPropertyNotes(): void
    {
        $this->markTestSkipped('Test for property notes not implemented');
    }
}
