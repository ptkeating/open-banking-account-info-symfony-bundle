# OverdraftFeeChargeCapInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feeType** | **string** | Fee/charge type which is being capped | 
**minMaxType** | **string** | Min Max type | 
**feeCapOccurrence** | **float** | Indicates whether the advertised overdraft rate is guaranteed to be offered to a borrower by the bank e.g. if it’s part of a government scheme, or whether the rate may vary dependent on the applicant’s circumstances. | [optional] 
**feeCapAmount** | **string** | Cap amount charged for a fee/charge | [optional] 
**cappingPeriod** | **string** | Period e.g. day, week, month etc. for which the fee/charge is capped | [optional] 
**notes** | **string** | Notes related to Overdraft fee charge cap | [optional] 
**otherFeeType** | [**OpenAPI\Server\Model\OtherFeeTypeInner**](OtherFeeTypeInner.md) | Other fee type code which is not available in the standard code set | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


