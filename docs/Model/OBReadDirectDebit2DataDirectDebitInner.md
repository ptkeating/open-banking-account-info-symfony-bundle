# OBReadDirectDebit2DataDirectDebitInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | A unique and immutable identifier used to identify the account resource. This identifier has no meaning to the account owner. | 
**directDebitId** | **string** | A unique and immutable identifier used to identify the direct debit resource. This identifier has no meaning to the account owner. | [optional] 
**mandateIdentification** | **string** | Direct Debit reference. For AUDDIS service users provide Core Reference. For non AUDDIS service users provide Core reference if possible or last used reference. | 
**directDebitStatusCode** | [**OpenAPI\Server\Model\OBExternalDirectDebitStatus1Code**](OBExternalDirectDebitStatus1Code.md) |  | [optional] 
**name** | **string** | Name of Service User. | 
**previousPaymentDateTime** | **\DateTime** | Date of most recent direct debit collection.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | [optional] 
**frequency** | **string** | Regularity with which direct debit instructions are to be created and processed. | [optional] 
**previousPaymentAmount** | [**OpenAPI\Server\Model\OBActiveOrHistoricCurrencyAndAmount0**](OBActiveOrHistoricCurrencyAndAmount0.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


