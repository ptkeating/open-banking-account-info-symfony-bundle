<?php
/**
 * OBOtherFeeChargeDetailTypeTest
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
 * OBOtherFeeChargeDetailTypeTest Class Doc Comment
 *
 * @category    Class
 * @description Other Fee/charge type which is not available in the standard code set
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBOtherFeeChargeDetailType
 */
class OBOtherFeeChargeDetailTypeTest extends TestCase
{
    protected OBOtherFeeChargeDetailType|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBOtherFeeChargeDetailType::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBOtherFeeChargeDetailType::class));
        $this->assertInstanceOf(OBOtherFeeChargeDetailType::class, $this->object);
    }

    /**
     * Test attribute "code"
     *
     * @group unit
     * @small
     */
    public function testPropertyCode(): void
    {
        $this->markTestSkipped('Test for property code not implemented');
    }

    /**
     * Test attribute "feeCategory"
     *
     * @group unit
     * @small
     */
    public function testPropertyFeeCategory(): void
    {
        $this->markTestSkipped('Test for property feeCategory not implemented');
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
}
