<?php
/**
 * TierBandSetInnerTest
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
 * TierBandSetInnerTest Class Doc Comment
 *
 * @category    Class
 * @description The group of tiers or bands for which credit interest can be applied.
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\TierBandSetInner
 */
class TierBandSetInnerTest extends TestCase
{
    protected TierBandSetInner|MockObject $object;

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
         $this->object = $this->getMockBuilder(TierBandSetInner::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(TierBandSetInner::class));
        $this->assertInstanceOf(TierBandSetInner::class, $this->object);
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
     * Test attribute "calculationMethod"
     *
     * @group unit
     * @small
     */
    public function testPropertyCalculationMethod(): void
    {
        $this->markTestSkipped('Test for property calculationMethod not implemented');
    }

    /**
     * Test attribute "destination"
     *
     * @group unit
     * @small
     */
    public function testPropertyDestination(): void
    {
        $this->markTestSkipped('Test for property destination not implemented');
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
     * Test attribute "tierBand"
     *
     * @group unit
     * @small
     */
    public function testPropertyTierBand(): void
    {
        $this->markTestSkipped('Test for property tierBand not implemented');
    }
}
