# FeeChargeDetailInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feeCategory** | **string** | Categorisation of fees and charges into standard categories. | 
**feeType** | **string** | Fee/Charge Type | 
**negotiableIndicator** | **bool** | Fee/charge which is usually negotiable rather than a fixed amount | [optional] 
**feeAmount** | **string** | Fee Amount charged for a fee/charge (where it is charged in terms of an amount rather than a rate) | [optional] 
**feeRate** | **string** | Rate charged for Fee/Charge (where it is charged in terms of a rate rather than an amount) | [optional] 
**feeRateType** | **string** | Rate type for Fee/Charge (where it is charged in terms of a rate rather than an amount) | [optional] 
**applicationFrequency** | **string** | How frequently the fee/charge is applied to the account | 
**calculationFrequency** | **string** | How frequently the fee/charge is calculated | [optional] 
**notes** | **string** | Optional additional notes to supplement the fee/charge details. | [optional] 
**feeChargeCap** | [**OpenAPI\Server\Model\FeeChargeCapInner**](FeeChargeCapInner.md) | Details about any caps (maximum charges) that apply to a particular or group of fee/charge | [optional] 
**otherFeeCategoryType** | [**OpenAPI\Server\Model\OtherFeeCategoryType**](OtherFeeCategoryType.md) |  | [optional] 
**otherFeeType** | [**OpenAPI\Server\Model\OtherFeeType1**](OtherFeeType1.md) |  | [optional] 
**otherFeeRateType** | [**OpenAPI\Server\Model\OtherFeeRateType1**](OtherFeeRateType1.md) |  | [optional] 
**otherApplicationFrequency** | [**OpenAPI\Server\Model\OtherApplicationFrequency1**](OtherApplicationFrequency1.md) |  | [optional] 
**otherCalculationFrequency** | [**OpenAPI\Server\Model\OtherCalculationFrequency1**](OtherCalculationFrequency1.md) |  | [optional] 
**feeApplicableRange** | [**OpenAPI\Server\Model\FeeApplicableRange**](FeeApplicableRange.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


