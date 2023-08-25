<?php
/**
 * OBCurrencyExchange5Test
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
 * OBCurrencyExchange5Test Class Doc Comment
 *
 * @category    Class
 * @description Set of elements used to provide details on the currency exchange.
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBCurrencyExchange5
 */
class OBCurrencyExchange5Test extends TestCase
{
    protected OBCurrencyExchange5|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBCurrencyExchange5::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBCurrencyExchange5::class));
        $this->assertInstanceOf(OBCurrencyExchange5::class, $this->object);
    }

    /**
     * Test attribute "sourceCurrency"
     *
     * @group unit
     * @small
     */
    public function testPropertySourceCurrency(): void
    {
        $this->markTestSkipped('Test for property sourceCurrency not implemented');
    }

    /**
     * Test attribute "targetCurrency"
     *
     * @group unit
     * @small
     */
    public function testPropertyTargetCurrency(): void
    {
        $this->markTestSkipped('Test for property targetCurrency not implemented');
    }

    /**
     * Test attribute "unitCurrency"
     *
     * @group unit
     * @small
     */
    public function testPropertyUnitCurrency(): void
    {
        $this->markTestSkipped('Test for property unitCurrency not implemented');
    }

    /**
     * Test attribute "exchangeRate"
     *
     * @group unit
     * @small
     */
    public function testPropertyExchangeRate(): void
    {
        $this->markTestSkipped('Test for property exchangeRate not implemented');
    }

    /**
     * Test attribute "contractIdentification"
     *
     * @group unit
     * @small
     */
    public function testPropertyContractIdentification(): void
    {
        $this->markTestSkipped('Test for property contractIdentification not implemented');
    }

    /**
     * Test attribute "quotationDate"
     *
     * @group unit
     * @small
     */
    public function testPropertyQuotationDate(): void
    {
        $this->markTestSkipped('Test for property quotationDate not implemented');
    }

    /**
     * Test attribute "instructedAmount"
     *
     * @group unit
     * @small
     */
    public function testPropertyInstructedAmount(): void
    {
        $this->markTestSkipped('Test for property instructedAmount not implemented');
    }
}