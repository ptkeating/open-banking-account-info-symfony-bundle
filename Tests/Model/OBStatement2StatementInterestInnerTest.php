<?php
/**
 * OBStatement2StatementInterestInnerTest
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
 * OBStatement2StatementInterestInnerTest Class Doc Comment
 *
 * @category    Class
 * @description Set of elements used to provide details of a generic interest amount related to the statement resource.
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBStatement2StatementInterestInner
 */
class OBStatement2StatementInterestInnerTest extends TestCase
{
    protected OBStatement2StatementInterestInner|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBStatement2StatementInterestInner::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBStatement2StatementInterestInner::class));
        $this->assertInstanceOf(OBStatement2StatementInterestInner::class, $this->object);
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
     * Test attribute "creditDebitIndicator"
     *
     * @group unit
     * @small
     */
    public function testPropertyCreditDebitIndicator(): void
    {
        $this->markTestSkipped('Test for property creditDebitIndicator not implemented');
    }

    /**
     * Test attribute "type"
     *
     * @group unit
     * @small
     */
    public function testPropertyType(): void
    {
        $this->markTestSkipped('Test for property type not implemented');
    }

    /**
     * Test attribute "rate"
     *
     * @group unit
     * @small
     */
    public function testPropertyRate(): void
    {
        $this->markTestSkipped('Test for property rate not implemented');
    }

    /**
     * Test attribute "rateType"
     *
     * @group unit
     * @small
     */
    public function testPropertyRateType(): void
    {
        $this->markTestSkipped('Test for property rateType not implemented');
    }

    /**
     * Test attribute "frequency"
     *
     * @group unit
     * @small
     */
    public function testPropertyFrequency(): void
    {
        $this->markTestSkipped('Test for property frequency not implemented');
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
}
