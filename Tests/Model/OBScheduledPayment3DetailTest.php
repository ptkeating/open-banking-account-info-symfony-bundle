<?php
/**
 * OBScheduledPayment3DetailTest
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
 * OBScheduledPayment3DetailTest Class Doc Comment
 *
 * @category    Class
 * @description OBScheduledPayment3Detail
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBScheduledPayment3Detail
 */
class OBScheduledPayment3DetailTest extends TestCase
{
    protected OBScheduledPayment3Detail|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBScheduledPayment3Detail::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBScheduledPayment3Detail::class));
        $this->assertInstanceOf(OBScheduledPayment3Detail::class, $this->object);
    }

    /**
     * Test attribute "accountId"
     *
     * @group unit
     * @small
     */
    public function testPropertyAccountId(): void
    {
        $this->markTestSkipped('Test for property accountId not implemented');
    }

    /**
     * Test attribute "scheduledPaymentId"
     *
     * @group unit
     * @small
     */
    public function testPropertyScheduledPaymentId(): void
    {
        $this->markTestSkipped('Test for property scheduledPaymentId not implemented');
    }

    /**
     * Test attribute "scheduledPaymentDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyScheduledPaymentDateTime(): void
    {
        $this->markTestSkipped('Test for property scheduledPaymentDateTime not implemented');
    }

    /**
     * Test attribute "scheduledType"
     *
     * @group unit
     * @small
     */
    public function testPropertyScheduledType(): void
    {
        $this->markTestSkipped('Test for property scheduledType not implemented');
    }

    /**
     * Test attribute "reference"
     *
     * @group unit
     * @small
     */
    public function testPropertyReference(): void
    {
        $this->markTestSkipped('Test for property reference not implemented');
    }

    /**
     * Test attribute "debtorReference"
     *
     * @group unit
     * @small
     */
    public function testPropertyDebtorReference(): void
    {
        $this->markTestSkipped('Test for property debtorReference not implemented');
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

    /**
     * Test attribute "creditorAgent"
     *
     * @group unit
     * @small
     */
    public function testPropertyCreditorAgent(): void
    {
        $this->markTestSkipped('Test for property creditorAgent not implemented');
    }

    /**
     * Test attribute "creditorAccount"
     *
     * @group unit
     * @small
     */
    public function testPropertyCreditorAccount(): void
    {
        $this->markTestSkipped('Test for property creditorAccount not implemented');
    }
}
