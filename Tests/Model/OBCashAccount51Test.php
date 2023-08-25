<?php
/**
 * OBCashAccount51Test
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
 * OBCashAccount51Test Class Doc Comment
 *
 * @category    Class
 * @description Provides the details to identify the beneficiary account.
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBCashAccount51
 */
class OBCashAccount51Test extends TestCase
{
    protected OBCashAccount51|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBCashAccount51::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBCashAccount51::class));
        $this->assertInstanceOf(OBCashAccount51::class, $this->object);
    }

    /**
     * Test attribute "schemeName"
     *
     * @group unit
     * @small
     */
    public function testPropertySchemeName(): void
    {
        $this->markTestSkipped('Test for property schemeName not implemented');
    }

    /**
     * Test attribute "identification"
     *
     * @group unit
     * @small
     */
    public function testPropertyIdentification(): void
    {
        $this->markTestSkipped('Test for property identification not implemented');
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
     * Test attribute "secondaryIdentification"
     *
     * @group unit
     * @small
     */
    public function testPropertySecondaryIdentification(): void
    {
        $this->markTestSkipped('Test for property secondaryIdentification not implemented');
    }
}
