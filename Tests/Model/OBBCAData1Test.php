<?php
/**
 * OBBCAData1Test
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
 * OBBCAData1Test Class Doc Comment
 *
 * @category    Class
 * @description OBBCAData1
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBBCAData1
 */
class OBBCAData1Test extends TestCase
{
    protected OBBCAData1|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBBCAData1::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBBCAData1::class));
        $this->assertInstanceOf(OBBCAData1::class, $this->object);
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
     * Test attribute "otherFeesCharges"
     *
     * @group unit
     * @small
     */
    public function testPropertyOtherFeesCharges(): void
    {
        $this->markTestSkipped('Test for property otherFeesCharges not implemented');
    }
}
