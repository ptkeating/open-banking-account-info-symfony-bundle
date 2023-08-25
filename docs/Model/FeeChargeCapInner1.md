# FeeChargeCapInner1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feeType** | **string** | Fee/charge type which is being capped | 
**minMaxType** | **string** | Indicates that this is the minimum/ maximum fee/charge that can be applied by the financial institution | 
**feeCapOccurrence** | **float** | fee/charges are captured dependent on the number of occurrences rather than capped at a particular amount | [optional] 
**feeCapAmount** | **string** | Cap amount charged for a fee/charge (where it is charged in terms of an amount rather than a rate) | [optional] 
**cappingPeriod** | **string** | Period e.g. day, week, month etc. for which the fee/charge is capped | [optional] 
**notes** | **string** | Free text for adding  extra details for fee charge cap | [optional] 
**otherFeeType** | [**OpenAPI\Server\Model\OtherFeeTypeInner**](OtherFeeTypeInner.md) | Other fee type code which is not available in the standard code set | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


