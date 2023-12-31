<?php
/**
 * OBParty2
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Account and Transaction API Specification
 *
 * Swagger for Account and Transaction API Specification
 *
 * The version of the OpenAPI document: 3.1.11
 * Contact: ServiceDesk@openbanking.org.uk
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the OBParty2 model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBParty2 
{
        /**
     * A unique and immutable identifier used to identify the customer resource. This identifier has no meaning to the account owner.
     *
     * @var string|null
     * @SerializedName("PartyId")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 40
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $partyId = null;

    /**
     * Number assigned by an agent to identify its customer.
     *
     * @var string|null
     * @SerializedName("PartyNumber")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 35
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $partyNumber = null;

    /**
     * @var OBExternalPartyType1Code|null
     * @SerializedName("PartyType")
     * @Assert\Type("OpenAPI\Server\Model\OBExternalPartyType1Code")
     * @Type("OpenAPI\Server\Model\OBExternalPartyType1Code")
     */
    protected ?OBExternalPartyType1Code $partyType = null;

    /**
     * Name by which a party is known and which is usually used to identify that party.
     *
     * @var string|null
     * @SerializedName("Name")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 350
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $name = null;

    /**
     * Specifies a character string with a maximum length of 350 characters.
     *
     * @var string|null
     * @SerializedName("FullLegalName")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 350
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $fullLegalName = null;

    /**
     * Legal standing of the party.
     *
     * @var string|null
     * @SerializedName("LegalStructure")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $legalStructure = null;

    /**
     * @var bool|null
     * @SerializedName("BeneficialOwnership")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $beneficialOwnership = null;

    /**
     * A party’s role with respect to the related account.
     *
     * @var string|null
     * @SerializedName("AccountRole")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $accountRole = null;

    /**
     * Address for electronic mail (e-mail).
     *
     * @var string|null
     * @SerializedName("EmailAddress")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 256
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $emailAddress = null;

    /**
     * Collection of information that identifies a phone number, as defined by telecom services.
     *
     * @var string|null
     * @SerializedName("Phone")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/\\+[0-9]{1,3}-[0-9()+\\-]{1,30}/")
     */
    protected ?string $phone = null;

    /**
     * Collection of information that identifies a mobile phone number, as defined by telecom services.
     *
     * @var string|null
     * @SerializedName("Mobile")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/\\+[0-9]{1,3}-[0-9()+\\-]{1,30}/")
     */
    protected ?string $mobile = null;

    /**
     * @var OBPartyRelationships1|null
     * @SerializedName("Relationships")
     * @Assert\Type("OpenAPI\Server\Model\OBPartyRelationships1")
     * @Type("OpenAPI\Server\Model\OBPartyRelationships1")
     */
    protected ?OBPartyRelationships1 $relationships = null;

    /**
     * @var array|null
     * @SerializedName("Address")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBParty2AddressInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OBParty2AddressInner>")
     */
    protected ?array $address = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->partyId = $data['partyId'] ?? null;
        $this->partyNumber = $data['partyNumber'] ?? null;
        $this->partyType = $data['partyType'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->fullLegalName = $data['fullLegalName'] ?? null;
        $this->legalStructure = $data['legalStructure'] ?? null;
        $this->beneficialOwnership = $data['beneficialOwnership'] ?? null;
        $this->accountRole = $data['accountRole'] ?? null;
        $this->emailAddress = $data['emailAddress'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->mobile = $data['mobile'] ?? null;
        $this->relationships = $data['relationships'] ?? null;
        $this->address = $data['address'] ?? null;
    }

    /**
     * Gets partyId.
     *
     * @return string|null
     */
    public function getPartyId(): ?string
    {
        return $this->partyId;
    }

    /**
     * Sets partyId.
     *
     * @param string|null $partyId  A unique and immutable identifier used to identify the customer resource. This identifier has no meaning to the account owner.
     *
     * @return $this
     */
    public function setPartyId(?string $partyId): self
    {
        $this->partyId = $partyId;

        return $this;
    }

    /**
     * Gets partyNumber.
     *
     * @return string|null
     */
    public function getPartyNumber(): ?string
    {
        return $this->partyNumber;
    }

    /**
     * Sets partyNumber.
     *
     * @param string|null $partyNumber  Number assigned by an agent to identify its customer.
     *
     * @return $this
     */
    public function setPartyNumber(?string $partyNumber = null): self
    {
        $this->partyNumber = $partyNumber;

        return $this;
    }

    /**
     * Gets partyType.
     *
     * @return OBExternalPartyType1Code|null
     */
    public function getPartyType(): ?OBExternalPartyType1Code
    {
        return $this->partyType;
    }

    /**
     * Sets partyType.
     *
     * @param OBExternalPartyType1Code|null $partyType
     *
     * @return $this
     */
    public function setPartyType(?OBExternalPartyType1Code $partyType = null): self
    {
        $this->partyType = $partyType;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string|null $name  Name by which a party is known and which is usually used to identify that party.
     *
     * @return $this
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets fullLegalName.
     *
     * @return string|null
     */
    public function getFullLegalName(): ?string
    {
        return $this->fullLegalName;
    }

    /**
     * Sets fullLegalName.
     *
     * @param string|null $fullLegalName  Specifies a character string with a maximum length of 350 characters.
     *
     * @return $this
     */
    public function setFullLegalName(?string $fullLegalName = null): self
    {
        $this->fullLegalName = $fullLegalName;

        return $this;
    }

    /**
     * Gets legalStructure.
     *
     * @return string|null
     */
    public function getLegalStructure(): ?string
    {
        return $this->legalStructure;
    }

    /**
     * Sets legalStructure.
     *
     * @param string|null $legalStructure  Legal standing of the party.
     *
     * @return $this
     */
    public function setLegalStructure(?string $legalStructure = null): self
    {
        $this->legalStructure = $legalStructure;

        return $this;
    }

    /**
     * Gets beneficialOwnership.
     *
     * @return bool|null
     */
    public function isBeneficialOwnership(): ?bool
    {
        return $this->beneficialOwnership;
    }

    /**
     * Sets beneficialOwnership.
     *
     * @param bool|null $beneficialOwnership
     *
     * @return $this
     */
    public function setBeneficialOwnership(?bool $beneficialOwnership = null): self
    {
        $this->beneficialOwnership = $beneficialOwnership;

        return $this;
    }

    /**
     * Gets accountRole.
     *
     * @return string|null
     */
    public function getAccountRole(): ?string
    {
        return $this->accountRole;
    }

    /**
     * Sets accountRole.
     *
     * @param string|null $accountRole  A party’s role with respect to the related account.
     *
     * @return $this
     */
    public function setAccountRole(?string $accountRole = null): self
    {
        $this->accountRole = $accountRole;

        return $this;
    }

    /**
     * Gets emailAddress.
     *
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * Sets emailAddress.
     *
     * @param string|null $emailAddress  Address for electronic mail (e-mail).
     *
     * @return $this
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Gets phone.
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Sets phone.
     *
     * @param string|null $phone  Collection of information that identifies a phone number, as defined by telecom services.
     *
     * @return $this
     */
    public function setPhone(?string $phone = null): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Gets mobile.
     *
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * Sets mobile.
     *
     * @param string|null $mobile  Collection of information that identifies a mobile phone number, as defined by telecom services.
     *
     * @return $this
     */
    public function setMobile(?string $mobile = null): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Gets relationships.
     *
     * @return OBPartyRelationships1|null
     */
    public function getRelationships(): ?OBPartyRelationships1
    {
        return $this->relationships;
    }

    /**
     * Sets relationships.
     *
     * @param OBPartyRelationships1|null $relationships
     *
     * @return $this
     */
    public function setRelationships(?OBPartyRelationships1 $relationships = null): self
    {
        $this->relationships = $relationships;

        return $this;
    }

    /**
     * Gets address.
     *
     * @return array|null
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * Sets address.
     *
     * @param array|null $address
     *
     * @return $this
     */
    public function setAddress(?array $address = null): self
    {
        $this->address = $address;

        return $this;
    }
}


