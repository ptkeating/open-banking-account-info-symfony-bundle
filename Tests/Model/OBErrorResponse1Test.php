<?php
/**
 * OBErrorResponse1Test
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
 * OBErrorResponse1Test Class Doc Comment
 *
 * @category    Class
 * @description An array of detail error codes, and messages, and URLs to documentation to help remediation.
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBErrorResponse1
 */
class OBErrorResponse1Test extends TestCase
{
    protected OBErrorResponse1|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBErrorResponse1::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBErrorResponse1::class));
        $this->assertInstanceOf(OBErrorResponse1::class, $this->object);
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
     * Test attribute "id"
     *
     * @group unit
     * @small
     */
    public function testPropertyId(): void
    {
        $this->markTestSkipped('Test for property id not implemented');
    }

    /**
     * Test attribute "message"
     *
     * @group unit
     * @small
     */
    public function testPropertyMessage(): void
    {
        $this->markTestSkipped('Test for property message not implemented');
    }

    /**
     * Test attribute "errors"
     *
     * @group unit
     * @small
     */
    public function testPropertyErrors(): void
    {
        $this->markTestSkipped('Test for property errors not implemented');
    }
}