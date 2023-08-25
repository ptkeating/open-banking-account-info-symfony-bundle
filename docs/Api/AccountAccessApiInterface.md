# OpenAPI\Server\Api\AccountAccessApiInterface

All URIs are relative to *http://localhost/open-banking/v3.1/aisp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountAccessConsents**](AccountAccessApiInterface.md#createAccountAccessConsents) | **POST** /account-access-consents | Create Account Access Consents
[**deleteAccountAccessConsentsConsentId**](AccountAccessApiInterface.md#deleteAccountAccessConsentsConsentId) | **DELETE** /account-access-consents/{ConsentId} | Delete Account Access Consents
[**getAccountAccessConsentsConsentId**](AccountAccessApiInterface.md#getAccountAccessConsentsConsentId) | **GET** /account-access-consents/{ConsentId} | Get Account Access Consents


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\AccountAccessApi:
        tags:
            - { name: "open_api_server.api", api: "accountAccess" }
    # ...
```

## **createAccountAccessConsents**
> OpenAPI\Server\Model\OBReadConsentResponse1 createAccountAccessConsents($authorization, $oBReadConsent1, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent)

Create Account Access Consents

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AccountAccessApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AccountAccessApiInterface;

class AccountAccessApi implements AccountAccessApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: TPPOAuth2Security
     */
    public function setTPPOAuth2Security($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of AccountAccessApiInterface#createAccountAccessConsents
     */
    public function createAccountAccessConsents(string $authorization, OBReadConsent1 $oBReadConsent1, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null
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
 **oBReadConsent1** | [**OpenAPI\Server\Model\OBReadConsent1**](../Model/OBReadConsent1.md)| Default |
 **xFapiAuthDate** | **string**| The time when the PSU last logged in with the TPP.  All dates in the HTTP headers are represented as RFC 7231 Full Dates. An example is below:  Sun, 10 Sep 2017 19:43:31 UTC | [optional]
 **xFapiCustomerIpAddress** | **string**| The PSU&#39;s IP address if the PSU is currently logged in with the TPP. | [optional]
 **xFapiInteractionId** | **string**| An RFC4122 UID used as a correlation id. | [optional]
 **xCustomerUserAgent** | **string**| Indicates the user-agent that the PSU is using. | [optional]

### Return type

[**OpenAPI\Server\Model\OBReadConsentResponse1**](../Model/OBReadConsentResponse1.md)

### Authorization

[TPPOAuth2Security](../../README.md#TPPOAuth2Security)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8, application/json, application/jose+jwe
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteAccountAccessConsentsConsentId**
> deleteAccountAccessConsentsConsentId($consentId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent)

Delete Account Access Consents

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AccountAccessApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AccountAccessApiInterface;

class AccountAccessApi implements AccountAccessApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: TPPOAuth2Security
     */
    public function setTPPOAuth2Security($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of AccountAccessApiInterface#deleteAccountAccessConsentsConsentId
     */
    public function deleteAccountAccessConsentsConsentId(string $consentId, string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consentId** | **string**| ConsentId |
 **authorization** | **string**| An Authorisation Token as per https://tools.ietf.org/html/rfc6750 |
 **xFapiAuthDate** | **string**| The time when the PSU last logged in with the TPP.  All dates in the HTTP headers are represented as RFC 7231 Full Dates. An example is below:  Sun, 10 Sep 2017 19:43:31 UTC | [optional]
 **xFapiCustomerIpAddress** | **string**| The PSU&#39;s IP address if the PSU is currently logged in with the TPP. | [optional]
 **xFapiInteractionId** | **string**| An RFC4122 UID used as a correlation id. | [optional]
 **xCustomerUserAgent** | **string**| Indicates the user-agent that the PSU is using. | [optional]

### Return type

void (empty response body)

### Authorization

[TPPOAuth2Security](../../README.md#TPPOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getAccountAccessConsentsConsentId**
> OpenAPI\Server\Model\OBReadConsentResponse1 getAccountAccessConsentsConsentId($consentId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent)

Get Account Access Consents

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AccountAccessApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AccountAccessApiInterface;

class AccountAccessApi implements AccountAccessApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: TPPOAuth2Security
     */
    public function setTPPOAuth2Security($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of AccountAccessApiInterface#getAccountAccessConsentsConsentId
     */
    public function getAccountAccessConsentsConsentId(string $consentId, string $authorization, ?string $xFapiAuthDate, ?string $xFapiCustomerIpAddress, ?string $xFapiInteractionId, ?string $xCustomerUserAgent, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consentId** | **string**| ConsentId |
 **authorization** | **string**| An Authorisation Token as per https://tools.ietf.org/html/rfc6750 |
 **xFapiAuthDate** | **string**| The time when the PSU last logged in with the TPP.  All dates in the HTTP headers are represented as RFC 7231 Full Dates. An example is below:  Sun, 10 Sep 2017 19:43:31 UTC | [optional]
 **xFapiCustomerIpAddress** | **string**| The PSU&#39;s IP address if the PSU is currently logged in with the TPP. | [optional]
 **xFapiInteractionId** | **string**| An RFC4122 UID used as a correlation id. | [optional]
 **xCustomerUserAgent** | **string**| Indicates the user-agent that the PSU is using. | [optional]

### Return type

[**OpenAPI\Server\Model\OBReadConsentResponse1**](../Model/OBReadConsentResponse1.md)

### Authorization

[TPPOAuth2Security](../../README.md#TPPOAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8, application/json, application/jose+jwe

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

