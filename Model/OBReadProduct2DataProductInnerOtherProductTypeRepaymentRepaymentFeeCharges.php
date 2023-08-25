<?php
/**
 * OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentFeeCharges
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
 * Class representing the OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentFeeCharges model.
 *
 * Applicable fee/charges for repayment such as prepayment, full early repayment or non repayment.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentFeeCharges 
{
        /**
     * @var array|null
     * @SerializedName("RepaymentFeeChargeDetail")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentFeeChargesRepaymentFeeChargeDetailInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentFeeChargesRepaymentFeeChargeDetailInner>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $repaymentFeeChargeDetail = null;

    /**
     * @var array|null
     * @SerializedName("RepaymentFeeChargeCap")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentFeeChargesRepaymentFeeChargeCapInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeRepaymentRepaymentFeeChargesRepaymentFeeChargeCapInner>")
     */
    protected ?array $repaymentFeeChargeCap = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->repaymentFeeChargeDetail = $data['repaymentFeeChargeDetail'] ?? null;
        $this->repaymentFeeChargeCap = $data['repaymentFeeChargeCap'] ?? null;
    }

    /**
     * Gets repaymentFeeChargeDetail.
     *
     * @return array|null
     */
    public function getRepaymentFeeChargeDetail(): ?array
    {
        return $this->repaymentFeeChargeDetail;
    }

    /**
     * Sets repaymentFeeChargeDetail.
     *
     * @param array|null $repaymentFeeChargeDetail
     *
     * @return $this
     */
    public function setRepaymentFeeChargeDetail(?array $repaymentFeeChargeDetail): self
    {
        $this->repaymentFeeChargeDetail = $repaymentFeeChargeDetail;

        return $this;
    }

    /**
     * Gets repaymentFeeChargeCap.
     *
     * @return array|null
     */
    public function getRepaymentFeeChargeCap(): ?array
    {
        return $this->repaymentFeeChargeCap;
    }

    /**
     * Sets repaymentFeeChargeCap.
     *
     * @param array|null $repaymentFeeChargeCap
     *
     * @return $this
     */
    public function setRepaymentFeeChargeCap(?array $repaymentFeeChargeCap = null): self
    {
        $this->repaymentFeeChargeCap = $repaymentFeeChargeCap;

        return $this;
    }
}


