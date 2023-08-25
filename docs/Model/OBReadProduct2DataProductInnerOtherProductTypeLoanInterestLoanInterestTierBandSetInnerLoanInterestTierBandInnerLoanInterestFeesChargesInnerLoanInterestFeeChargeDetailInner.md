# OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInnerLoanInterestTierBandInnerLoanInterestFeesChargesInnerLoanInterestFeeChargeDetailInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feeType** | [**OpenAPI\Server\Model\OBFeeType1Code**](OBFeeType1Code.md) |  | 
**negotiableIndicator** | **bool** | Fee/charge which is usually negotiable rather than a fixed amount | [optional] 
**feeAmount** | **string** | Fee Amount charged for a fee/charge (where it is charged in terms of an amount rather than a rate) | [optional] 
**feeRate** | **string** | Rate charged for Fee/Charge (where it is charged in terms of a rate rather than an amount) | [optional] 
**feeRateType** | [**OpenAPI\Server\Model\OBInterestRateType1Code1**](OBInterestRateType1Code1.md) |  | [optional] 
**applicationFrequency** | [**OpenAPI\Server\Model\OBFeeFrequency1Code2**](OBFeeFrequency1Code2.md) |  | 
**calculationFrequency** | [**OpenAPI\Server\Model\OBFeeFrequency1Code3**](OBFeeFrequency1Code3.md) |  | 
**notes** | **string** |  | [optional] 
**otherFeeType** | [**OpenAPI\Server\Model\OBOtherFeeChargeDetailType**](OBOtherFeeChargeDetailType.md) |  | [optional] 
**otherFeeRateType** | [**OpenAPI\Server\Model\OBOtherCodeType15**](OBOtherCodeType15.md) |  | [optional] 
**otherApplicationFrequency** | [**OpenAPI\Server\Model\OBOtherCodeType16**](OBOtherCodeType16.md) |  | [optional] 
**otherCalculationFrequency** | [**OpenAPI\Server\Model\OBOtherCodeType17**](OBOtherCodeType17.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


