<?php
/**
 * OBActiveOrHistoricCurrencyAndAmount9Test
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
 * OBActiveOrHistoricCurrencyAndAmount9Test Class Doc Comment
 *
 * @category    Class
 * @description Amount of money in the cash transaction entry.
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBActiveOrHistoricCurrencyAndAmount9
 */
class OBActiveOrHistoricCurrencyAndAmount9Test extends TestCase
{
    protected OBActiveOrHistoricCurrencyAndAmount9|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBActiveOrHistoricCurrencyAndAmount9::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBActiveOrHistoricCurrencyAndAmount9::class));
        $this->assertInstanceOf(OBActiveOrHistoricCurrencyAndAmount9::class, $this->object);
    }

    /**
     * Test attribute "amount"
     *
     * @group unit
     * @small
     */
    public function testPropertyAmount(): void
    {
        $this->markTestSkipped('Test for property amount not implemented');
    }

    /**
     * Test attribute "currency"
     *
     * @group unit
     * @small
     */
    public function testPropertyCurrency(): void
    {
        $this->markTestSkipped('Test for property currency not implemented');
    }
}
