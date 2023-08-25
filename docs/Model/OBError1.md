# OBError1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errorCode** | **string** | Low level textual error code, e.g., UK.OBIE.Field.Missing | 
**message** | **string** | A description of the error that occurred. e.g., &#39;A mandatory field isn&#39;t supplied&#39; or &#39;RequestedExecutionDateTime must be in future&#39; OBIE doesn&#39;t standardise this field | 
**path** | **string** | Recommended but optional reference to the JSON Path of the field with error, e.g., Data.Initiation.InstructedAmount.Currency | [optional] 
**url** | **string** | URL to help remediate the problem, or provide more information, or to API Reference, or help etc | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


