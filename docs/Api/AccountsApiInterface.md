# OpenAPI\Server\Api\AccountsApiInterface

All URIs are relative to *http://localhost/open-banking/v3.1/aisp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccounts**](AccountsApiInterface.md#getAccounts) | **GET** /accounts | Get Accounts
[**getAccountsAccountId**](AccountsApiInterface.md#getAccountsAccountId) | **GET** /accounts/{AccountId} | Get Accounts


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\AccountsApi:
        tags:
            - { name: "open_api_server.api", api: "accounts" }
    # ...
```

## **getAccounts**
> OpenAPI\Server\Model\OBReadAccount6 getAccounts($authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent)

Get Accounts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AccountsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AccountsApiInterface;

class AccountsApi implements AccountsApiInterface
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
     * Implementation of AccountsApiInterface#getAccounts
     */
    public function getAccounts(string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null
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

### Return type

[**OpenAPI\Server\Model\OBReadAccount6**](../Model/OBReadAccount6.md)

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getAccountsAccountId**
> OpenAPI\Server\Model\OBReadAccount6 getAccountsAccountId($accountId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent)

Get Accounts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AccountsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AccountsApiInterface;

class AccountsApi implements AccountsApiInterface
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
     * Implementation of AccountsApiInterface#getAccountsAccountId
     */
    public function getAccountsAccountId(string $accountId, string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null
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

### Return type

[**OpenAPI\Server\Model\OBReadAccount6**](../Model/OBReadAccount6.md)

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

