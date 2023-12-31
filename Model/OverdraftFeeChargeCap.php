<?php
/**
 * OverdraftFeeChargeCap
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
 * Class representing the OverdraftFeeChargeCap model.
 *
 * Details about any caps (maximum charges) that apply to a particular fee/charge
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OverdraftFeeChargeCap 
{
        /**
     * Fee/charge type which is being capped
     *
     * @var array|null
     * @SerializedName("FeeType")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Choice({ "ArrangedOverdraft", "EmergencyBorrowing", "BorrowingItem", "OverdraftRenewal", "AnnualReview", "OverdraftSetup", "Surcharge", "TempOverdraft", "UnauthorisedBorrowing", "UnauthorisedPaidTrans", "Other", "UnauthorisedUnpaidTrans" })
     * })
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $feeType = null;

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
     * Indicates that this is the minimum/ maximum fee/charge that can be applied by the financial institution
     *
     * @var string|null
     * @SerializedName("MinMaxType")
     * @Assert\NotNull()
     * @Assert\Choice({ "Minimum", "Maximum" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $minMaxType = null;

    /**
     * fee/charges are captured dependent on the number of occurrences rather than capped at a particular amount
     *
     * @var float|null
     * @SerializedName("FeeCapOccurrence")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $feeCapOccurrence = null;

    /**
     * Cap amount charged for a fee/charge
     *
     * @var string|null
     * @SerializedName("FeeCapAmount")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,14}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $feeCapAmount = null;

    /**
     * Period e.g. day, week, month etc. for which the fee/charge is capped
     *
     * @var string|null
     * @SerializedName("CappingPeriod")
     * @Assert\Choice({ "AcademicTerm", "Day", "Half Year", "Month", "Quarter", "Week", "Year" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $cappingPeriod = null;

    /**
     * Notes related to Overdraft fee charge cap
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
     * Other fee type code which is not available in the standard code set
     *
     * @var array|null
     * @SerializedName("OtherFeeType")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OtherFeeTypeInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OtherFeeTypeInner>")
     */
    protected ?array $otherFeeType = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->feeType = $data['feeType'] ?? null;
        $this->overdraftControlIndicator = $data['overdraftControlIndicator'] ?? null;
        $this->minMaxType = $data['minMaxType'] ?? null;
        $this->feeCapOccurrence = $data['feeCapOccurrence'] ?? null;
        $this->feeCapAmount = $data['feeCapAmount'] ?? null;
        $this->cappingPeriod = $data['cappingPeriod'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->otherFeeType = $data['otherFeeType'] ?? null;
    }

    /**
     * Gets feeType.
     *
     * @return array|null
     */
    public function getFeeType(): ?array
    {
        return $this->feeType;
    }

    /**
     * Sets feeType.
     *
     * @param array|null $feeType  Fee/charge type which is being capped
     *
     * @return $this
     */
    public function setFeeType(?array $feeType): self
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
     * Gets minMaxType.
     *
     * @return string|null
     */
    public function getMinMaxType(): ?string
    {
        return $this->minMaxType;
    }

    /**
     * Sets minMaxType.
     *
     * @param string|null $minMaxType  Indicates that this is the minimum/ maximum fee/charge that can be applied by the financial institution
     *
     * @return $this
     */
    public function setMinMaxType(?string $minMaxType): self
    {
        $this->minMaxType = $minMaxType;

        return $this;
    }

    /**
     * Gets feeCapOccurrence.
     *
     * @return float|null
     */
    public function getFeeCapOccurrence(): ?float
    {
        return $this->feeCapOccurrence;
    }

    /**
     * Sets feeCapOccurrence.
     *
     * @param float|null $feeCapOccurrence  fee/charges are captured dependent on the number of occurrences rather than capped at a particular amount
     *
     * @return $this
     */
    public function setFeeCapOccurrence(?float $feeCapOccurrence = null): self
    {
        $this->feeCapOccurrence = $feeCapOccurrence;

        return $this;
    }

    /**
     * Gets feeCapAmount.
     *
     * @return string|null
     */
    public function getFeeCapAmount(): ?string
    {
        return $this->feeCapAmount;
    }

    /**
     * Sets feeCapAmount.
     *
     * @param string|null $feeCapAmount  Cap amount charged for a fee/charge
     *
     * @return $this
     */
    public function setFeeCapAmount(?string $feeCapAmount = null): self
    {
        $this->feeCapAmount = $feeCapAmount;

        return $this;
    }

    /**
     * Gets cappingPeriod.
     *
     * @return string|null
     */
    public function getCappingPeriod(): ?string
    {
        return $this->cappingPeriod;
    }

    /**
     * Sets cappingPeriod.
     *
     * @param string|null $cappingPeriod  Period e.g. day, week, month etc. for which the fee/charge is capped
     *
     * @return $this
     */
    public function setCappingPeriod(?string $cappingPeriod = null): self
    {
        $this->cappingPeriod = $cappingPeriod;

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
     * @param array|null $notes  Notes related to Overdraft fee charge cap
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
     * @return array|null
     */
    public function getOtherFeeType(): ?array
    {
        return $this->otherFeeType;
    }

    /**
     * Sets otherFeeType.
     *
     * @param array|null $otherFeeType  Other fee type code which is not available in the standard code set
     *
     * @return $this
     */
    public function setOtherFeeType(?array $otherFeeType = null): self
    {
        $this->otherFeeType = $otherFeeType;

        return $this;
    }
}


