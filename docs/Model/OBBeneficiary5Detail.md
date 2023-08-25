# OBBeneficiary5Detail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | A unique and immutable identifier used to identify the account resource. This identifier has no meaning to the account owner. | [optional] 
**beneficiaryId** | **string** | A unique and immutable identifier used to identify the beneficiary resource. This identifier has no meaning to the account owner. | [optional] 
**beneficiaryType** | [**OpenAPI\Server\Model\OBBeneficiaryType1Code**](OBBeneficiaryType1Code.md) |  | [optional] 
**reference** | **string** | Unique reference, as assigned by the creditor, to unambiguously refer to the payment transaction. Usage: If available, the initiating party should provide this reference in the structured remittance information, to enable reconciliation by the creditor upon receipt of the amount of money. If the business context requires the use of a creditor reference or a payment remit identification, and only one identifier can be passed through the end-to-end chain, the creditor&#39;s reference or payment remittance identification should be quoted in the end-to-end transaction identification. | [optional] 
**supplementaryData** | [**AnyType**](AnyType.md) | Additional information that can not be captured in the structured fields and/or any other specific block. | [optional] 
**creditorAgent** | [**OpenAPI\Server\Model\OBBranchAndFinancialInstitutionIdentification60**](OBBranchAndFinancialInstitutionIdentification60.md) |  | [optional] 
**creditorAccount** | [**OpenAPI\Server\Model\OBCashAccount50**](OBCashAccount50.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


