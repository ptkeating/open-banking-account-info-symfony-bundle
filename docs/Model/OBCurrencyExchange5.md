# OBCurrencyExchange5

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceCurrency** | **string** | Currency from which an amount is to be converted in a currency conversion. | 
**targetCurrency** | **string** | Currency into which an amount is to be converted in a currency conversion. | [optional] 
**unitCurrency** | **string** | Currency in which the rate of exchange is expressed in a currency exchange. In the example 1GBP &#x3D; xxxCUR, the unit currency is GBP. | [optional] 
**exchangeRate** | **float** | Factor used to convert an amount from one currency into another. This reflects the price at which one currency was bought with another currency. Usage: ExchangeRate expresses the ratio between UnitCurrency and QuotedCurrency (ExchangeRate &#x3D; UnitCurrency/QuotedCurrency). | 
**contractIdentification** | **string** | Unique identification to unambiguously identify the foreign exchange contract. | [optional] 
**quotationDate** | **\DateTime** | Date and time at which an exchange rate is quoted.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00 | [optional] 
**instructedAmount** | [**OpenAPI\Server\Model\OBCurrencyExchange5InstructedAmount**](OBCurrencyExchange5InstructedAmount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


