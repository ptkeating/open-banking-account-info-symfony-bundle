<?php
/**
 * FeeChargeDetailInner1
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
 * Class representing the FeeChargeDetailInner1 model.
 *
 * Other fees/charges details
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class FeeChargeDetailInner1 
{
        /**
     * Categorisation of fees and charges into standard categories.
     *
     * @var string|null
     * @SerializedName("FeeCategory")
     * @Assert\NotNull()
     * @Assert\Choice({ "Other", "Servicing" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $feeCategory = null;

    /**
     * Fee/Charge Type
     *
     * @var string|null
     * @SerializedName("FeeType")
     * @Assert\NotNull()
     * @Assert\Choice({ "ServiceCAccountFee", "ServiceCAccountFeeMonthly", "ServiceCOther", "Other" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $feeType = null;

    /**
     * Fee Amount charged for a fee/charge (where it is charged in terms of an amount rather than a rate)
     *
     * @var string|null
     * @SerializedName("FeeAmount")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,14}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $feeAmount = null;

    /**
     * Rate charged for Fee/Charge (where it is charged in terms of a rate rather than an amount)
     *
     * @var string|null
     * @SerializedName("FeeRate")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,3}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $feeRate = null;

    /**
     * Rate type for Fee/Charge (where it is charged in terms of a rate rather than an amount)
     *
     * @var string|null
     * @SerializedName("FeeRateType")
     * @Assert\Choice({ "LinkedBaseRate", "Gross", "Net", "Other" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $feeRateType = null;

    /**
     * How frequently the fee/charge is applied to the account
     *
     * @var string|null
     * @SerializedName("ApplicationFrequency")
     * @Assert\NotNull()
     * @Assert\Choice({ "AccountClosing", "AccountOpening", "AcademicTerm", "ChargingPeriod", "Daily", "PerItem", "Monthly", "OnAccountAnniversary", "Other", "PerHour", "PerOccurrence", "PerSheet", "PerTransaction", "PerTransactionAmount", "PerTransactionPercentage", "Quarterly", "SixMonthly", "StatementMonthly", "Weekly", "Yearly" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $applicationFrequency = null;

    /**
     * How frequently the fee/charge is calculated
     *
     * @var string|null
     * @SerializedName("CalculationFrequency")
     * @Assert\Choice({ "AccountClosing", "AccountOpening", "AcademicTerm", "ChargingPeriod", "Daily", "PerItem", "Monthly", "OnAccountAnniversary", "Other", "PerHour", "PerOccurrence", "PerSheet", "PerTransaction", "PerTransactionAmount", "PerTransactionPercentage", "Quarterly", "SixMonthly", "StatementMonthly", "Weekly", "Yearly" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $calculationFrequency = null;

    /**
     * Optional additional notes to supplement the fee/charge details.
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
     * @var OtherFeeCategoryType|null
     * @SerializedName("OtherFeeCategoryType")
     * @Assert\Type("OpenAPI\Server\Model\OtherFeeCategoryType")
     * @Type("OpenAPI\Server\Model\OtherFeeCategoryType")
     */
    protected ?OtherFeeCategoryType $otherFeeCategoryType = null;

    /**
     * @var OtherFeeType1|null
     * @SerializedName("OtherFeeType")
     * @Assert\Type("OpenAPI\Server\Model\OtherFeeType1")
     * @Type("OpenAPI\Server\Model\OtherFeeType1")
     */
    protected ?OtherFeeType1 $otherFeeType = null;

    /**
     * @var OtherFeeRateType1|null
     * @SerializedName("OtherFeeRateType")
     * @Assert\Type("OpenAPI\Server\Model\OtherFeeRateType1")
     * @Type("OpenAPI\Server\Model\OtherFeeRateType1")
     */
    protected ?OtherFeeRateType1 $otherFeeRateType = null;

    /**
     * @var OtherApplicationFrequency1|null
     * @SerializedName("OtherApplicationFrequency")
     * @Assert\Type("OpenAPI\Server\Model\OtherApplicationFrequency1")
     * @Type("OpenAPI\Server\Model\OtherApplicationFrequency1")
     */
    protected ?OtherApplicationFrequency1 $otherApplicationFrequency = null;

    /**
     * @var OtherCalculationFrequency1|null
     * @SerializedName("OtherCalculationFrequency")
     * @Assert\Type("OpenAPI\Server\Model\OtherCalculationFrequency1")
     * @Type("OpenAPI\Server\Model\OtherCalculationFrequency1")
     */
    protected ?OtherCalculationFrequency1 $otherCalculationFrequency = null;

    /**
     * Details about any caps (maximum charges) that apply to a particular fee/charge
     *
     * @var array|null
     * @SerializedName("FeeChargeCap")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\FeeChargeCapInner1")
     * })
     * @Type("array<OpenAPI\Server\Model\FeeChargeCapInner1>")
     */
    protected ?array $feeChargeCap = null;

    /**
     * @var FeeApplicableRange|null
     * @SerializedName("FeeApplicableRange")
     * @Assert\Type("OpenAPI\Server\Model\FeeApplicableRange")
     * @Type("OpenAPI\Server\Model\FeeApplicableRange")
     */
    protected ?FeeApplicableRange $feeApplicableRange = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->feeCategory = $data['feeCategory'] ?? null;
        $this->feeType = $data['feeType'] ?? null;
        $this->feeAmount = $data['feeAmount'] ?? null;
        $this->feeRate = $data['feeRate'] ?? null;
        $this->feeRateType = $data['feeRateType'] ?? null;
        $this->applicationFrequency = $data['applicationFrequency'] ?? null;
        $this->calculationFrequency = $data['calculationFrequency'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->otherFeeCategoryType = $data['otherFeeCategoryType'] ?? null;
        $this->otherFeeType = $data['otherFeeType'] ?? null;
        $this->otherFeeRateType = $data['otherFeeRateType'] ?? null;
        $this->otherApplicationFrequency = $data['otherApplicationFrequency'] ?? null;
        $this->otherCalculationFrequency = $data['otherCalculationFrequency'] ?? null;
        $this->feeChargeCap = $data['feeChargeCap'] ?? null;
        $this->feeApplicableRange = $data['feeApplicableRange'] ?? null;
    }

    /**
     * Gets feeCategory.
     *
     * @return string|null
     */
    public function getFeeCategory(): ?string
    {
        return $this->feeCategory;
    }

    /**
     * Sets feeCategory.
     *
     * @param string|null $feeCategory  Categorisation of fees and charges into standard categories.
     *
     * @return $this
     */
    public function setFeeCategory(?string $feeCategory): self
    {
        $this->feeCategory = $feeCategory;

        return $this;
    }

    /**
     * Gets feeType.
     *
     * @return string|null
     */
    public function getFeeType(): ?string
    {
        return $this->feeType;
    }

    /**
     * Sets feeType.
     *
     * @param string|null $feeType  Fee/Charge Type
     *
     * @return $this
     */
    public function setFeeType(?string $feeType): self
    {
        $this->feeType = $feeType;

        return $this;
    }

    /**
     * Gets feeAmount.
     *
     * @return string|null
     */
    public function getFeeAmount(): ?string
    {
        return $this->feeAmount;
    }

    /**
     * Sets feeAmount.
     *
     * @param string|null $feeAmount  Fee Amount charged for a fee/charge (where it is charged in terms of an amount rather than a rate)
     *
     * @return $this
     */
    public function setFeeAmount(?string $feeAmount = null): self
    {
        $this->feeAmount = $feeAmount;

        return $this;
    }

    /**
     * Gets feeRate.
     *
     * @return string|null
     */
    public function getFeeRate(): ?string
    {
        return $this->feeRate;
    }

    /**
     * Sets feeRate.
     *
     * @param string|null $feeRate  Rate charged for Fee/Charge (where it is charged in terms of a rate rather than an amount)
     *
     * @return $this
     */
    public function setFeeRate(?string $feeRate = null): self
    {
        $this->feeRate = $feeRate;

        return $this;
    }

    /**
     * Gets feeRateType.
     *
     * @return string|null
     */
    public function getFeeRateType(): ?string
    {
        return $this->feeRateType;
    }

    /**
     * Sets feeRateType.
     *
     * @param string|null $feeRateType  Rate type for Fee/Charge (where it is charged in terms of a rate rather than an amount)
     *
     * @return $this
     */
    public function setFeeRateType(?string $feeRateType = null): self
    {
        $this->feeRateType = $feeRateType;

        return $this;
    }

    /**
     * Gets applicationFrequency.
     *
     * @return string|null
     */
    public function getApplicationFrequency(): ?string
    {
        return $this->applicationFrequency;
    }

    /**
     * Sets applicationFrequency.
     *
     * @param string|null $applicationFrequency  How frequently the fee/charge is applied to the account
     *
     * @return $this
     */
    public function setApplicationFrequency(?string $applicationFrequency): self
    {
        $this->applicationFrequency = $applicationFrequency;

        return $this;
    }

    /**
     * Gets calculationFrequency.
     *
     * @return string|null
     */
    public function getCalculationFrequency(): ?string
    {
        return $this->calculationFrequency;
    }

    /**
     * Sets calculationFrequency.
     *
     * @param string|null $calculationFrequency  How frequently the fee/charge is calculated
     *
     * @return $this
     */
    public function setCalculationFrequency(?string $calculationFrequency = null): self
    {
        $this->calculationFrequency = $calculationFrequency;

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
     * @param array|null $notes  Optional additional notes to supplement the fee/charge details.
     *
     * @return $this
     */
    public function setNotes(?array $notes = null): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Gets otherFeeCategoryType.
     *
     * @return OtherFeeCategoryType|null
     */
    public function getOtherFeeCategoryType(): ?OtherFeeCategoryType
    {
        return $this->otherFeeCategoryType;
    }

    /**
     * Sets otherFeeCategoryType.
     *
     * @param OtherFeeCategoryType|null $otherFeeCategoryType
     *
     * @return $this
     */
    public function setOtherFeeCategoryType(?OtherFeeCategoryType $otherFeeCategoryType = null): self
    {
        $this->otherFeeCategoryType = $otherFeeCategoryType;

        return $this;
    }

    /**
     * Gets otherFeeType.
     *
     * @return OtherFeeType1|null
     */
    public function getOtherFeeType(): ?OtherFeeType1
    {
        return $this->otherFeeType;
    }

    /**
     * Sets otherFeeType.
     *
     * @param OtherFeeType1|null $otherFeeType
     *
     * @return $this
     */
    public function setOtherFeeType(?OtherFeeType1 $otherFeeType = null): self
    {
        $this->otherFeeType = $otherFeeType;

        return $this;
    }

    /**
     * Gets otherFeeRateType.
     *
     * @return OtherFeeRateType1|null
     */
    public function getOtherFeeRateType(): ?OtherFeeRateType1
    {
        return $this->otherFeeRateType;
    }

    /**
     * Sets otherFeeRateType.
     *
     * @param OtherFeeRateType1|null $otherFeeRateType
     *
     * @return $this
     */
    public function setOtherFeeRateType(?OtherFeeRateType1 $otherFeeRateType = null): self
    {
        $this->otherFeeRateType = $otherFeeRateType;

        return $this;
    }

    /**
     * Gets otherApplicationFrequency.
     *
     * @return OtherApplicationFrequency1|null
     */
    public function getOtherApplicationFrequency(): ?OtherApplicationFrequency1
    {
        return $this->otherApplicationFrequency;
    }

    /**
     * Sets otherApplicationFrequency.
     *
     * @param OtherApplicationFrequency1|null $otherApplicationFrequency
     *
     * @return $this
     */
    public function setOtherApplicationFrequency(?OtherApplicationFrequency1 $otherApplicationFrequency = null): self
    {
        $this->otherApplicationFrequency = $otherApplicationFrequency;

        return $this;
    }

    /**
     * Gets otherCalculationFrequency.
     *
     * @return OtherCalculationFrequency1|null
     */
    public function getOtherCalculationFrequency(): ?OtherCalculationFrequency1
    {
        return $this->otherCalculationFrequency;
    }

    /**
     * Sets otherCalculationFrequency.
     *
     * @param OtherCalculationFrequency1|null $otherCalculationFrequency
     *
     * @return $this
     */
    public function setOtherCalculationFrequency(?OtherCalculationFrequency1 $otherCalculationFrequency = null): self
    {
        $this->otherCalculationFrequency = $otherCalculationFrequency;

        return $this;
    }

    /**
     * Gets feeChargeCap.
     *
     * @return array|null
     */
    public function getFeeChargeCap(): ?array
    {
        return $this->feeChargeCap;
    }

    /**
     * Sets feeChargeCap.
     *
     * @param array|null $feeChargeCap  Details about any caps (maximum charges) that apply to a particular fee/charge
     *
     * @return $this
     */
    public function setFeeChargeCap(?array $feeChargeCap = null): self
    {
        $this->feeChargeCap = $feeChargeCap;

        return $this;
    }

    /**
     * Gets feeApplicableRange.
     *
     * @return FeeApplicableRange|null
     */
    public function getFeeApplicableRange(): ?FeeApplicableRange
    {
        return $this->feeApplicableRange;
    }

    /**
     * Sets feeApplicableRange.
     *
     * @param FeeApplicableRange|null $feeApplicableRange
     *
     * @return $this
     */
    public function setFeeApplicableRange(?FeeApplicableRange $feeApplicableRange = null): self
    {
        $this->feeApplicableRange = $feeApplicableRange;

        return $this;
    }
}


