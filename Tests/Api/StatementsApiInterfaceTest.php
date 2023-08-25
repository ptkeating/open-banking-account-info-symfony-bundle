<?php
/**
 * StatementsApiInterfaceTest
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Tests\Api
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
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Server\Tests\Api;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * StatementsApiInterfaceTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Server\Tests\Api
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Api\StatementsApiInterface
 */
class StatementsApiInterfaceTest extends WebTestCase
{
    private static ?KernelBrowser $client = null;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        if (null === self::$client) {
            self::$client = static::createClient();
        }
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        static::ensureKernelShutdown();
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for getAccountsAccountIdStatements
     *
     * Get Statements.
     *
     */
    public function testGetAccountsAccountIdStatements(): void
    {
        $client = self::$client;

        $path = '/accounts/{AccountId}/statements';
        $pattern = '{accountId}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
        $this->markTestSkipped('Test for getAccountsAccountIdStatements not implemented');
    }

    /**
     * Test case for getAccountsAccountIdStatementsStatementId
     *
     * Get Statements.
     *
     */
    public function testGetAccountsAccountIdStatementsStatementId(): void
    {
        $client = self::$client;

        $path = '/accounts/{AccountId}/statements/{StatementId}';
        $pattern = '{statementId}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);
        $pattern = '{accountId}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
        $this->markTestSkipped('Test for getAccountsAccountIdStatementsStatementId not implemented');
    }

    /**
     * Test case for getAccountsAccountIdStatementsStatementIdFile
     *
     * Get Statements.
     *
     */
    public function testGetAccountsAccountIdStatementsStatementIdFile(): void
    {
        $client = self::$client;

        $path = '/accounts/{AccountId}/statements/{StatementId}/file';
        $pattern = '{statementId}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);
        $pattern = '{accountId}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
        $this->markTestSkipped('Test for getAccountsAccountIdStatementsStatementIdFile not implemented');
    }

    /**
     * Test case for getStatements
     *
     * Get Statements.
     *
     */
    public function testGetStatements(): void
    {
        $client = self::$client;

        $path = '/statements';

        $crawler = $client->request('GET', $path);
        $this->markTestSkipped('Test for getStatements not implemented');
    }

    /**
     * @param string $regexp
     * @return mixed
     */
    protected function genTestData(string $regexp)
    {
        $grammar  = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
        $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
        $ast      = $compiler->parse($regexp);
        $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

        return $generator->visit($ast);
    }
}