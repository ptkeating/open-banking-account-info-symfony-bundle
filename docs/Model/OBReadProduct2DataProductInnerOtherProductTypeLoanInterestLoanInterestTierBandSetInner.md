# OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tierBandMethod** | **string** | The methodology of how credit interest is charged. It can be:- 1. Banded Interest rates are banded. i.e. Increasing rate on whole balance as balance increases. 2. Tiered Interest rates are tiered. i.e. increasing rate for each tier as balance increases, but interest paid on tier fixed for that tier and not on whole balance. 3. Whole The same interest rate is applied irrespective of the SME Loan balance | 
**identification** | **string** | Loan interest tierbandset identification. Used by  loan providers for internal use purpose. | [optional] 
**calculationMethod** | [**OpenAPI\Server\Model\OBInterestCalculationMethod1Code**](OBInterestCalculationMethod1Code.md) |  | 
**notes** | **string** |  | [optional] 
**otherCalculationMethod** | [**OpenAPI\Server\Model\OBOtherCodeType10**](OBOtherCodeType10.md) |  | [optional] 
**loanInterestTierBand** | [**OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInnerLoanInterestTierBandInner**](OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInnerLoanInterestTierBandInner.md) |  | 
**loanInterestFeesCharges** | [**OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInnerLoanInterestTierBandInnerLoanInterestFeesChargesInner**](OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInnerLoanInterestTierBandInnerLoanInterestFeesChargesInner.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


