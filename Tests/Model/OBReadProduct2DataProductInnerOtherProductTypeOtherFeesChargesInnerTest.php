<?php
/**
 * OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerTest
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
 * OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerTest Class Doc Comment
 *
 * @category    Class
 * @description Contains details of fees and charges which are not associated with either Overdraft or features/benefits
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInner
 */
class OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerTest extends TestCase
{
    protected OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInner|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInner::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInner::class));
        $this->assertInstanceOf(OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInner::class, $this->object);
    }

    /**
     * Test attribute "tariffType"
     *
     * @group unit
     * @small
     */
    public function testPropertyTariffType(): void
    {
        $this->markTestSkipped('Test for property tariffType not implemented');
    }

    /**
     * Test attribute "tariffName"
     *
     * @group unit
     * @small
     */
    public function testPropertyTariffName(): void
    {
        $this->markTestSkipped('Test for property tariffName not implemented');
    }

    /**
     * Test attribute "otherTariffType"
     *
     * @group unit
     * @small
     */
    public function testPropertyOtherTariffType(): void
    {
        $this->markTestSkipped('Test for property otherTariffType not implemented');
    }

    /**
     * Test attribute "feeChargeDetail"
     *
     * @group unit
     * @small
     */
    public function testPropertyFeeChargeDetail(): void
    {
        $this->markTestSkipped('Test for property feeChargeDetail not implemented');
    }

    /**
     * Test attribute "feeChargeCap"
     *
     * @group unit
     * @small
     */
    public function testPropertyFeeChargeCap(): void
    {
        $this->markTestSkipped('Test for property feeChargeCap not implemented');
    }
}
