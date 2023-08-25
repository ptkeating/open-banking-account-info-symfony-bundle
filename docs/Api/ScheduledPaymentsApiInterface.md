# OpenAPI\Server\Api\ScheduledPaymentsApiInterface

All URIs are relative to *http://localhost/open-banking/v3.1/aisp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountsAccountIdScheduledPayments**](ScheduledPaymentsApiInterface.md#getAccountsAccountIdScheduledPayments) | **GET** /accounts/{AccountId}/scheduled-payments | Get Scheduled Payments
[**getScheduledPayments**](ScheduledPaymentsApiInterface.md#getScheduledPayments) | **GET** /scheduled-payments | Get Scheduled Payments


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\ScheduledPaymentsApi:
        tags:
            - { name: "open_api_server.api", api: "scheduledPayments" }
    # ...
```

## **getAccountsAccountIdScheduledPayments**
> OpenAPI\Server\Model\OBReadScheduledPayment3 getAccountsAccountIdScheduledPayments($accountId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent)

Get Scheduled Payments

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ScheduledPaymentsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ScheduledPaymentsApiInterface;

class ScheduledPaymentsApi implements ScheduledPaymentsApiInterface
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
     * Implementation of ScheduledPaymentsApiInterface#getAccountsAccountIdScheduledPayments
     */
    public function getAccountsAccountIdScheduledPayments(string $accountId, string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\OBReadScheduledPayment3**](../Model/OBReadScheduledPayment3.md)

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getScheduledPayments**
> OpenAPI\Server\Model\OBReadScheduledPayment3 getScheduledPayments($authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent)

Get Scheduled Payments

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ScheduledPaymentsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ScheduledPaymentsApiInterface;

class ScheduledPaymentsApi implements ScheduledPaymentsApiInterface
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
     * Implementation of ScheduledPaymentsApiInterface#getScheduledPayments
     */
    public function getScheduledPayments(string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\OBReadScheduledPayment3**](../Model/OBReadScheduledPayment3.md)

### Authorization

[PSUOAuth2Security](../../README.md#PSUOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

