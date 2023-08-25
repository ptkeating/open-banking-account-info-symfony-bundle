<?php
/**
 * OtherFeesCharges
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
 * Class representing the OtherFeesCharges model.
 *
 * Contains details of fees and charges which are not associated with either borrowing or features/benefits
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OtherFeesCharges 
{
        /**
     * Other fees/charges details
     *
     * @var array|null
     * @SerializedName("FeeChargeDetail")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\FeeChargeDetailInner1")
     * })
     * @Type("array<OpenAPI\Server\Model\FeeChargeDetailInner1>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $feeChargeDetail = null;

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
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->feeChargeDetail = $data['feeChargeDetail'] ?? null;
        $this->feeChargeCap = $data['feeChargeCap'] ?? null;
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
     * @param array|null $feeChargeCap  Details about any caps (maximum charges) that apply to a particular fee/charge
     *
     * @return $this
     */
    public function setFeeChargeCap(?array $feeChargeCap = null): self
    {
        $this->feeChargeCap = $feeChargeCap;

        return $this;
    }
}

