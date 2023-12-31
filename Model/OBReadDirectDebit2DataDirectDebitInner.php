<?php
/**
 * OBReadDirectDebit2DataDirectDebitInner
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
 * Class representing the OBReadDirectDebit2DataDirectDebitInner model.
 *
 * Account to or from which a cash entry is made.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadDirectDebit2DataDirectDebitInner 
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
     * A unique and immutable identifier used to identify the direct debit resource. This identifier has no meaning to the account owner.
     *
     * @var string|null
     * @SerializedName("DirectDebitId")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 40
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $directDebitId = null;

    /**
     * Direct Debit reference. For AUDDIS service users provide Core Reference. For non AUDDIS service users provide Core reference if possible or last used reference.
     *
     * @var string|null
     * @SerializedName("MandateIdentification")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 35
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $mandateIdentification = null;

    /**
     * @var OBExternalDirectDebitStatus1Code|null
     * @SerializedName("DirectDebitStatusCode")
     * @Assert\Type("OpenAPI\Server\Model\OBExternalDirectDebitStatus1Code")
     * @Type("OpenAPI\Server\Model\OBExternalDirectDebitStatus1Code")
     */
    protected ?OBExternalDirectDebitStatus1Code $directDebitStatusCode = null;

    /**
     * Name of Service User.
     *
     * @var string|null
     * @SerializedName("Name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 70
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $name = null;

    /**
     * Date of most recent direct debit collection.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @var \DateTime|null
     * @SerializedName("PreviousPaymentDateTime")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $previousPaymentDateTime = null;

    /**
     * Regularity with which direct debit instructions are to be created and processed.
     *
     * @var string|null
     * @SerializedName("Frequency")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $frequency = null;

    /**
     * @var OBActiveOrHistoricCurrencyAndAmount0|null
     * @SerializedName("PreviousPaymentAmount")
     * @Assert\Type("OpenAPI\Server\Model\OBActiveOrHistoricCurrencyAndAmount0")
     * @Type("OpenAPI\Server\Model\OBActiveOrHistoricCurrencyAndAmount0")
     */
    protected ?OBActiveOrHistoricCurrencyAndAmount0 $previousPaymentAmount = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->accountId = $data['accountId'] ?? null;
        $this->directDebitId = $data['directDebitId'] ?? null;
        $this->mandateIdentification = $data['mandateIdentification'] ?? null;
        $this->directDebitStatusCode = $data['directDebitStatusCode'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->previousPaymentDateTime = $data['previousPaymentDateTime'] ?? null;
        $this->frequency = $data['frequency'] ?? null;
        $this->previousPaymentAmount = $data['previousPaymentAmount'] ?? null;
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
     * Gets directDebitId.
     *
     * @return string|null
     */
    public function getDirectDebitId(): ?string
    {
        return $this->directDebitId;
    }

    /**
     * Sets directDebitId.
     *
     * @param string|null $directDebitId  A unique and immutable identifier used to identify the direct debit resource. This identifier has no meaning to the account owner.
     *
     * @return $this
     */
    public function setDirectDebitId(?string $directDebitId = null): self
    {
        $this->directDebitId = $directDebitId;

        return $this;
    }

    /**
     * Gets mandateIdentification.
     *
     * @return string|null
     */
    public function getMandateIdentification(): ?string
    {
        return $this->mandateIdentification;
    }

    /**
     * Sets mandateIdentification.
     *
     * @param string|null $mandateIdentification  Direct Debit reference. For AUDDIS service users provide Core Reference. For non AUDDIS service users provide Core reference if possible or last used reference.
     *
     * @return $this
     */
    public function setMandateIdentification(?string $mandateIdentification): self
    {
        $this->mandateIdentification = $mandateIdentification;

        return $this;
    }

    /**
     * Gets directDebitStatusCode.
     *
     * @return OBExternalDirectDebitStatus1Code|null
     */
    public function getDirectDebitStatusCode(): ?OBExternalDirectDebitStatus1Code
    {
        return $this->directDebitStatusCode;
    }

    /**
     * Sets directDebitStatusCode.
     *
     * @param OBExternalDirectDebitStatus1Code|null $directDebitStatusCode
     *
     * @return $this
     */
    public function setDirectDebitStatusCode(?OBExternalDirectDebitStatus1Code $directDebitStatusCode = null): self
    {
        $this->directDebitStatusCode = $directDebitStatusCode;

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
     * @param string|null $name  Name of Service User.
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets previousPaymentDateTime.
     *
     * @return \DateTime|null
     */
    public function getPreviousPaymentDateTime(): ?\DateTime
    {
        return $this->previousPaymentDateTime;
    }

    /**
     * Sets previousPaymentDateTime.
     *
     * @param \DateTime|null $previousPaymentDateTime  Date of most recent direct debit collection.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @return $this
     */
    public function setPreviousPaymentDateTime(?\DateTime $previousPaymentDateTime = null): self
    {
        $this->previousPaymentDateTime = $previousPaymentDateTime;

        return $this;
    }

    /**
     * Gets frequency.
     *
     * @return string|null
     */
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    /**
     * Sets frequency.
     *
     * @param string|null $frequency  Regularity with which direct debit instructions are to be created and processed.
     *
     * @return $this
     */
    public function setFrequency(?string $frequency = null): self
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Gets previousPaymentAmount.
     *
     * @return OBActiveOrHistoricCurrencyAndAmount0|null
     */
    public function getPreviousPaymentAmount(): ?OBActiveOrHistoricCurrencyAndAmount0
    {
        return $this->previousPaymentAmount;
    }

    /**
     * Sets previousPaymentAmount.
     *
     * @param OBActiveOrHistoricCurrencyAndAmount0|null $previousPaymentAmount
     *
     * @return $this
     */
    public function setPreviousPaymentAmount(?OBActiveOrHistoricCurrencyAndAmount0 $previousPaymentAmount = null): self
    {
        $this->previousPaymentAmount = $previousPaymentAmount;

        return $this;
    }
}


