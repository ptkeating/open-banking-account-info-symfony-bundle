<?php
/**
 * OverdraftTierBandSetInner
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
 * Class representing the OverdraftTierBandSetInner model.
 *
 * Tier band set details
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OverdraftTierBandSetInner 
{
        /**
     * The methodology of how overdraft is charged. It can be: &#39;Whole&#39;  Where the same charge/rate is applied to the entirety of the overdraft balance (where charges are applicable).  &#39;Tiered&#39; Where different charges/rates are applied dependent on overdraft maximum and minimum balance amount tiers defined by the lending financial organisation &#39;Banded&#39; Where different charges/rates are applied dependent on overdraft maximum and minimum balance amount bands defined by a government organisation.
     *
     * @var string|null
     * @SerializedName("TierBandMethod")
     * @Assert\NotNull()
     * @Assert\Choice({ "Banded", "Tiered", "Whole" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $tierBandMethod = null;

    /**
     * An overdraft can either be &#39;committed&#39; which means that the facility cannot be withdrawn without reasonable notification before it&#39;s agreed end date, or &#39;on demand&#39; which means that the financial institution can demand repayment at any point in time.
     *
     * @var string|null
     * @SerializedName("OverdraftType")
     * @Assert\Choice({ "Committed", "OnDemand" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $overdraftType = null;

    /**
     * Unique and unambiguous identification of a  Tier Band for a overdraft product.
     *
     * @var string|null
     * @SerializedName("Identification")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 35
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $identification = null;

    /**
     * Indicates if the Overdraft is authorised (Y) or unauthorised (N)
     *
     * @var bool|null
     * @SerializedName("AuthorisedIndicator")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $authorisedIndicator = null;

    /**
     * When a customer exceeds their credit limit, a financial institution will not charge the customer unauthorised overdraft charges if they do not exceed by more than the buffer amount. Note: Authorised overdraft charges may still apply.
     *
     * @var string|null
     * @SerializedName("BufferAmount")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,14}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $bufferAmount = null;

    /**
     * Optional additional notes to supplement the overdraft Tier Band Set details
     *
     * @var array|null
     * @SerializedName("Notes")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $notes = null;

    /**
     * Provides overdraft details for a specific tier or band
     *
     * @var array|null
     * @SerializedName("OverdraftTierBand")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OverdraftTierBandInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OverdraftTierBandInner>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $overdraftTierBand = null;

    /**
     * Overdraft fees and charges details
     *
     * @var array|null
     * @SerializedName("OverdraftFeesCharges")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OverdraftFeesChargesInner1")
     * })
     * @Type("array<OpenAPI\Server\Model\OverdraftFeesChargesInner1>")
     */
    protected ?array $overdraftFeesCharges = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->tierBandMethod = $data['tierBandMethod'] ?? null;
        $this->overdraftType = $data['overdraftType'] ?? null;
        $this->identification = $data['identification'] ?? null;
        $this->authorisedIndicator = $data['authorisedIndicator'] ?? null;
        $this->bufferAmount = $data['bufferAmount'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->overdraftTierBand = $data['overdraftTierBand'] ?? null;
        $this->overdraftFeesCharges = $data['overdraftFeesCharges'] ?? null;
    }

    /**
     * Gets tierBandMethod.
     *
     * @return string|null
     */
    public function getTierBandMethod(): ?string
    {
        return $this->tierBandMethod;
    }

    /**
     * Sets tierBandMethod.
     *
     * @param string|null $tierBandMethod  The methodology of how overdraft is charged. It can be: 'Whole'  Where the same charge/rate is applied to the entirety of the overdraft balance (where charges are applicable).  'Tiered' Where different charges/rates are applied dependent on overdraft maximum and minimum balance amount tiers defined by the lending financial organisation 'Banded' Where different charges/rates are applied dependent on overdraft maximum and minimum balance amount bands defined by a government organisation.
     *
     * @return $this
     */
    public function setTierBandMethod(?string $tierBandMethod): self
    {
        $this->tierBandMethod = $tierBandMethod;

        return $this;
    }

    /**
     * Gets overdraftType.
     *
     * @return string|null
     */
    public function getOverdraftType(): ?string
    {
        return $this->overdraftType;
    }

    /**
     * Sets overdraftType.
     *
     * @param string|null $overdraftType  An overdraft can either be 'committed' which means that the facility cannot be withdrawn without reasonable notification before it's agreed end date, or 'on demand' which means that the financial institution can demand repayment at any point in time.
     *
     * @return $this
     */
    public function setOverdraftType(?string $overdraftType = null): self
    {
        $this->overdraftType = $overdraftType;

        return $this;
    }

    /**
     * Gets identification.
     *
     * @return string|null
     */
    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    /**
     * Sets identification.
     *
     * @param string|null $identification  Unique and unambiguous identification of a  Tier Band for a overdraft product.
     *
     * @return $this
     */
    public function setIdentification(?string $identification = null): self
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * Gets authorisedIndicator.
     *
     * @return bool|null
     */
    public function isAuthorisedIndicator(): ?bool
    {
        return $this->authorisedIndicator;
    }

    /**
     * Sets authorisedIndicator.
     *
     * @param bool|null $authorisedIndicator  Indicates if the Overdraft is authorised (Y) or unauthorised (N)
     *
     * @return $this
     */
    public function setAuthorisedIndicator(?bool $authorisedIndicator = null): self
    {
        $this->authorisedIndicator = $authorisedIndicator;

        return $this;
    }

    /**
     * Gets bufferAmount.
     *
     * @return string|null
     */
    public function getBufferAmount(): ?string
    {
        return $this->bufferAmount;
    }

    /**
     * Sets bufferAmount.
     *
     * @param string|null $bufferAmount  When a customer exceeds their credit limit, a financial institution will not charge the customer unauthorised overdraft charges if they do not exceed by more than the buffer amount. Note: Authorised overdraft charges may still apply.
     *
     * @return $this
     */
    public function setBufferAmount(?string $bufferAmount = null): self
    {
        $this->bufferAmount = $bufferAmount;

        return $this;
    }

    /**
     * Gets notes.
     *
     * @return array|null
     */
    public function getNotes(): ?array
    {
        return $this->notes;
    }

    /**
     * Sets notes.
     *
     * @param array|null $notes  Optional additional notes to supplement the overdraft Tier Band Set details
     *
     * @return $this
     */
    public function setNotes(?array $notes = null): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Gets overdraftTierBand.
     *
     * @return array|null
     */
    public function getOverdraftTierBand(): ?array
    {
        return $this->overdraftTierBand;
    }

    /**
     * Sets overdraftTierBand.
     *
     * @param array|null $overdraftTierBand  Provides overdraft details for a specific tier or band
     *
     * @return $this
     */
    public function setOverdraftTierBand(?array $overdraftTierBand): self
    {
        $this->overdraftTierBand = $overdraftTierBand;

        return $this;
    }

    /**
     * Gets overdraftFeesCharges.
     *
     * @return array|null
     */
    public function getOverdraftFeesCharges(): ?array
    {
        return $this->overdraftFeesCharges;
    }

    /**
     * Sets overdraftFeesCharges.
     *
     * @param array|null $overdraftFeesCharges  Overdraft fees and charges details
     *
     * @return $this
     */
    public function setOverdraftFeesCharges(?array $overdraftFeesCharges = null): self
    {
        $this->overdraftFeesCharges = $overdraftFeesCharges;

        return $this;
    }
}


