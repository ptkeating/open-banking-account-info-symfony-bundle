<?php
/**
 * OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeChargeCapInner
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
 * Class representing the OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeChargeCapInner model.
 *
 * Details about any caps (maximum charges) that apply to a particular or group of fee/charge
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadProduct2DataProductInnerOtherProductTypeOtherFeesChargesInnerFeeChargeDetailInnerFeeChargeCapInner 
{
        /**
     * @var array|null
     * @SerializedName("FeeType")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Choice({ "FEPF", "FTOT", "FYAF", "FYAM", "FYAQ", "FYCP", "FYDB", "FYMI", "FYXX" })
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
     * @var OBMinMaxType1Code|null
     * @SerializedName("MinMaxType")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\OBMinMaxType1Code")
     * @Type("OpenAPI\Server\Model\OBMinMaxType1Code")
     */
    protected ?OBMinMaxType1Code $minMaxType = null;

    /**
     * fee/charges are captured dependent on the number of occurrences rather than capped at a particular amount
     *
     * @var int|null
     * @SerializedName("FeeCapOccurrence")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $feeCapOccurrence = null;

    /**
     * Cap amount charged for a fee/charge (where it is charged in terms of an amount rather than a rate)
     *
     * @var string|null
     * @SerializedName("FeeCapAmount")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,14}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $feeCapAmount = null;

    /**
     * @var OBPeriod1Code|null
     * @SerializedName("CappingPeriod")
     * @Assert\Type("OpenAPI\Server\Model\OBPeriod1Code")
     * @Type("OpenAPI\Server\Model\OBPeriod1Code")
     */
    protected ?OBPeriod1Code $cappingPeriod = null;

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
     * @SerializedName("OtherFeeType")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftTierBandInnerOverdraftFeesChargesInnerOverdraftFeeChargeCapInnerOtherFeeTypeInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftTierBandInnerOverdraftFeesChargesInnerOverdraftFeeChargeCapInnerOtherFeeTypeInner>")
     */
    protected ?array $otherFeeType = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->feeType = $data['feeType'] ?? null;
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
     * @param array|null $feeType
     *
     * @return $this
     */
    public function setFeeType(?array $feeType): self
    {
        $this->feeType = $feeType;

        return $this;
    }

    /**
     * Gets minMaxType.
     *
     * @return OBMinMaxType1Code|null
     */
    public function getMinMaxType(): ?OBMinMaxType1Code
    {
        return $this->minMaxType;
    }

    /**
     * Sets minMaxType.
     *
     * @param OBMinMaxType1Code|null $minMaxType
     *
     * @return $this
     */
    public function setMinMaxType(?OBMinMaxType1Code $minMaxType): self
    {
        $this->minMaxType = $minMaxType;

        return $this;
    }

    /**
     * Gets feeCapOccurrence.
     *
     * @return int|null
     */
    public function getFeeCapOccurrence(): ?int
    {
        return $this->feeCapOccurrence;
    }

    /**
     * Sets feeCapOccurrence.
     *
     * @param int|null $feeCapOccurrence  fee/charges are captured dependent on the number of occurrences rather than capped at a particular amount
     *
     * @return $this
     */
    public function setFeeCapOccurrence(?int $feeCapOccurrence = null): self
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
     * @param string|null $feeCapAmount  Cap amount charged for a fee/charge (where it is charged in terms of an amount rather than a rate)
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
     * @return OBPeriod1Code|null
     */
    public function getCappingPeriod(): ?OBPeriod1Code
    {
        return $this->cappingPeriod;
    }

    /**
     * Sets cappingPeriod.
     *
     * @param OBPeriod1Code|null $cappingPeriod
     *
     * @return $this
     */
    public function setCappingPeriod(?OBPeriod1Code $cappingPeriod = null): self
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
     * @param array|null $otherFeeType
     *
     * @return $this
     */
    public function setOtherFeeType(?array $otherFeeType = null): self
    {
        $this->otherFeeType = $otherFeeType;

        return $this;
    }
}


