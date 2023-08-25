# OBScheduledPayment3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | A unique and immutable identifier used to identify the account resource. This identifier has no meaning to the account owner. | 
**scheduledPaymentId** | **string** | A unique and immutable identifier used to identify the scheduled payment resource. This identifier has no meaning to the account owner. | [optional] 
**scheduledPaymentDateTime** | **\DateTime** | The date on which the scheduled payment will be made.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | 
**scheduledType** | [**OpenAPI\Server\Model\OBExternalScheduleType1Code**](OBExternalScheduleType1Code.md) |  | 
**reference** | **string** | Unique reference, as assigned by the creditor, to unambiguously refer to the payment transaction. Usage: If available, the initiating party should provide this reference in the structured remittance information, to enable reconciliation by the creditor upon receipt of the amount of money. If the business context requires the use of a creditor reference or a payment remit identification, and only one identifier can be passed through the end-to-end chain, the creditor&#39;s reference or payment remittance identification should be quoted in the end-to-end transaction identification. | [optional] 
**debtorReference** | **string** | A reference value provided by the PSU to the PISP while setting up the scheduled payment. | [optional] 
**instructedAmount** | [**OpenAPI\Server\Model\OBActiveOrHistoricCurrencyAndAmount1**](OBActiveOrHistoricCurrencyAndAmount1.md) |  | 
**creditorAgent** | [**OpenAPI\Server\Model\OBBranchAndFinancialInstitutionIdentification51**](OBBranchAndFinancialInstitutionIdentification51.md) |  | [optional] 
**creditorAccount** | [**OpenAPI\Server\Model\OBCashAccount51**](OBCashAccount51.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


