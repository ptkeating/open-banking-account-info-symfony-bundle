<?php
/**
 * OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerTest
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
 * OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerTest Class Doc Comment
 *
 * @category    Class
 * @description Tier band set details
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInner
 */
class OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerTest extends TestCase
{
    protected OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInner|MockObject $object;

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
         $this->object = $this->getMockBuilder(OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInner::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInner::class));
        $this->assertInstanceOf(OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInner::class, $this->object);
    }

    /**
     * Test attribute "tierBandMethod"
     *
     * @group unit
     * @small
     */
    public function testPropertyTierBandMethod(): void
    {
        $this->markTestSkipped('Test for property tierBandMethod not implemented');
    }

    /**
     * Test attribute "overdraftType"
     *
     * @group unit
     * @small
     */
    public function testPropertyOverdraftType(): void
    {
        $this->markTestSkipped('Test for property overdraftType not implemented');
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
     * Test attribute "authorisedIndicator"
     *
     * @group unit
     * @small
     */
    public function testPropertyAuthorisedIndicator(): void
    {
        $this->markTestSkipped('Test for property authorisedIndicator not implemented');
    }

    /**
     * Test attribute "bufferAmount"
     *
     * @group unit
     * @small
     */
    public function testPropertyBufferAmount(): void
    {
        $this->markTestSkipped('Test for property bufferAmount not implemented');
    }

    /**
     * Test attribute "notes"
     *
     * @group unit
     * @small
     */
    public function testPropertyNotes(): void
    {
        $this->markTestSkipped('Test for property notes not implemented');
    }

    /**
     * Test attribute "overdraftTierBand"
     *
     * @group unit
     * @small
     */
    public function testPropertyOverdraftTierBand(): void
    {
        $this->markTestSkipped('Test for property overdraftTierBand not implemented');
    }

    /**
     * Test attribute "overdraftFeesCharges"
     *
     * @group unit
     * @small
     */
    public function testPropertyOverdraftFeesCharges(): void
    {
        $this->markTestSkipped('Test for property overdraftFeesCharges not implemented');
    }
}