# OBReadBalance1DataBalanceInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | A unique and immutable identifier used to identify the account resource. This identifier has no meaning to the account owner. | 
**creditDebitIndicator** | [**OpenAPI\Server\Model\OBCreditDebitCode2**](OBCreditDebitCode2.md) |  | 
**type** | [**OpenAPI\Server\Model\OBBalanceType1Code**](OBBalanceType1Code.md) |  | 
**dateTime** | **\DateTime** | Indicates the date (and time) of the balance.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | 
**amount** | [**OpenAPI\Server\Model\OBReadBalance1DataBalanceInnerAmount**](OBReadBalance1DataBalanceInnerAmount.md) |  | 
**creditLine** | [**OpenAPI\Server\Model\OBReadBalance1DataBalanceInnerCreditLineInner**](OBReadBalance1DataBalanceInnerCreditLineInner.md) |  | [optional] 
**localAmount** | [**OpenAPI\Server\Model\OBReadBalance1DataBalanceInnerLocalAmount**](OBReadBalance1DataBalanceInnerLocalAmount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


