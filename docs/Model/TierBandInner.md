# TierBandInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identification** | **string** | Unique and unambiguous identification of a  Tier Band for a BCA. | [optional] 
**tierValueMinimum** | **string** | Minimum deposit value for which the credit interest tier applies. | 
**tierValueMaximum** | **string** | Maximum deposit value for which the credit interest tier applies. | [optional] 
**calculationFrequency** | **string** | How often is credit interest calculated for the account. | [optional] 
**applicationFrequency** | **string** | How often is interest applied to the BCA for this tier/band i.e. how often the financial institution pays accumulated interest to the customer&#39;s BCA. | 
**depositInterestAppliedCoverage** | **string** | Amount on which Interest applied. | [optional] 
**fixedVariableInterestRateType** | **string** | Type of interest rate, Fixed or Variable | 
**aER** | **string** | The annual equivalent rate (AER) is interest that is calculated under the assumption that any interest paid is combined with the original balance and the next interest payment will be based on the slightly higher account balance. Overall, this means that interest can be compounded several times in a year depending on the number of times that interest payments are made.   Read more: Annual Equivalent Rate (AER) http://www.investopedia.com/terms/a/aer.asp#ixzz4gfR7IO1A | 
**bankInterestRateType** | **string** | Interest rate types, other than AER, which financial institutions may use to describe the annual interest rate payable to the BCA. | [optional] 
**bankInterestRate** | **string** | Bank Interest for the BCA product | [optional] 
**notes** | **string** | Optional additional notes to supplement the Tier Band details | [optional] 
**otherBankInterestType** | [**OpenAPI\Server\Model\OtherBankInterestType**](OtherBankInterestType.md) |  | [optional] 
**otherApplicationFrequency** | [**OpenAPI\Server\Model\OtherApplicationFrequency**](OtherApplicationFrequency.md) |  | [optional] 
**otherCalculationFrequency** | [**OpenAPI\Server\Model\OtherCalculationFrequency**](OtherCalculationFrequency.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


