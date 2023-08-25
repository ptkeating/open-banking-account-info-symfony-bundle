<?php
/**
 * AccountsApiInterface
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server
 * @author   OpenAPI Generator team
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
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\OBErrorResponse1;
use OpenAPI\Server\Model\OBReadAccount6;

/**
 * AccountsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface AccountsApiInterface
{

    /**
     * Sets authentication method PSUOAuth2Security
     *
     * @param string|null $value Value of the PSUOAuth2Security authentication method.
     *
     * @return void
     */
    public function setPSUOAuth2Security(?string $value): void;

    /**
     * Operation getAccounts
     *
     * Get Accounts
     *
     * @param  string $authorization  An Authorisation Token as per https://tools.ietf.org/html/rfc6750 (required)
     * @param  string|null $xFapiAuthDate  The time when the PSU last logged in with the TPP.  All dates in the HTTP headers are represented as RFC 7231 Full Dates. An example is below:  Sun, 10 Sep 2017 19:43:31 UTC (optional)
     * @param  string|null $xFapiCustomerIpAddress  The PSU&#39;s IP address if the PSU is currently logged in with the TPP. (optional)
     * @param  string|null $xFapiInteractionId  An RFC4122 UID used as a correlation id. (optional)
     * @param  string|null $xCustomerUserAgent  Indicates the user-agent that the PSU is using. (optional)
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return array|object|null
     */
    public function getAccounts(string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null;


    /**
     * Operation getAccountsAccountId
     *
     * Get Accounts
     *
     * @param  string $accountId  AccountId (required)
     * @param  string $authorization  An Authorisation Token as per https://tools.ietf.org/html/rfc6750 (required)
     * @param  string|null $xFapiAuthDate  The time when the PSU last logged in with the TPP.  All dates in the HTTP headers are represented as RFC 7231 Full Dates. An example is below:  Sun, 10 Sep 2017 19:43:31 UTC (optional)
     * @param  string|null $xFapiCustomerIpAddress  The PSU&#39;s IP address if the PSU is currently logged in with the TPP. (optional)
     * @param  string|null $xFapiInteractionId  An RFC4122 UID used as a correlation id. (optional)
     * @param  string|null $xCustomerUserAgent  Indicates the user-agent that the PSU is using. (optional)
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return array|object|null
     */
    public function getAccountsAccountId(string $accountId, string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null;

}
