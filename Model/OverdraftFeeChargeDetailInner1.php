<?php
/**
 * OverdraftFeeChargeDetailInner1
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
 * Class representing the OverdraftFeeChargeDetailInner1 model.
 *
 * Details about the fees/charges
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OverdraftFeeChargeDetailInner1 
{
        /**
     * Overdraft fee type
     *
     * @var string|null
     * @SerializedName("FeeType")
     * @Assert\NotNull()
     * @Assert\Choice({ "ArrangedOverdraft", "EmergencyBorrowing", "BorrowingItem", "OverdraftRenewal", "AnnualReview", "OverdraftSetup", "Surcharge", "TempOverdraft", "UnauthorisedBorrowing", "UnauthorisedPaidTrans", "Other", "UnauthorisedUnpaidTrans" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $feeType = null;

    /**
     * Specifies for the overdraft control feature/benefit
     *
     * @var bool|null
     * @SerializedName("OverdraftControlIndicator")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $overdraftControlIndicator = null;

    /**
     * Every additional tranche of an overdraft balance to which an overdraft fee is applied
     *
     * @var string|null
     * @SerializedName("IncrementalBorrowingAmount")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,14}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $incrementalBorrowingAmount = null;

    /**
     * Amount charged for an overdraft fee/charge (where it is charged in terms of an amount rather than a rate)
     *
     * @var string|null
     * @SerializedName("FeeAmount")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,14}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $feeAmount = null;

    /**
     * Rate charged for overdraft fee/charge (where it is charged in terms of a rate rather than an amount)
     *
     * @var string|null
     * @SerializedName("FeeRate")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,3}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $feeRate = null;

    /**
     * Rate type for overdraft fee/charge (where it is charged in terms of a rate rather than an amount)
     *
     * @var string|null
     * @SerializedName("FeeRateType")
     * @Assert\Choice({ "LinkedBaseRate", "Gross", "Net", "Other" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $feeRateType = null;

    /**
     * Frequency at which the overdraft charge is applied to the account
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
     * How often is the overdraft fee/charge calculated for the account.
     *
     * @var string|null
     * @SerializedName("CalculationFrequency")
     * @Assert\Choice({ "AccountClosing", "AccountOpening", "AcademicTerm", "ChargingPeriod", "Daily", "PerItem", "Monthly", "OnAccountAnniversary", "Other", "PerHour", "PerOccurrence", "PerSheet", "PerTransaction", "PerTransactionAmount", "PerTransactionPercentage", "Quarterly", "SixMonthly", "StatementMonthly", "Weekly", "Yearly" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $calculationFrequency = null;

    /**
     * Free text for capturing any other info related to Overdraft Fees Charge Details
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
     * @var OtherFeeType|null
     * @SerializedName("OtherFeeType")
     * @Assert\Type("OpenAPI\Server\Model\OtherFeeType")
     * @Type("OpenAPI\Server\Model\OtherFeeType")
     */
    protected ?OtherFeeType $otherFeeType = null;

    /**
     * @var OtherFeeRateType|null
     * @SerializedName("OtherFeeRateType")
     * @Assert\Type("OpenAPI\Server\Model\OtherFeeRateType")
     * @Type("OpenAPI\Server\Model\OtherFeeRateType")
     */
    protected ?OtherFeeRateType $otherFeeRateType = null;

    /**
     * @var OtherApplicationFrequency|null
     * @SerializedName("OtherApplicationFrequency")
     * @Assert\Type("OpenAPI\Server\Model\OtherApplicationFrequency")
     * @Type("OpenAPI\Server\Model\OtherApplicationFrequency")
     */
    protected ?OtherApplicationFrequency $otherApplicationFrequency = null;

    /**
     * @var OtherCalculationFrequency|null
     * @SerializedName("OtherCalculationFrequency")
     * @Assert\Type("OpenAPI\Server\Model\OtherCalculationFrequency")
     * @Type("OpenAPI\Server\Model\OtherCalculationFrequency")
     */
    protected ?OtherCalculationFrequency $otherCalculationFrequency = null;

    /**
     * @var OverdraftFeeChargeCap|null
     * @SerializedName("OverdraftFeeChargeCap")
     * @Assert\Type("OpenAPI\Server\Model\OverdraftFeeChargeCap")
     * @Type("OpenAPI\Server\Model\OverdraftFeeChargeCap")
     */
    protected ?OverdraftFeeChargeCap $overdraftFeeChargeCap = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->feeType = $data['feeType'] ?? null;
        $this->overdraftControlIndicator = $data['overdraftControlIndicator'] ?? null;
        $this->incrementalBorrowingAmount = $data['incrementalBorrowingAmount'] ?? null;
        $this->feeAmount = $data['feeAmount'] ?? null;
        $this->feeRate = $data['feeRate'] ?? null;
        $this->feeRateType = $data['feeRateType'] ?? null;
        $this->applicationFrequency = $data['applicationFrequency'] ?? null;
        $this->calculationFrequency = $data['calculationFrequency'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->otherFeeType = $data['otherFeeType'] ?? null;
        $this->otherFeeRateType = $data['otherFeeRateType'] ?? null;
        $this->otherApplicationFrequency = $data['otherApplicationFrequency'] ?? null;
        $this->otherCalculationFrequency = $data['otherCalculationFrequency'] ?? null;
        $this->overdraftFeeChargeCap = $data['overdraftFeeChargeCap'] ?? null;
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
     * @param string|null $feeType  Overdraft fee type
     *
     * @return $this
     */
    public function setFeeType(?string $feeType): self
    {
        $this->feeType = $feeType;

        return $this;
    }

    /**
     * Gets overdraftControlIndicator.
     *
     * @return bool|null
     */
    public function isOverdraftControlIndicator(): ?bool
    {
        return $this->overdraftControlIndicator;
    }

    /**
     * Sets overdraftControlIndicator.
     *
     * @param bool|null $overdraftControlIndicator  Specifies for the overdraft control feature/benefit
     *
     * @return $this
     */
    public function setOverdraftControlIndicator(?bool $overdraftControlIndicator = null): self
    {
        $this->overdraftControlIndicator = $overdraftControlIndicator;

        return $this;
    }

    /**
     * Gets incrementalBorrowingAmount.
     *
     * @return string|null
     */
    public function getIncrementalBorrowingAmount(): ?string
    {
        return $this->incrementalBorrowingAmount;
    }

    /**
     * Sets incrementalBorrowingAmount.
     *
     * @param string|null $incrementalBorrowingAmount  Every additional tranche of an overdraft balance to which an overdraft fee is applied
     *
     * @return $this
     */
    public function setIncrementalBorrowingAmount(?string $incrementalBorrowingAmount = null): self
    {
        $this->incrementalBorrowingAmount = $incrementalBorrowingAmount;

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
     * @param string|null $feeAmount  Amount charged for an overdraft fee/charge (where it is charged in terms of an amount rather than a rate)
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
     * @param string|null $feeRate  Rate charged for overdraft fee/charge (where it is charged in terms of a rate rather than an amount)
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
     * @param string|null $feeRateType  Rate type for overdraft fee/charge (where it is charged in terms of a rate rather than an amount)
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
     * @param string|null $applicationFrequency  Frequency at which the overdraft charge is applied to the account
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
     * @param string|null $calculationFrequency  How often is the overdraft fee/charge calculated for the account.
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
     * @param array|null $notes  Free text for capturing any other info related to Overdraft Fees Charge Details
     *
     * @return $this
     */
    public function setNotes(?array $notes = null): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Gets otherFeeType.
     *
     * @return OtherFeeType|null
     */
    public function getOtherFeeType(): ?OtherFeeType
    {
        return $this->otherFeeType;
    }

    /**
     * Sets otherFeeType.
     *
     * @param OtherFeeType|null $otherFeeType
     *
     * @return $this
     */
    public function setOtherFeeType(?OtherFeeType $otherFeeType = null): self
    {
        $this->otherFeeType = $otherFeeType;

        return $this;
    }

    /**
     * Gets otherFeeRateType.
     *
     * @return OtherFeeRateType|null
     */
    public function getOtherFeeRateType(): ?OtherFeeRateType
    {
        return $this->otherFeeRateType;
    }

    /**
     * Sets otherFeeRateType.
     *
     * @param OtherFeeRateType|null $otherFeeRateType
     *
     * @return $this
     */
    public function setOtherFeeRateType(?OtherFeeRateType $otherFeeRateType = null): self
    {
        $this->otherFeeRateType = $otherFeeRateType;

        return $this;
    }

    /**
     * Gets otherApplicationFrequency.
     *
     * @return OtherApplicationFrequency|null
     */
    public function getOtherApplicationFrequency(): ?OtherApplicationFrequency
    {
        return $this->otherApplicationFrequency;
    }

    /**
     * Sets otherApplicationFrequency.
     *
     * @param OtherApplicationFrequency|null $otherApplicationFrequency
     *
     * @return $this
     */
    public function setOtherApplicationFrequency(?OtherApplicationFrequency $otherApplicationFrequency = null): self
    {
        $this->otherApplicationFrequency = $otherApplicationFrequency;

        return $this;
    }

    /**
     * Gets otherCalculationFrequency.
     *
     * @return OtherCalculationFrequency|null
     */
    public function getOtherCalculationFrequency(): ?OtherCalculationFrequency
    {
        return $this->otherCalculationFrequency;
    }

    /**
     * Sets otherCalculationFrequency.
     *
     * @param OtherCalculationFrequency|null $otherCalculationFrequency
     *
     * @return $this
     */
    public function setOtherCalculationFrequency(?OtherCalculationFrequency $otherCalculationFrequency = null): self
    {
        $this->otherCalculationFrequency = $otherCalculationFrequency;

        return $this;
    }

    /**
     * Gets overdraftFeeChargeCap.
     *
     * @return OverdraftFeeChargeCap|null
     */
    public function getOverdraftFeeChargeCap(): ?OverdraftFeeChargeCap
    {
        return $this->overdraftFeeChargeCap;
    }

    /**
     * Sets overdraftFeeChargeCap.
     *
     * @param OverdraftFeeChargeCap|null $overdraftFeeChargeCap
     *
     * @return $this
     */
    public function setOverdraftFeeChargeCap(?OverdraftFeeChargeCap $overdraftFeeChargeCap = null): self
    {
        $this->overdraftFeeChargeCap = $overdraftFeeChargeCap;

        return $this;
    }
}


