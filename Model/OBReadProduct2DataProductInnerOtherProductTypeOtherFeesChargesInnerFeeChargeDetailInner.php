<?php
/**
 * OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInner
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
 * Class representing the OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInner model.
 *
 * Other fees/charges details
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInner 
{
        /**
     * @var OBFeeCategory1Code|null
     * @SerializedName("FeeCategory")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\OBFeeCategory1Code")
     * @Type("OpenAPI\Server\Model\OBFeeCategory1Code")
     */
    protected ?OBFeeCategory1Code $feeCategory = null;

    /**
     * @var OBFeeType1Code|null
     * @SerializedName("FeeType")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\OBFeeType1Code")
     * @Type("OpenAPI\Server\Model\OBFeeType1Code")
     */
    protected ?OBFeeType1Code $feeType = null;

    /**
     * Fee/charge which is usually negotiable rather than a fixed amount
     *
     * @var bool|null
     * @SerializedName("NegotiableIndicator")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $negotiableIndicator = null;

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
     * @var OBInterestRateType1Code1|null
     * @SerializedName("FeeRateType")
     * @Assert\Type("OpenAPI\Server\Model\OBInterestRateType1Code1")
     * @Type("OpenAPI\Server\Model\OBInterestRateType1Code1")
     */
    protected ?OBInterestRateType1Code1 $feeRateType = null;

    /**
     * @var OBFeeFrequency1Code2|null
     * @SerializedName("ApplicationFrequency")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\OBFeeFrequency1Code2")
     * @Type("OpenAPI\Server\Model\OBFeeFrequency1Code2")
     */
    protected ?OBFeeFrequency1Code2 $applicationFrequency = null;

    /**
     * @var OBFeeFrequency1Code3|null
     * @SerializedName("CalculationFrequency")
     * @Assert\Type("OpenAPI\Server\Model\OBFeeFrequency1Code3")
     * @Type("OpenAPI\Server\Model\OBFeeFrequency1Code3")
     */
    protected ?OBFeeFrequency1Code3 $calculationFrequency = null;

    /**
     * @var array|null
     * @SerializedName("Notes")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $notes = null;

    /**
     * @var array|null
     * @SerializedName("FeeChargeCap")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeChargeCapInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeChargeCapInner>")
     */
    protected ?array $feeChargeCap = null;

    /**
     * @var OBOtherCodeType10|null
     * @SerializedName("OtherFeeCategoryType")
     * @Assert\Type("OpenAPI\Server\Model\OBOtherCodeType10")
     * @Type("OpenAPI\Server\Model\OBOtherCodeType10")
     */
    protected ?OBOtherCodeType10 $otherFeeCategoryType = null;

    /**
     * @var OBOtherFeeChargeDetailType|null
     * @SerializedName("OtherFeeType")
     * @Assert\Type("OpenAPI\Server\Model\OBOtherFeeChargeDetailType")
     * @Type("OpenAPI\Server\Model\OBOtherFeeChargeDetailType")
     */
    protected ?OBOtherFeeChargeDetailType $otherFeeType = null;

    /**
     * @var OBOtherCodeType18|null
     * @SerializedName("OtherFeeRateType")
     * @Assert\Type("OpenAPI\Server\Model\OBOtherCodeType18")
     * @Type("OpenAPI\Server\Model\OBOtherCodeType18")
     */
    protected ?OBOtherCodeType18 $otherFeeRateType = null;

    /**
     * @var OBOtherCodeType16|null
     * @SerializedName("OtherApplicationFrequency")
     * @Assert\Type("OpenAPI\Server\Model\OBOtherCodeType16")
     * @Type("OpenAPI\Server\Model\OBOtherCodeType16")
     */
    protected ?OBOtherCodeType16 $otherApplicationFrequency = null;

    /**
     * @var OBOtherCodeType17|null
     * @SerializedName("OtherCalculationFrequency")
     * @Assert\Type("OpenAPI\Server\Model\OBOtherCodeType17")
     * @Type("OpenAPI\Server\Model\OBOtherCodeType17")
     */
    protected ?OBOtherCodeType17 $otherCalculationFrequency = null;

    /**
     * @var OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeApplicableRange|null
     * @SerializedName("FeeApplicableRange")
     * @Assert\Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeApplicableRange")
     * @Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeApplicableRange")
     */
    protected ?OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeApplicableRange $feeApplicableRange = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->feeCategory = $data['feeCategory'] ?? null;
        $this->feeType = $data['feeType'] ?? null;
        $this->negotiableIndicator = $data['negotiableIndicator'] ?? null;
        $this->feeAmount = $data['feeAmount'] ?? null;
        $this->feeRate = $data['feeRate'] ?? null;
        $this->feeRateType = $data['feeRateType'] ?? null;
        $this->applicationFrequency = $data['applicationFrequency'] ?? null;
        $this->calculationFrequency = $data['calculationFrequency'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->feeChargeCap = $data['feeChargeCap'] ?? null;
        $this->otherFeeCategoryType = $data['otherFeeCategoryType'] ?? null;
        $this->otherFeeType = $data['otherFeeType'] ?? null;
        $this->otherFeeRateType = $data['otherFeeRateType'] ?? null;
        $this->otherApplicationFrequency = $data['otherApplicationFrequency'] ?? null;
        $this->otherCalculationFrequency = $data['otherCalculationFrequency'] ?? null;
        $this->feeApplicableRange = $data['feeApplicableRange'] ?? null;
    }

    /**
     * Gets feeCategory.
     *
     * @return OBFeeCategory1Code|null
     */
    public function getFeeCategory(): ?OBFeeCategory1Code
    {
        return $this->feeCategory;
    }

    /**
     * Sets feeCategory.
     *
     * @param OBFeeCategory1Code|null $feeCategory
     *
     * @return $this
     */
    public function setFeeCategory(?OBFeeCategory1Code $feeCategory): self
    {
        $this->feeCategory = $feeCategory;

        return $this;
    }

    /**
     * Gets feeType.
     *
     * @return OBFeeType1Code|null
     */
    public function getFeeType(): ?OBFeeType1Code
    {
        return $this->feeType;
    }

    /**
     * Sets feeType.
     *
     * @param OBFeeType1Code|null $feeType
     *
     * @return $this
     */
    public function setFeeType(?OBFeeType1Code $feeType): self
    {
        $this->feeType = $feeType;

        return $this;
    }

    /**
     * Gets negotiableIndicator.
     *
     * @return bool|null
     */
    public function isNegotiableIndicator(): ?bool
    {
        return $this->negotiableIndicator;
    }

    /**
     * Sets negotiableIndicator.
     *
     * @param bool|null $negotiableIndicator  Fee/charge which is usually negotiable rather than a fixed amount
     *
     * @return $this
     */
    public function setNegotiableIndicator(?bool $negotiableIndicator = null): self
    {
        $this->negotiableIndicator = $negotiableIndicator;

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
     * @return OBInterestRateType1Code1|null
     */
    public function getFeeRateType(): ?OBInterestRateType1Code1
    {
        return $this->feeRateType;
    }

    /**
     * Sets feeRateType.
     *
     * @param OBInterestRateType1Code1|null $feeRateType
     *
     * @return $this
     */
    public function setFeeRateType(?OBInterestRateType1Code1 $feeRateType = null): self
    {
        $this->feeRateType = $feeRateType;

        return $this;
    }

    /**
     * Gets applicationFrequency.
     *
     * @return OBFeeFrequency1Code2|null
     */
    public function getApplicationFrequency(): ?OBFeeFrequency1Code2
    {
        return $this->applicationFrequency;
    }

    /**
     * Sets applicationFrequency.
     *
     * @param OBFeeFrequency1Code2|null $applicationFrequency
     *
     * @return $this
     */
    public function setApplicationFrequency(?OBFeeFrequency1Code2 $applicationFrequency): self
    {
        $this->applicationFrequency = $applicationFrequency;

        return $this;
    }

    /**
     * Gets calculationFrequency.
     *
     * @return OBFeeFrequency1Code3|null
     */
    public function getCalculationFrequency(): ?OBFeeFrequency1Code3
    {
        return $this->calculationFrequency;
    }

    /**
     * Sets calculationFrequency.
     *
     * @param OBFeeFrequency1Code3|null $calculationFrequency
     *
     * @return $this
     */
    public function setCalculationFrequency(?OBFeeFrequency1Code3 $calculationFrequency = null): self
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
     * @param array|null $notes
     *
     * @return $this
     */
    public function setNotes(?array $notes = null): self
    {
        $this->notes = $notes;

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
     * @param array|null $feeChargeCap
     *
     * @return $this
     */
    public function setFeeChargeCap(?array $feeChargeCap = null): self
    {
        $this->feeChargeCap = $feeChargeCap;

        return $this;
    }

    /**
     * Gets otherFeeCategoryType.
     *
     * @return OBOtherCodeType10|null
     */
    public function getOtherFeeCategoryType(): ?OBOtherCodeType10
    {
        return $this->otherFeeCategoryType;
    }

    /**
     * Sets otherFeeCategoryType.
     *
     * @param OBOtherCodeType10|null $otherFeeCategoryType
     *
     * @return $this
     */
    public function setOtherFeeCategoryType(?OBOtherCodeType10 $otherFeeCategoryType = null): self
    {
        $this->otherFeeCategoryType = $otherFeeCategoryType;

        return $this;
    }

    /**
     * Gets otherFeeType.
     *
     * @return OBOtherFeeChargeDetailType|null
     */
    public function getOtherFeeType(): ?OBOtherFeeChargeDetailType
    {
        return $this->otherFeeType;
    }

    /**
     * Sets otherFeeType.
     *
     * @param OBOtherFeeChargeDetailType|null $otherFeeType
     *
     * @return $this
     */
    public function setOtherFeeType(?OBOtherFeeChargeDetailType $otherFeeType = null): self
    {
        $this->otherFeeType = $otherFeeType;

        return $this;
    }

    /**
     * Gets otherFeeRateType.
     *
     * @return OBOtherCodeType18|null
     */
    public function getOtherFeeRateType(): ?OBOtherCodeType18
    {
        return $this->otherFeeRateType;
    }

    /**
     * Sets otherFeeRateType.
     *
     * @param OBOtherCodeType18|null $otherFeeRateType
     *
     * @return $this
     */
    public function setOtherFeeRateType(?OBOtherCodeType18 $otherFeeRateType = null): self
    {
        $this->otherFeeRateType = $otherFeeRateType;

        return $this;
    }

    /**
     * Gets otherApplicationFrequency.
     *
     * @return OBOtherCodeType16|null
     */
    public function getOtherApplicationFrequency(): ?OBOtherCodeType16
    {
        return $this->otherApplicationFrequency;
    }

    /**
     * Sets otherApplicationFrequency.
     *
     * @param OBOtherCodeType16|null $otherApplicationFrequency
     *
     * @return $this
     */
    public function setOtherApplicationFrequency(?OBOtherCodeType16 $otherApplicationFrequency = null): self
    {
        $this->otherApplicationFrequency = $otherApplicationFrequency;

        return $this;
    }

    /**
     * Gets otherCalculationFrequency.
     *
     * @return OBOtherCodeType17|null
     */
    public function getOtherCalculationFrequency(): ?OBOtherCodeType17
    {
        return $this->otherCalculationFrequency;
    }

    /**
     * Sets otherCalculationFrequency.
     *
     * @param OBOtherCodeType17|null $otherCalculationFrequency
     *
     * @return $this
     */
    public function setOtherCalculationFrequency(?OBOtherCodeType17 $otherCalculationFrequency = null): self
    {
        $this->otherCalculationFrequency = $otherCalculationFrequency;

        return $this;
    }

    /**
     * Gets feeApplicableRange.
     *
     * @return OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeApplicableRange|null
     */
    public function getFeeApplicableRange(): ?OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeApplicableRange
    {
        return $this->feeApplicableRange;
    }

    /**
     * Sets feeApplicableRange.
     *
     * @param OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeApplicableRange|null $feeApplicableRange
     *
     * @return $this
     */
    public function setFeeApplicableRange(?OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeApplicableRange $feeApplicableRange = null): self
    {
        $this->feeApplicableRange = $feeApplicableRange;

        return $this;
    }
}


