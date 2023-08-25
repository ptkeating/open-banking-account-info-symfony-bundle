# OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tierBandMethod** | **string** | The methodology of how credit interest is paid/applied. It can be:- 1. Banded Interest rates are banded. i.e. Increasing rate on whole balance as balance increases. 2. Tiered Interest rates are tiered. i.e. increasing rate for each tier as balance increases, but interest paid on tier fixed for that tier and not on whole balance. 3. Whole The same interest rate is applied irrespective of the product holder&#39;s account balance | 
**calculationMethod** | [**OpenAPI\Server\Model\OBInterestCalculationMethod1Code**](OBInterestCalculationMethod1Code.md) |  | [optional] 
**destination** | **string** | Describes whether accrued interest is payable only to the BCA or to another bank account | 
**notes** | **string** |  | [optional] 
**otherCalculationMethod** | [**OpenAPI\Server\Model\OBOtherCodeType10**](OBOtherCodeType10.md) |  | [optional] 
**otherDestination** | [**OpenAPI\Server\Model\OBOtherCodeType10**](OBOtherCodeType10.md) |  | [optional] 
**tierBand** | [**OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInner**](OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInner.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


