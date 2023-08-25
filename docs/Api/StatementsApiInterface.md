# OpenAPI\Server\Api\StatementsApiInterface

All URIs are relative to *http://localhost/open-banking/v3.1/aisp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountsAccountIdStatements**](StatementsApiInterface.md#getAccountsAccountIdStatements) | **GET** /accounts/{AccountId}/statements | Get Statements
[**getAccountsAccountIdStatementsStatementId**](StatementsApiInterface.md#getAccountsAccountIdStatementsStatementId) | **GET** /accounts/{AccountId}/statements/{StatementId} | Get Statements
[**getAccountsAccountIdStatementsStatementIdFile**](StatementsApiInterface.md#getAccountsAccountIdStatementsStatementIdFile) | **GET** /accounts/{AccountId}/statements/{StatementId}/file | Get Statements
[**getStatements**](StatementsApiInterface.md#getStatements) | **GET** /statements | Get Statements


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\StatementsApi:
        tags:
            - { name: "open_api_server.api", api: "statements" }
    # ...
```

## **getAccountsAccountIdStatements**
> OpenAPI\Server\Model\OBReadStatement2 getAccountsAccountIdStatements($accountId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent, $fromStatementDateTime, $toStatementDateTime)

Get Statements

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StatementsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\StatementsApiInterface;

class StatementsApi implements StatementsApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: PSUOAuth2Security
     */
    public function setPSUOAuth2Security($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of StatementsApiInterface#getAccountsAccountIdStatements
     */
    public function getAccountsAccountIdStatements(string $accountId, string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, ?\DateTime $fromStatementDateTime, ?\DateTime $toStatementDateTime, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| AccountId |
 **authorization** | **string**| An Authorisation Token as per https://tools.ietf.org/html/rfc6750 |
 **xFapiAuthDate** | **string**| The time when the PSU last logged in with the TPP.  All dates in the HTTP headers are represented as RFC 7231 Full Dates. An example is below:  Sun, 10 Sep 2017 19:43:31 UTC | [optional]
 **xFapiCustomerIpAddress** | **string**| The PSU&#39;s IP address if the PSU is currently logged in with the TPP. | [optional]
 **xFapiInteractionId** | **string**| An RFC4122 UID used as a correlation id. | [optional]
 **xCustomerUserAgent** | **string**| Indicates the user-agent that the PSU is using. | [optional]
 **fromStatementDateTime** | **\DateTime**| The UTC ISO 8601 Date Time to filter statements FROM NB Time component is optional - set to 00:00:00 for just Date. If the Date Time contains a timezone, the ASPSP must ignore the timezone component. | [optional]
 **toStatementDateTime** | **\DateTime**| The UTC ISO 8601 Date Time to filter statements TO NB Time component is optional - set to 00:00:00 for just Date. If the Date Time contains a timezone, the ASPSP must ignore the timezone component. | [optional]

### Return type

[**OpenAPI\Server\Model\OBReadStatement2**](../Model/OBReadStatement2.md)

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getAccountsAccountIdStatementsStatementId**
> OpenAPI\Server\Model\OBReadStatement2 getAccountsAccountIdStatementsStatementId($statementId, $accountId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent)

Get Statements

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StatementsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\StatementsApiInterface;

class StatementsApi implements StatementsApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: PSUOAuth2Security
     */
    public function setPSUOAuth2Security($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of StatementsApiInterface#getAccountsAccountIdStatementsStatementId
     */
    public function getAccountsAccountIdStatementsStatementId(string $statementId, string $accountId, string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statementId** | **string**| StatementId |
 **accountId** | **string**| AccountId |
 **authorization** | **string**| An Authorisation Token as per https://tools.ietf.org/html/rfc6750 |
 **xFapiAuthDate** | **string**| The time when the PSU last logged in with the TPP.  All dates in the HTTP headers are represented as RFC 7231 Full Dates. An example is below:  Sun, 10 Sep 2017 19:43:31 UTC | [optional]
 **xFapiCustomerIpAddress** | **string**| The PSU&#39;s IP address if the PSU is currently logged in with the TPP. | [optional]
 **xFapiInteractionId** | **string**| An RFC4122 UID used as a correlation id. | [optional]
 **xCustomerUserAgent** | **string**| Indicates the user-agent that the PSU is using. | [optional]

### Return type

[**OpenAPI\Server\Model\OBReadStatement2**](../Model/OBReadStatement2.md)

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getAccountsAccountIdStatementsStatementIdFile**
> array getAccountsAccountIdStatementsStatementIdFile($statementId, $accountId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent)

Get Statements

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StatementsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\StatementsApiInterface;

class StatementsApi implements StatementsApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: PSUOAuth2Security
     */
    public function setPSUOAuth2Security($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of StatementsApiInterface#getAccountsAccountIdStatementsStatementIdFile
     */
    public function getAccountsAccountIdStatementsStatementIdFile(string $statementId, string $accountId, string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statementId** | **string**| StatementId |
 **accountId** | **string**| AccountId |
 **authorization** | **string**| An Authorisation Token as per https://tools.ietf.org/html/rfc6750 |
 **xFapiAuthDate** | **string**| The time when the PSU last logged in with the TPP.  All dates in the HTTP headers are represented as RFC 7231 Full Dates. An example is below:  Sun, 10 Sep 2017 19:43:31 UTC | [optional]
 **xFapiCustomerIpAddress** | **string**| The PSU&#39;s IP address if the PSU is currently logged in with the TPP. | [optional]
 **xFapiInteractionId** | **string**| An RFC4122 UID used as a correlation id. | [optional]
 **xCustomerUserAgent** | **string**| Indicates the user-agent that the PSU is using. | [optional]

### Return type

**array**

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getStatements**
> OpenAPI\Server\Model\OBReadStatement2 getStatements($authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $fromStatementDateTime, $toStatementDateTime, $xCustomerUserAgent)

Get Statements

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StatementsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\StatementsApiInterface;

class StatementsApi implements StatementsApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: PSUOAuth2Security
     */
    public function setPSUOAuth2Security($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of StatementsApiInterface#getStatements
     */
    public function getStatements(string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?\DateTime $fromStatementDateTime, ?\DateTime $toStatementDateTime, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An Authorisation Token as per https://tools.ietf.org/html/rfc6750 |
 **xFapiAuthDate** | **string**| The time when the PSU last logged in with the TPP.  All dates in the HTTP headers are represented as RFC 7231 Full Dates. An example is below:  Sun, 10 Sep 2017 19:43:31 UTC | [optional]
 **xFapiCustomerIpAddress** | **string**| The PSU&#39;s IP address if the PSU is currently logged in with the TPP. | [optional]
 **xFapiInteractionId** | **string**| An RFC4122 UID used as a correlation id. | [optional]
 **fromStatementDateTime** | **\DateTime**| The UTC ISO 8601 Date Time to filter statements FROM NB Time component is optional - set to 00:00:00 for just Date. If the Date Time contains a timezone, the ASPSP must ignore the timezone component. | [optional]
 **toStatementDateTime** | **\DateTime**| The UTC ISO 8601 Date Time to filter statements TO NB Time component is optional - set to 00:00:00 for just Date. If the Date Time contains a timezone, the ASPSP must ignore the timezone component. | [optional]
 **xCustomerUserAgent** | **string**| Indicates the user-agent that the PSU is using. | [optional]

### Return type

[**OpenAPI\Server\Model\OBReadStatement2**](../Model/OBReadStatement2.md)

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

