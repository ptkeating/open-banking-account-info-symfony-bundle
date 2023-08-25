# OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInnerLoanInterestTierBandInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identification** | **string** | Unique and unambiguous identification of a  Tier Band for a SME Loan. | [optional] 
**tierValueMinimum** | **string** | Minimum loan value for which the loan interest tier applies. | 
**tierValueMaximum** | **string** | Maximum loan value for which the loan interest tier applies. | [optional] 
**tierValueMinTerm** | **int** | Minimum loan term for which the loan interest tier applies. | 
**minTermPeriod** | **string** | The unit of period (days, weeks, months etc.) of the Minimum Term | 
**tierValueMaxTerm** | **int** | Maximum loan term for which the loan interest tier applies. | [optional] 
**maxTermPeriod** | **string** | The unit of period (days, weeks, months etc.) of the Maximum Term | [optional] 
**fixedVariableInterestRateType** | [**OpenAPI\Server\Model\OBInterestFixedVariableType1Code**](OBInterestFixedVariableType1Code.md) |  | 
**repAPR** | **string** | The annual equivalent rate (AER) is interest that is calculated under the assumption that any interest paid is combined with the original balance and the next interest payment will be based on the slightly higher account balance. Overall, this means that interest can be compounded several times in a year depending on the number of times that interest payments are made.  For SME Loan, this APR is the representative APR which includes any account fees. | 
**loanProviderInterestRateType** | **string** | Interest rate types, other than APR, which financial institutions may use to describe the annual interest rate payable for the SME Loan. | [optional] 
**loanProviderInterestRate** | **string** | Loan provider Interest for the SME Loan product | [optional] 
**notes** | **string** |  | [optional] 
**otherLoanProviderInterestRateType** | [**OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInnerLoanInterestTierBandInnerOtherLoanProviderInterestRateType**](OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInnerLoanInterestTierBandInnerOtherLoanProviderInterestRateType.md) |  | [optional] 
**loanInterestFeesCharges** | [**OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInnerLoanInterestTierBandInnerLoanInterestFeesChargesInner**](OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInnerLoanInterestTierBandInnerLoanInterestFeesChargesInner.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


