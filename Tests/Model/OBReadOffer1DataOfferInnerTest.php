<?php
/**
 * OBReadOffer1DataOfferInnerTest
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
 * OBReadOffer1DataOfferInnerTest Class Doc Comment
 *
 * @category    Class
 * @description OBReadOffer1DataOfferInner
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBReadOffer1DataOfferInner
 */
class OBReadOffer1DataOfferInnerTest extends TestCase
{
    protected OBReadOffer1DataOfferInner|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBReadOffer1DataOfferInner::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBReadOffer1DataOfferInner::class));
        $this->assertInstanceOf(OBReadOffer1DataOfferInner::class, $this->object);
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
     * Test attribute "offerId"
     *
     * @group unit
     * @small
     */
    public function testPropertyOfferId(): void
    {
        $this->markTestSkipped('Test for property offerId not implemented');
    }

    /**
     * Test attribute "offerType"
     *
     * @group unit
     * @small
     */
    public function testPropertyOfferType(): void
    {
        $this->markTestSkipped('Test for property offerType not implemented');
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
     * Test attribute "startDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyStartDateTime(): void
    {
        $this->markTestSkipped('Test for property startDateTime not implemented');
    }

    /**
     * Test attribute "endDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyEndDateTime(): void
    {
        $this->markTestSkipped('Test for property endDateTime not implemented');
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
     * Test attribute "value"
     *
     * @group unit
     * @small
     */
    public function testPropertyValue(): void
    {
        $this->markTestSkipped('Test for property value not implemented');
    }

    /**
     * Test attribute "term"
     *
     * @group unit
     * @small
     */
    public function testPropertyTerm(): void
    {
        $this->markTestSkipped('Test for property term not implemented');
    }

    /**
     * Test attribute "uRL"
     *
     * @group unit
     * @small
     */
    public function testPropertyURL(): void
    {
        $this->markTestSkipped('Test for property uRL not implemented');
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
     * Test attribute "fee"
     *
     * @group unit
     * @small
     */
    public function testPropertyFee(): void
    {
        $this->markTestSkipped('Test for property fee not implemented');
    }
}
