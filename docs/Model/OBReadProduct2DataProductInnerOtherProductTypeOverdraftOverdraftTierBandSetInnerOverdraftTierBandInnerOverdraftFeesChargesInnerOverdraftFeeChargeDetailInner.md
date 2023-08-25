# OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftTierBandInnerOverdraftFeesChargesInnerOverdraftFeeChargeDetailInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feeType** | [**OpenAPI\Server\Model\OBOverdraftFeeType1Code**](OBOverdraftFeeType1Code.md) |  | 
**negotiableIndicator** | **bool** | Indicates whether fee and charges are negotiable | [optional] 
**overdraftControlIndicator** | **bool** | Indicates if the fee/charge is already covered by an &#39;Overdraft Control&#39; fee or not. | [optional] 
**incrementalBorrowingAmount** | **string** | Every additional tranche of an overdraft balance to which an overdraft fee is applied | [optional] 
**feeAmount** | **string** | Amount charged for an overdraft fee/charge (where it is charged in terms of an amount rather than a rate) | [optional] 
**feeRate** | **string** | Rate charged for overdraft fee/charge (where it is charged in terms of a rate rather than an amount) | [optional] 
**feeRateType** | [**OpenAPI\Server\Model\OBInterestRateType1Code0**](OBInterestRateType1Code0.md) |  | [optional] 
**applicationFrequency** | [**OpenAPI\Server\Model\OBFeeFrequency1Code0**](OBFeeFrequency1Code0.md) |  | 
**calculationFrequency** | [**OpenAPI\Server\Model\OBFeeFrequency1Code1**](OBFeeFrequency1Code1.md) |  | [optional] 
**notes** | **string** |  | [optional] 
**overdraftFeeChargeCap** | [**OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftTierBandInnerOverdraftFeesChargesInnerOverdraftFeeChargeCapInner**](OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftTierBandInnerOverdraftFeesChargesInnerOverdraftFeeChargeCapInner.md) |  | [optional] 
**otherFeeType** | [**OpenAPI\Server\Model\OBOtherCodeType13**](OBOtherCodeType13.md) |  | [optional] 
**otherFeeRateType** | [**OpenAPI\Server\Model\OBOtherCodeType14**](OBOtherCodeType14.md) |  | [optional] 
**otherApplicationFrequency** | [**OpenAPI\Server\Model\OBOtherCodeType11**](OBOtherCodeType11.md) |  | [optional] 
**otherCalculationFrequency** | [**OpenAPI\Server\Model\OBOtherCodeType12**](OBOtherCodeType12.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


