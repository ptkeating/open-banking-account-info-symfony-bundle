# OBParty2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partyId** | **string** | A unique and immutable identifier used to identify the customer resource. This identifier has no meaning to the account owner. | 
**partyNumber** | **string** | Number assigned by an agent to identify its customer. | [optional] 
**partyType** | [**OpenAPI\Server\Model\OBExternalPartyType1Code**](OBExternalPartyType1Code.md) |  | [optional] 
**name** | **string** | Name by which a party is known and which is usually used to identify that party. | [optional] 
**fullLegalName** | **string** | Specifies a character string with a maximum length of 350 characters. | [optional] 
**legalStructure** | **string** | Legal standing of the party. | [optional] 
**beneficialOwnership** | **bool** |  | [optional] 
**accountRole** | **string** | A party’s role with respect to the related account. | [optional] 
**emailAddress** | **string** | Address for electronic mail (e-mail). | [optional] 
**phone** | **string** | Collection of information that identifies a phone number, as defined by telecom services. | [optional] 
**mobile** | **string** | Collection of information that identifies a mobile phone number, as defined by telecom services. | [optional] 
**relationships** | [**OpenAPI\Server\Model\OBPartyRelationships1**](OBPartyRelationships1.md) |  | [optional] 
**address** | [**OpenAPI\Server\Model\OBParty2AddressInner**](OBParty2AddressInner.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


