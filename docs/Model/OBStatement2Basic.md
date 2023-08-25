# OBStatement2Basic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | A unique and immutable identifier used to identify the account resource. This identifier has no meaning to the account owner. | 
**statementId** | **string** | Unique identifier for the statement resource within an servicing institution. This identifier is both unique and immutable. | [optional] 
**statementReference** | **string** | Unique reference for the statement. This reference may be optionally populated if available. | [optional] 
**type** | [**OpenAPI\Server\Model\OBExternalStatementType1Code**](OBExternalStatementType1Code.md) |  | 
**startDateTime** | **\DateTime** | Date and time at which the statement period starts.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | 
**endDateTime** | **\DateTime** | Date and time at which the statement period ends.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | 
**creationDateTime** | **\DateTime** | Date and time at which the resource was created.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | 
**statementDescription** | **string** |  | [optional] 
**statementBenefit** | [**OpenAPI\Server\Model\OBStatement2StatementBenefitInner**](OBStatement2StatementBenefitInner.md) |  | [optional] 
**statementFee** | [**OpenAPI\Server\Model\OBStatement2StatementFeeInner**](OBStatement2StatementFeeInner.md) |  | [optional] 
**statementInterest** | [**OpenAPI\Server\Model\OBStatement2StatementInterestInner**](OBStatement2StatementInterestInner.md) |  | [optional] 
**statementDateTime** | [**OpenAPI\Server\Model\OBStatement2StatementDateTimeInner**](OBStatement2StatementDateTimeInner.md) |  | [optional] 
**statementRate** | [**OpenAPI\Server\Model\OBStatement2StatementRateInner**](OBStatement2StatementRateInner.md) |  | [optional] 
**statementValue** | [**OpenAPI\Server\Model\OBStatement2StatementValueInner**](OBStatement2StatementValueInner.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


