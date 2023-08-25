# OpenAPI\Server\Api\TransactionsApiInterface

All URIs are relative to *http://localhost/open-banking/v3.1/aisp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountsAccountIdStatementsStatementIdTransactions**](TransactionsApiInterface.md#getAccountsAccountIdStatementsStatementIdTransactions) | **GET** /accounts/{AccountId}/statements/{StatementId}/transactions | Get Transactions
[**getAccountsAccountIdTransactions**](TransactionsApiInterface.md#getAccountsAccountIdTransactions) | **GET** /accounts/{AccountId}/transactions | Get Transactions
[**getTransactions**](TransactionsApiInterface.md#getTransactions) | **GET** /transactions | Get Transactions


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\TransactionsApi:
        tags:
            - { name: "open_api_server.api", api: "transactions" }
    # ...
```

## **getAccountsAccountIdStatementsStatementIdTransactions**
> OpenAPI\Server\Model\OBReadTransaction6 getAccountsAccountIdStatementsStatementIdTransactions($statementId, $accountId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent)

Get Transactions

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TransactionsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\TransactionsApiInterface;

class TransactionsApi implements TransactionsApiInterface
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
     * Implementation of TransactionsApiInterface#getAccountsAccountIdStatementsStatementIdTransactions
     */
    public function getAccountsAccountIdStatementsStatementIdTransactions(string $statementId, string $accountId, string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\OBReadTransaction6**](../Model/OBReadTransaction6.md)

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getAccountsAccountIdTransactions**
> OpenAPI\Server\Model\OBReadTransaction6 getAccountsAccountIdTransactions($accountId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent, $fromBookingDateTime, $toBookingDateTime)

Get Transactions

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TransactionsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\TransactionsApiInterface;

class TransactionsApi implements TransactionsApiInterface
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
     * Implementation of TransactionsApiInterface#getAccountsAccountIdTransactions
     */
    public function getAccountsAccountIdTransactions(string $accountId, string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, ?\DateTime $fromBookingDateTime, ?\DateTime $toBookingDateTime, int &$responseCode, array &$responseHeaders): array|object|null
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
 **fromBookingDateTime** | **\DateTime**| The UTC ISO 8601 Date Time to filter transactions FROM NB Time component is optional - set to 00:00:00 for just Date. If the Date Time contains a timezone, the ASPSP must ignore the timezone component. | [optional]
 **toBookingDateTime** | **\DateTime**| The UTC ISO 8601 Date Time to filter transactions TO NB Time component is optional - set to 00:00:00 for just Date. If the Date Time contains a timezone, the ASPSP must ignore the timezone component. | [optional]

### Return type

[**OpenAPI\Server\Model\OBReadTransaction6**](../Model/OBReadTransaction6.md)

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getTransactions**
> OpenAPI\Server\Model\OBReadTransaction6 getTransactions($authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent, $fromBookingDateTime, $toBookingDateTime)

Get Transactions

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TransactionsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\TransactionsApiInterface;

class TransactionsApi implements TransactionsApiInterface
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
     * Implementation of TransactionsApiInterface#getTransactions
     */
    public function getTransactions(string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, ?\DateTime $fromBookingDateTime, ?\DateTime $toBookingDateTime, int &$responseCode, array &$responseHeaders): array|object|null
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
 **xCustomerUserAgent** | **string**| Indicates the user-agent that the PSU is using. | [optional]
 **fromBookingDateTime** | **\DateTime**| The UTC ISO 8601 Date Time to filter transactions FROM NB Time component is optional - set to 00:00:00 for just Date. If the Date Time contains a timezone, the ASPSP must ignore the timezone component. | [optional]
 **toBookingDateTime** | **\DateTime**| The UTC ISO 8601 Date Time to filter transactions TO NB Time component is optional - set to 00:00:00 for just Date. If the Date Time contains a timezone, the ASPSP must ignore the timezone component. | [optional]

### Return type

[**OpenAPI\Server\Model\OBReadTransaction6**](../Model/OBReadTransaction6.md)

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

