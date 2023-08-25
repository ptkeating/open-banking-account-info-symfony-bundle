# OBTransaction6Detail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | A unique and immutable identifier used to identify the account resource. This identifier has no meaning to the account owner. | 
**transactionId** | **string** | Unique identifier for the transaction within an servicing institution. This identifier is both unique and immutable. | [optional] 
**transactionReference** | **string** | Unique reference for the transaction. This reference is optionally populated, and may as an example be the FPID in the Faster Payments context. | [optional] 
**statementReference** | **string** |  | [optional] 
**creditDebitIndicator** | [**OpenAPI\Server\Model\OBCreditDebitCode1**](OBCreditDebitCode1.md) |  | 
**status** | [**OpenAPI\Server\Model\OBEntryStatus1Code**](OBEntryStatus1Code.md) |  | 
**transactionMutability** | [**OpenAPI\Server\Model\OBTransactionMutability1Code**](OBTransactionMutability1Code.md) |  | [optional] 
**bookingDateTime** | **\DateTime** | Date and time when a transaction entry is posted to an account on the account servicer&#39;s books. Usage: Booking date is the expected booking date, unless the status is booked, in which case it is the actual booking date.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | 
**valueDateTime** | **\DateTime** | Date and time at which assets become available to the account owner in case of a credit entry, or cease to be available to the account owner in case of a debit transaction entry. Usage: If transaction entry status is pending and value date is present, then the value date refers to an expected/requested value date. For transaction entries subject to availability/float and for which availability information is provided, the value date must not be used. In this case the availability component identifies the number of availability days.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | [optional] 
**transactionInformation** | **string** | Further details of the transaction.  This is the transaction narrative, which is unstructured text. | [optional] 
**addressLine** | **string** | Information that locates and identifies a specific address for a transaction entry, that is presented in free format text. | [optional] 
**amount** | [**OpenAPI\Server\Model\OBActiveOrHistoricCurrencyAndAmount9**](OBActiveOrHistoricCurrencyAndAmount9.md) |  | 
**chargeAmount** | [**OpenAPI\Server\Model\OBActiveOrHistoricCurrencyAndAmount10**](OBActiveOrHistoricCurrencyAndAmount10.md) |  | [optional] 
**currencyExchange** | [**OpenAPI\Server\Model\OBCurrencyExchange5**](OBCurrencyExchange5.md) |  | [optional] 
**bankTransactionCode** | [**OpenAPI\Server\Model\OBBankTransactionCodeStructure1**](OBBankTransactionCodeStructure1.md) |  | [optional] 
**proprietaryBankTransactionCode** | [**OpenAPI\Server\Model\ProprietaryBankTransactionCodeStructure1**](ProprietaryBankTransactionCodeStructure1.md) |  | [optional] 
**balance** | [**OpenAPI\Server\Model\OBTransactionCashBalance**](OBTransactionCashBalance.md) |  | [optional] 
**merchantDetails** | [**OpenAPI\Server\Model\OBMerchantDetails1**](OBMerchantDetails1.md) |  | [optional] 
**creditorAgent** | [**OpenAPI\Server\Model\OBBranchAndFinancialInstitutionIdentification61**](OBBranchAndFinancialInstitutionIdentification61.md) |  | [optional] 
**creditorAccount** | [**OpenAPI\Server\Model\OBCashAccount60**](OBCashAccount60.md) |  | [optional] 
**debtorAgent** | [**OpenAPI\Server\Model\OBBranchAndFinancialInstitutionIdentification62**](OBBranchAndFinancialInstitutionIdentification62.md) |  | [optional] 
**debtorAccount** | [**OpenAPI\Server\Model\OBCashAccount61**](OBCashAccount61.md) |  | [optional] 
**cardInstrument** | [**OpenAPI\Server\Model\OBTransactionCardInstrument1**](OBTransactionCardInstrument1.md) |  | [optional] 
**supplementaryData** | [**AnyType**](AnyType.md) | Additional information that can not be captured in the structured fields and/or any other specific block. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


