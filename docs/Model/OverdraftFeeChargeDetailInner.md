# OverdraftFeeChargeDetailInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feeType** | **string** | Overdraft fee type | 
**negotiableIndicator** | **bool** | Indicates whether fee and charges are negotiable | [optional] 
**overdraftControlIndicator** | **bool** | Indicates if the fee/charge is already covered by an &#39;Overdraft Control&#39; fee or not. | [optional] 
**incrementalBorrowingAmount** | **string** | Every additional tranche of an overdraft balance to which an overdraft fee is applied | [optional] 
**feeAmount** | **string** | Amount charged for an overdraft fee/charge (where it is charged in terms of an amount rather than a rate) | [optional] 
**feeRate** | **string** | Rate charged for overdraft fee/charge (where it is charged in terms of a rate rather than an amount) | [optional] 
**feeRateType** | **string** | Rate type for overdraft fee/charge (where it is charged in terms of a rate rather than an amount) | [optional] 
**applicationFrequency** | **string** | Frequency at which the overdraft charge is applied to the account | 
**calculationFrequency** | **string** | How often is the overdraft fee/charge calculated for the account. | [optional] 
**notes** | **string** | Free text for capturing any other info related to Overdraft Fees Charge Details | [optional] 
**overdraftFeeChargeCap** | [**OpenAPI\Server\Model\OverdraftFeeChargeCapInner**](OverdraftFeeChargeCapInner.md) | Details about any caps (maximum charges) that apply to a particular fee/charge. Capping can either be based on an amount (in gbp), an amount (in items) or a rate. | [optional] 
**otherFeeType** | [**OpenAPI\Server\Model\OtherFeeType**](OtherFeeType.md) |  | [optional] 
**otherFeeRateType** | [**OpenAPI\Server\Model\OtherFeeRateType**](OtherFeeRateType.md) |  | [optional] 
**otherApplicationFrequency** | [**OpenAPI\Server\Model\OtherApplicationFrequency**](OtherApplicationFrequency.md) |  | [optional] 
**otherCalculationFrequency** | [**OpenAPI\Server\Model\OtherCalculationFrequency**](OtherCalculationFrequency.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


