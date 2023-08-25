# OBAccount6

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | A unique and immutable identifier used to identify the account resource. This identifier has no meaning to the account owner. | 
**status** | [**OpenAPI\Server\Model\OBAccountStatus1Code**](OBAccountStatus1Code.md) |  | [optional] 
**statusUpdateDateTime** | **\DateTime** | Date and time at which the resource status was updated.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | [optional] 
**currency** | **string** | Identification of the currency in which the account is held.  Usage: Currency should only be used in case one and the same account number covers several currencies and the initiating party needs to identify which currency needs to be used for settlement on the account. | [optional] 
**accountType** | [**OpenAPI\Server\Model\OBExternalAccountType1Code**](OBExternalAccountType1Code.md) |  | [optional] 
**accountSubType** | [**OpenAPI\Server\Model\OBExternalAccountSubType1Code**](OBExternalAccountSubType1Code.md) |  | [optional] 
**description** | **string** | Specifies the description of the account type. | [optional] 
**nickname** | **string** | The nickname of the account, assigned by the account owner in order to provide an additional means of identification of the account. | [optional] 
**openingDate** | **\DateTime** | Date on which the account and related basic services are effectively operational for the account owner.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | [optional] 
**maturityDate** | **\DateTime** | Maturity date of the account.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | [optional] 
**switchStatus** | **string** | Specifies the switch status for the account, in a coded form. | [optional] 
**account** | [**OpenAPI\Server\Model\OBAccount6AccountInner**](OBAccount6AccountInner.md) |  | [optional] 
**servicer** | [**OpenAPI\Server\Model\OBBranchAndFinancialInstitutionIdentification50**](OBBranchAndFinancialInstitutionIdentification50.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


