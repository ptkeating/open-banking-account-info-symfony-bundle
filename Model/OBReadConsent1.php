<?php
/**
 * OBReadConsent1
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
 * Class representing the OBReadConsent1 model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadConsent1 
{
        /**
     * @var OBReadConsent1Data|null
     * @SerializedName("Data")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\OBReadConsent1Data")
     * @Type("OpenAPI\Server\Model\OBReadConsent1Data")
     */
    protected ?OBReadConsent1Data $data = null;

    /**
     * The Risk section is sent by the initiating party to the ASPSP. It is used to specify additional details for risk scoring for Account Info.
     *
     * @var array|null
     * @SerializedName("Risk")
     * @Assert\NotNull()
     * @Assert\Type("array")
     * @Type("array")
     */
    protected ?array $risk = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->data = $data['data'] ?? null;
        $this->risk = $data['risk'] ?? null;
    }

    /**
     * Gets data.
     *
     * @return OBReadConsent1Data|null
     */
    public function getData(): ?OBReadConsent1Data
    {
        return $this->data;
    }

    /**
     * Sets data.
     *
     * @param OBReadConsent1Data|null $data
     *
     * @return $this
     */
    public function setData(?OBReadConsent1Data $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Gets risk.
     *
     * @return array|null
     */
    public function getRisk(): ?array
    {
        return $this->risk;
    }

    /**
     * Sets risk.
     *
     * @param array|null $risk  The Risk section is sent by the initiating party to the ASPSP. It is used to specify additional details for risk scoring for Account Info.
     *
     * @return $this
     */
    public function setRisk(?array $risk): self
    {
        $this->risk = $risk;

        return $this;
    }
}


