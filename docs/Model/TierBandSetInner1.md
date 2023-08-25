# TierBandSetInner1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tierBandMethod** | **string** | The methodology of how credit interest is charged. It can be:-  1. Banded Interest rates are banded. i.e. Increasing rate on whole balance as balance increases.  2. Tiered Interest rates are tiered. i.e. increasing rate for each tier as balance increases, but interest paid on tier fixed for that tier and not on whole balance.  3. Whole The same interest rate is applied irrespective of the PCA balance | 
**calculationMethod** | **string** | Methods of calculating interest | [optional] 
**destination** | **string** | Describes whether accrued interest is payable only to the PCA or to another bank account | [optional] 
**notes** | **string** | Optional additional notes to supplement the Tier Band Set details | [optional] 
**tierBand** | [**OpenAPI\Server\Model\TierBandInner1**](TierBandInner1.md) | Tier Band Details | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


