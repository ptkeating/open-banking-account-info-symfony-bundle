<?php
/**
 * OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftFeesChargesInner
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
 * Class representing the OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftFeesChargesInner model.
 *
 * Overdraft fees and charges details
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftFeesChargesInner 
{
        /**
     * @var array|null
     * @SerializedName("OverdraftFeeChargeCap")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftTierBandInnerOverdraftFeesChargesInnerOverdraftFeeChargeCapInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftTierBandInnerOverdraftFeesChargesInnerOverdraftFeeChargeCapInner>")
     */
    protected ?array $overdraftFeeChargeCap = null;

    /**
     * @var array|null
     * @SerializedName("OverdraftFeeChargeDetail")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftTierBandInnerOverdraftFeesChargesInnerOverdraftFeeChargeDetailInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeOverdraftOverdraftTierBandSetInnerOverdraftTierBandInnerOverdraftFeesChargesInnerOverdraftFeeChargeDetailInner>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $overdraftFeeChargeDetail = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->overdraftFeeChargeCap = $data['overdraftFeeChargeCap'] ?? null;
        $this->overdraftFeeChargeDetail = $data['overdraftFeeChargeDetail'] ?? null;
    }

    /**
     * Gets overdraftFeeChargeCap.
     *
     * @return array|null
     */
    public function getOverdraftFeeChargeCap(): ?array
    {
        return $this->overdraftFeeChargeCap;
    }

    /**
     * Sets overdraftFeeChargeCap.
     *
     * @param array|null $overdraftFeeChargeCap
     *
     * @return $this
     */
    public function setOverdraftFeeChargeCap(?array $overdraftFeeChargeCap = null): self
    {
        $this->overdraftFeeChargeCap = $overdraftFeeChargeCap;

        return $this;
    }

    /**
     * Gets overdraftFeeChargeDetail.
     *
     * @return array|null
     */
    public function getOverdraftFeeChargeDetail(): ?array
    {
        return $this->overdraftFeeChargeDetail;
    }

    /**
     * Sets overdraftFeeChargeDetail.
     *
     * @param array|null $overdraftFeeChargeDetail
     *
     * @return $this
     */
    public function setOverdraftFeeChargeDetail(?array $overdraftFeeChargeDetail): self
    {
        $this->overdraftFeeChargeDetail = $overdraftFeeChargeDetail;

        return $this;
    }
}


