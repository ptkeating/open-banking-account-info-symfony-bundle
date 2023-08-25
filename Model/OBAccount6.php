<?php
/**
 * OBAccount6
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
 * Class representing the OBAccount6 model.
 *
 * Unambiguous identification of the account to which credit and debit entries are made. The following fields are optional only for accounts that are switched:    * Data.Currency     * Data.AccountType     * Data.AccountSubType  For all other accounts, the fields must be populated by the ASPSP.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBAccount6 
{
        /**
     * A unique and immutable identifier used to identify the account resource. This identifier has no meaning to the account owner.
     *
     * @var string|null
     * @SerializedName("AccountId")
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
    protected ?string $accountId = null;

    /**
     * @var OBAccountStatus1Code|null
     * @SerializedName("Status")
     * @Assert\Type("OpenAPI\Server\Model\OBAccountStatus1Code")
     * @Type("OpenAPI\Server\Model\OBAccountStatus1Code")
     */
    protected ?OBAccountStatus1Code $status = null;

    /**
     * Date and time at which the resource status was updated.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @var \DateTime|null
     * @SerializedName("StatusUpdateDateTime")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $statusUpdateDateTime = null;

    /**
     * Identification of the currency in which the account is held.  Usage: Currency should only be used in case one and the same account number covers several currencies and the initiating party needs to identify which currency needs to be used for settlement on the account.
     *
     * @var string|null
     * @SerializedName("Currency")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^[A-Z]{3,3}$/")
     */
    protected ?string $currency = null;

    /**
     * @var OBExternalAccountType1Code|null
     * @SerializedName("AccountType")
     * @Assert\Type("OpenAPI\Server\Model\OBExternalAccountType1Code")
     * @Type("OpenAPI\Server\Model\OBExternalAccountType1Code")
     */
    protected ?OBExternalAccountType1Code $accountType = null;

    /**
     * @var OBExternalAccountSubType1Code|null
     * @SerializedName("AccountSubType")
     * @Assert\Type("OpenAPI\Server\Model\OBExternalAccountSubType1Code")
     * @Type("OpenAPI\Server\Model\OBExternalAccountSubType1Code")
     */
    protected ?OBExternalAccountSubType1Code $accountSubType = null;

    /**
     * Specifies the description of the account type.
     *
     * @var string|null
     * @SerializedName("Description")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 35
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $description = null;

    /**
     * The nickname of the account, assigned by the account owner in order to provide an additional means of identification of the account.
     *
     * @var string|null
     * @SerializedName("Nickname")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 70
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $nickname = null;

    /**
     * Date on which the account and related basic services are effectively operational for the account owner.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @var \DateTime|null
     * @SerializedName("OpeningDate")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $openingDate = null;

    /**
     * Maturity date of the account.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @var \DateTime|null
     * @SerializedName("MaturityDate")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $maturityDate = null;

    /**
     * Specifies the switch status for the account, in a coded form.
     *
     * @var string|null
     * @SerializedName("SwitchStatus")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $switchStatus = null;

    /**
     * @var array|null
     * @SerializedName("Account")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBAccount6AccountInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OBAccount6AccountInner>")
     */
    protected ?array $account = null;

    /**
     * @var OBBranchAndFinancialInstitutionIdentification50|null
     * @SerializedName("Servicer")
     * @Assert\Type("OpenAPI\Server\Model\OBBranchAndFinancialInstitutionIdentification50")
     * @Type("OpenAPI\Server\Model\OBBranchAndFinancialInstitutionIdentification50")
     */
    protected ?OBBranchAndFinancialInstitutionIdentification50 $servicer = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->accountId = $data['accountId'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->statusUpdateDateTime = $data['statusUpdateDateTime'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->accountType = $data['accountType'] ?? null;
        $this->accountSubType = $data['accountSubType'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->nickname = $data['nickname'] ?? null;
        $this->openingDate = $data['openingDate'] ?? null;
        $this->maturityDate = $data['maturityDate'] ?? null;
        $this->switchStatus = $data['switchStatus'] ?? null;
        $this->account = $data['account'] ?? null;
        $this->servicer = $data['servicer'] ?? null;
    }

    /**
     * Gets accountId.
     *
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * Sets accountId.
     *
     * @param string|null $accountId  A unique and immutable identifier used to identify the account resource. This identifier has no meaning to the account owner.
     *
     * @return $this
     */
    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return OBAccountStatus1Code|null
     */
    public function getStatus(): ?OBAccountStatus1Code
    {
        return $this->status;
    }

    /**
     * Sets status.
     *
     * @param OBAccountStatus1Code|null $status
     *
     * @return $this
     */
    public function setStatus(?OBAccountStatus1Code $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets statusUpdateDateTime.
     *
     * @return \DateTime|null
     */
    public function getStatusUpdateDateTime(): ?\DateTime
    {
        return $this->statusUpdateDateTime;
    }

    /**
     * Sets statusUpdateDateTime.
     *
     * @param \DateTime|null $statusUpdateDateTime  Date and time at which the resource status was updated.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @return $this
     */
    public function setStatusUpdateDateTime(?\DateTime $statusUpdateDateTime = null): self
    {
        $this->statusUpdateDateTime = $statusUpdateDateTime;

        return $this;
    }

    /**
     * Gets currency.
     *
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets currency.
     *
     * @param string|null $currency  Identification of the currency in which the account is held.  Usage: Currency should only be used in case one and the same account number covers several currencies and the initiating party needs to identify which currency needs to be used for settlement on the account.
     *
     * @return $this
     */
    public function setCurrency(?string $currency = null): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets accountType.
     *
     * @return OBExternalAccountType1Code|null
     */
    public function getAccountType(): ?OBExternalAccountType1Code
    {
        return $this->accountType;
    }

    /**
     * Sets accountType.
     *
     * @param OBExternalAccountType1Code|null $accountType
     *
     * @return $this
     */
    public function setAccountType(?OBExternalAccountType1Code $accountType = null): self
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Gets accountSubType.
     *
     * @return OBExternalAccountSubType1Code|null
     */
    public function getAccountSubType(): ?OBExternalAccountSubType1Code
    {
        return $this->accountSubType;
    }

    /**
     * Sets accountSubType.
     *
     * @param OBExternalAccountSubType1Code|null $accountSubType
     *
     * @return $this
     */
    public function setAccountSubType(?OBExternalAccountSubType1Code $accountSubType = null): self
    {
        $this->accountSubType = $accountSubType;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets description.
     *
     * @param string|null $description  Specifies the description of the account type.
     *
     * @return $this
     */
    public function setDescription(?string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets nickname.
     *
     * @return string|null
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * Sets nickname.
     *
     * @param string|null $nickname  The nickname of the account, assigned by the account owner in order to provide an additional means of identification of the account.
     *
     * @return $this
     */
    public function setNickname(?string $nickname = null): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Gets openingDate.
     *
     * @return \DateTime|null
     */
    public function getOpeningDate(): ?\DateTime
    {
        return $this->openingDate;
    }

    /**
     * Sets openingDate.
     *
     * @param \DateTime|null $openingDate  Date on which the account and related basic services are effectively operational for the account owner.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @return $this
     */
    public function setOpeningDate(?\DateTime $openingDate = null): self
    {
        $this->openingDate = $openingDate;

        return $this;
    }

    /**
     * Gets maturityDate.
     *
     * @return \DateTime|null
     */
    public function getMaturityDate(): ?\DateTime
    {
        return $this->maturityDate;
    }

    /**
     * Sets maturityDate.
     *
     * @param \DateTime|null $maturityDate  Maturity date of the account.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @return $this
     */
    public function setMaturityDate(?\DateTime $maturityDate = null): self
    {
        $this->maturityDate = $maturityDate;

        return $this;
    }

    /**
     * Gets switchStatus.
     *
     * @return string|null
     */
    public function getSwitchStatus(): ?string
    {
        return $this->switchStatus;
    }

    /**
     * Sets switchStatus.
     *
     * @param string|null $switchStatus  Specifies the switch status for the account, in a coded form.
     *
     * @return $this
     */
    public function setSwitchStatus(?string $switchStatus = null): self
    {
        $this->switchStatus = $switchStatus;

        return $this;
    }

    /**
     * Gets account.
     *
     * @return array|null
     */
    public function getAccount(): ?array
    {
        return $this->account;
    }

    /**
     * Sets account.
     *
     * @param array|null $account
     *
     * @return $this
     */
    public function setAccount(?array $account = null): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Gets servicer.
     *
     * @return OBBranchAndFinancialInstitutionIdentification50|null
     */
    public function getServicer(): ?OBBranchAndFinancialInstitutionIdentification50
    {
        return $this->servicer;
    }

    /**
     * Sets servicer.
     *
     * @param OBBranchAndFinancialInstitutionIdentification50|null $servicer
     *
     * @return $this
     */
    public function setServicer(?OBBranchAndFinancialInstitutionIdentification50 $servicer = null): self
    {
        $this->servicer = $servicer;

        return $this;
    }
}


