<?php
/**
 * OBStandingOrder6DetailTest
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
 * OBStandingOrder6DetailTest Class Doc Comment
 *
 * @category    Class
 * @description OBStandingOrder6Detail
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBStandingOrder6Detail
 */
class OBStandingOrder6DetailTest extends TestCase
{
    protected OBStandingOrder6Detail|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBStandingOrder6Detail::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBStandingOrder6Detail::class));
        $this->assertInstanceOf(OBStandingOrder6Detail::class, $this->object);
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
     * Test attribute "standingOrderId"
     *
     * @group unit
     * @small
     */
    public function testPropertyStandingOrderId(): void
    {
        $this->markTestSkipped('Test for property standingOrderId not implemented');
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
     * Test attribute "firstPaymentDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyFirstPaymentDateTime(): void
    {
        $this->markTestSkipped('Test for property firstPaymentDateTime not implemented');
    }

    /**
     * Test attribute "nextPaymentDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyNextPaymentDateTime(): void
    {
        $this->markTestSkipped('Test for property nextPaymentDateTime not implemented');
    }

    /**
     * Test attribute "lastPaymentDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyLastPaymentDateTime(): void
    {
        $this->markTestSkipped('Test for property lastPaymentDateTime not implemented');
    }

    /**
     * Test attribute "finalPaymentDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyFinalPaymentDateTime(): void
    {
        $this->markTestSkipped('Test for property finalPaymentDateTime not implemented');
    }

    /**
     * Test attribute "numberOfPayments"
     *
     * @group unit
     * @small
     */
    public function testPropertyNumberOfPayments(): void
    {
        $this->markTestSkipped('Test for property numberOfPayments not implemented');
    }

    /**
     * Test attribute "standingOrderStatusCode"
     *
     * @group unit
     * @small
     */
    public function testPropertyStandingOrderStatusCode(): void
    {
        $this->markTestSkipped('Test for property standingOrderStatusCode not implemented');
    }

    /**
     * Test attribute "firstPaymentAmount"
     *
     * @group unit
     * @small
     */
    public function testPropertyFirstPaymentAmount(): void
    {
        $this->markTestSkipped('Test for property firstPaymentAmount not implemented');
    }

    /**
     * Test attribute "nextPaymentAmount"
     *
     * @group unit
     * @small
     */
    public function testPropertyNextPaymentAmount(): void
    {
        $this->markTestSkipped('Test for property nextPaymentAmount not implemented');
    }

    /**
     * Test attribute "lastPaymentAmount"
     *
     * @group unit
     * @small
     */
    public function testPropertyLastPaymentAmount(): void
    {
        $this->markTestSkipped('Test for property lastPaymentAmount not implemented');
    }

    /**
     * Test attribute "finalPaymentAmount"
     *
     * @group unit
     * @small
     */
    public function testPropertyFinalPaymentAmount(): void
    {
        $this->markTestSkipped('Test for property finalPaymentAmount not implemented');
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