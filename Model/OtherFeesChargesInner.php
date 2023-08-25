<?php
/**
 * OtherFeesChargesInner
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
 * Class representing the OtherFeesChargesInner model.
 *
 * Contains details of fees and charges which are not associated with either Overdraft or features/benefits
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OtherFeesChargesInner 
{
        /**
     * TariffType which defines the fee and charges.
     *
     * @var string|null
     * @SerializedName("TariffType")
     * @Assert\Choice({ "Electronic", "Mixed", "Other" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $tariffType = null;

    /**
     * Name of the tariff
     *
     * @var string|null
     * @SerializedName("TariffName")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 350
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $tariffName = null;

    /**
     * @var OtherTariffType|null
     * @SerializedName("OtherTariffType")
     * @Assert\Type("OpenAPI\Server\Model\OtherTariffType")
     * @Type("OpenAPI\Server\Model\OtherTariffType")
     */
    protected ?OtherTariffType $otherTariffType = null;

    /**
     * Other fees/charges details
     *
     * @var array|null
     * @SerializedName("FeeChargeDetail")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\FeeChargeDetailInner")
     * })
     * @Type("array<OpenAPI\Server\Model\FeeChargeDetailInner>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $feeChargeDetail = null;

    /**
     * Details about any caps (maximum charges) that apply to a particular or group of fee/charge
     *
     * @var array|null
     * @SerializedName("FeeChargeCap")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\FeeChargeCapInner")
     * })
     * @Type("array<OpenAPI\Server\Model\FeeChargeCapInner>")
     */
    protected ?array $feeChargeCap = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->tariffType = $data['tariffType'] ?? null;
        $this->tariffName = $data['tariffName'] ?? null;
        $this->otherTariffType = $data['otherTariffType'] ?? null;
        $this->feeChargeDetail = $data['feeChargeDetail'] ?? null;
        $this->feeChargeCap = $data['feeChargeCap'] ?? null;
    }

    /**
     * Gets tariffType.
     *
     * @return string|null
     */
    public function getTariffType(): ?string
    {
        return $this->tariffType;
    }

    /**
     * Sets tariffType.
     *
     * @param string|null $tariffType  TariffType which defines the fee and charges.
     *
     * @return $this
     */
    public function setTariffType(?string $tariffType = null): self
    {
        $this->tariffType = $tariffType;

        return $this;
    }

    /**
     * Gets tariffName.
     *
     * @return string|null
     */
    public function getTariffName(): ?string
    {
        return $this->tariffName;
    }

    /**
     * Sets tariffName.
     *
     * @param string|null $tariffName  Name of the tariff
     *
     * @return $this
     */
    public function setTariffName(?string $tariffName = null): self
    {
        $this->tariffName = $tariffName;

        return $this;
    }

    /**
     * Gets otherTariffType.
     *
     * @return OtherTariffType|null
     */
    public function getOtherTariffType(): ?OtherTariffType
    {
        return $this->otherTariffType;
    }

    /**
     * Sets otherTariffType.
     *
     * @param OtherTariffType|null $otherTariffType
     *
     * @return $this
     */
    public function setOtherTariffType(?OtherTariffType $otherTariffType = null): self
    {
        $this->otherTariffType = $otherTariffType;

        return $this;
    }

    /**
     * Gets feeChargeDetail.
     *
     * @return array|null
     */
    public function getFeeChargeDetail(): ?array
    {
        return $this->feeChargeDetail;
    }

    /**
     * Sets feeChargeDetail.
     *
     * @param array|null $feeChargeDetail  Other fees/charges details
     *
     * @return $this
     */
    public function setFeeChargeDetail(?array $feeChargeDetail): self
    {
        $this->feeChargeDetail = $feeChargeDetail;

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
     * @param array|null $feeChargeCap  Details about any caps (maximum charges) that apply to a particular or group of fee/charge
     *
     * @return $this
     */
    public function setFeeChargeCap(?array $feeChargeCap = null): self
    {
        $this->feeChargeCap = $feeChargeCap;

        return $this;
    }
}

