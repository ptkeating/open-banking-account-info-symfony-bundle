# OverdraftTierBandInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identification** | **string** | Unique and unambiguous identification of a  Tier Band for a overdraft. | [optional] 
**tierValueMin** | **string** | Minimum value of Overdraft Tier/Band | 
**tierValueMax** | **string** | Maximum value of Overdraft Tier/Band | [optional] 
**eAR** | **string** | EAR means Effective Annual Rate and/or Equivalent Annual Rate (frequently used interchangeably), being the actual annual interest rate of an Overdraft. | [optional] 
**representativeAPR** | **string** | An annual percentage rate (APR) is the annual rate charged for borrowing or earned through an investment. APR is expressed as a percentage that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction but does not take compounding into account. | [optional] 
**agreementLengthMin** | **float** | Specifies the minimum length of a band for a fixed overdraft agreement | [optional] 
**agreementLengthMax** | **float** | Specifies the maximum length of a band for a fixed overdraft agreement | [optional] 
**agreementPeriod** | **string** | Specifies the period of a fixed length overdraft agreement | [optional] 
**overdraftInterestChargingCoverage** | **string** | Refers to which interest rate is applied when interests are tiered. For example, if an overdraft balance is £2k and the interest tiers are:- 0-£500 0.1%, 500-1000 0.2%, 1000-10000 0.5%, then the applicable interest rate could either be 0.5% of the entire balance (since the account balance sits in the top interest tier) or (0.1%*500)+(0.2%*500)+(0.5%*1000). In the 1st situation, we say the interest is applied to the ‘Whole’ of the account balance,  and in the 2nd that it is ‘Tiered’. | [optional] 
**bankGuaranteedIndicator** | **bool** | Indicates whether the advertised overdraft rate is guaranteed to be offered to a borrower by the bank e.g. if it’s part of a government scheme, or whether the rate may vary dependent on the applicant’s circumstances. | [optional] 
**notes** | **string** | Optional additional notes to supplement the Tier/band details | [optional] 
**overdraftFeesCharges** | [**OpenAPI\Server\Model\OverdraftFeesChargesInner**](OverdraftFeesChargesInner.md) | Overdraft fees and charges | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


