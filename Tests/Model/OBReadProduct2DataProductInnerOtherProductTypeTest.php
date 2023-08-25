<?php
/**
 * OBReadProduct2DataProductInnerOtherProductTypeTest
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
 * OBReadProduct2DataProductInnerOtherProductTypeTest Class Doc Comment
 *
 * @category    Class
 * @description Other product type details associated with the account.
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductType
 */
class OBReadProduct2DataProductInnerOtherProductTypeTest extends TestCase
{
    protected OBReadProduct2DataProductInnerOtherProductType|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBReadProduct2DataProductInnerOtherProductType::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBReadProduct2DataProductInnerOtherProductType::class));
        $this->assertInstanceOf(OBReadProduct2DataProductInnerOtherProductType::class, $this->object);
    }

    /**
     * Test attribute "name"
     *
     * @group unit
     * @small
     */
    public function testPropertyName(): void
    {
        $this->markTestSkipped('Test for property name not implemented');
    }

    /**
     * Test attribute "description"
     *
     * @group unit
     * @small
     */
    public function testPropertyDescription(): void
    {
        $this->markTestSkipped('Test for property description not implemented');
    }

    /**
     * Test attribute "productDetails"
     *
     * @group unit
     * @small
     */
    public function testPropertyProductDetails(): void
    {
        $this->markTestSkipped('Test for property productDetails not implemented');
    }

    /**
     * Test attribute "creditInterest"
     *
     * @group unit
     * @small
     */
    public function testPropertyCreditInterest(): void
    {
        $this->markTestSkipped('Test for property creditInterest not implemented');
    }

    /**
     * Test attribute "overdraft"
     *
     * @group unit
     * @small
     */
    public function testPropertyOverdraft(): void
    {
        $this->markTestSkipped('Test for property overdraft not implemented');
    }

    /**
     * Test attribute "loanInterest"
     *
     * @group unit
     * @small
     */
    public function testPropertyLoanInterest(): void
    {
        $this->markTestSkipped('Test for property loanInterest not implemented');
    }

    /**
     * Test attribute "repayment"
     *
     * @group unit
     * @small
     */
    public function testPropertyRepayment(): void
    {
        $this->markTestSkipped('Test for property repayment not implemented');
    }

    /**
     * Test attribute "otherFeesCharges"
     *
     * @group unit
     * @small
     */
    public function testPropertyOtherFeesCharges(): void
    {
        $this->markTestSkipped('Test for property otherFeesCharges not implemented');
    }

    /**
     * Test attribute "supplementaryData"
     *
     * @group unit
     * @small
     */
    public function testPropertySupplementaryData(): void
    {
        $this->markTestSkipped('Test for property supplementaryData not implemented');
    }
}