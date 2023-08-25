# OBReadOffer1DataOfferInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | A unique and immutable identifier used to identify the account resource. This identifier has no meaning to the account owner. | 
**offerId** | **string** | A unique and immutable identifier used to identify the offer resource. This identifier has no meaning to the account owner. | [optional] 
**offerType** | **string** | Offer type, in a coded form. | [optional] 
**description** | **string** | Further details of the offer. | [optional] 
**startDateTime** | **\DateTime** | Date and time at which the offer starts.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | [optional] 
**endDateTime** | **\DateTime** | Date and time at which the offer ends.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | [optional] 
**rate** | **string** | Rate associated with the offer type. | [optional] 
**value** | **int** | Value associated with the offer type. | [optional] 
**term** | **string** | Further details of the term of the offer. | [optional] 
**uRL** | **string** | URL (Uniform Resource Locator) where documentation on the offer can be found | [optional] 
**amount** | [**OpenAPI\Server\Model\OBReadOffer1DataOfferInnerAmount**](OBReadOffer1DataOfferInnerAmount.md) |  | [optional] 
**fee** | [**OpenAPI\Server\Model\OBReadOffer1DataOfferInnerFee**](OBReadOffer1DataOfferInnerFee.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


