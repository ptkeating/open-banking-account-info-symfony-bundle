<?php
/**
 * OBReadConsent1DataTest
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
 * OBReadConsent1DataTest Class Doc Comment
 *
 * @category    Class
 * @description OBReadConsent1Data
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBReadConsent1Data
 */
class OBReadConsent1DataTest extends TestCase
{
    protected OBReadConsent1Data|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBReadConsent1Data::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBReadConsent1Data::class));
        $this->assertInstanceOf(OBReadConsent1Data::class, $this->object);
    }

    /**
     * Test attribute "permissions"
     *
     * @group unit
     * @small
     */
    public function testPropertyPermissions(): void
    {
        $this->markTestSkipped('Test for property permissions not implemented');
    }

    /**
     * Test attribute "expirationDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyExpirationDateTime(): void
    {
        $this->markTestSkipped('Test for property expirationDateTime not implemented');
    }

    /**
     * Test attribute "transactionFromDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyTransactionFromDateTime(): void
    {
        $this->markTestSkipped('Test for property transactionFromDateTime not implemented');
    }

    /**
     * Test attribute "transactionToDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyTransactionToDateTime(): void
    {
        $this->markTestSkipped('Test for property transactionToDateTime not implemented');
    }
}
