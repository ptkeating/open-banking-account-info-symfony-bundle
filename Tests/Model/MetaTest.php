<?php
/**
 * MetaTest
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
 * MetaTest Class Doc Comment
 *
 * @category    Class
 * @description Meta Data relevant to the payload
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\Meta
 */
class MetaTest extends TestCase
{
    protected Meta|MockObject $object;

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
         $this->object = $this->getMockBuilder(Meta::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(Meta::class));
        $this->assertInstanceOf(Meta::class, $this->object);
    }

    /**
     * Test attribute "totalPages"
     *
     * @group unit
     * @small
     */
    public function testPropertyTotalPages(): void
    {
        $this->markTestSkipped('Test for property totalPages not implemented');
    }

    /**
     * Test attribute "firstAvailableDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyFirstAvailableDateTime(): void
    {
        $this->markTestSkipped('Test for property firstAvailableDateTime not implemented');
    }

    /**
     * Test attribute "lastAvailableDateTime"
     *
     * @group unit
     * @small
     */
    public function testPropertyLastAvailableDateTime(): void
    {
        $this->markTestSkipped('Test for property lastAvailableDateTime not implemented');
    }
}
