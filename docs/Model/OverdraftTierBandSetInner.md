# OverdraftTierBandSetInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tierBandMethod** | **string** | The methodology of how overdraft is charged. It can be: &#39;Whole&#39;  Where the same charge/rate is applied to the entirety of the overdraft balance (where charges are applicable).  &#39;Tiered&#39; Where different charges/rates are applied dependent on overdraft maximum and minimum balance amount tiers defined by the lending financial organisation &#39;Banded&#39; Where different charges/rates are applied dependent on overdraft maximum and minimum balance amount bands defined by a government organisation. | 
**overdraftType** | **string** | An overdraft can either be &#39;committed&#39; which means that the facility cannot be withdrawn without reasonable notification before it&#39;s agreed end date, or &#39;on demand&#39; which means that the financial institution can demand repayment at any point in time. | [optional] 
**identification** | **string** | Unique and unambiguous identification of a  Tier Band for a overdraft product. | [optional] 
**authorisedIndicator** | **bool** | Indicates if the Overdraft is authorised (Y) or unauthorised (N) | [optional] 
**bufferAmount** | **string** | When a customer exceeds their credit limit, a financial institution will not charge the customer unauthorised overdraft charges if they do not exceed by more than the buffer amount. Note: Authorised overdraft charges may still apply. | [optional] 
**notes** | **string** | Optional additional notes to supplement the overdraft Tier Band Set details | [optional] 
**overdraftTierBand** | [**OpenAPI\Server\Model\OverdraftTierBandInner**](OverdraftTierBandInner.md) | Provides overdraft details for a specific tier or band | 
**overdraftFeesCharges** | [**OpenAPI\Server\Model\OverdraftFeesChargesInner1**](OverdraftFeesChargesInner1.md) | Overdraft fees and charges details | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


