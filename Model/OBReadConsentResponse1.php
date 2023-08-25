<?php
/**
 * OBReadConsentResponse1
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
 * Class representing the OBReadConsentResponse1 model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadConsentResponse1 
{
        /**
     * @var OBReadConsentResponse1Data|null
     * @SerializedName("Data")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\OBReadConsentResponse1Data")
     * @Type("OpenAPI\Server\Model\OBReadConsentResponse1Data")
     */
    protected ?OBReadConsentResponse1Data $data = null;

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
     * @var Links|null
     * @SerializedName("Links")
     * @Assert\Type("OpenAPI\Server\Model\Links")
     * @Type("OpenAPI\Server\Model\Links")
     */
    protected ?Links $links = null;

    /**
     * @var Meta|null
     * @SerializedName("Meta")
     * @Assert\Type("OpenAPI\Server\Model\Meta")
     * @Type("OpenAPI\Server\Model\Meta")
     */
    protected ?Meta $meta = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->data = $data['data'] ?? null;
        $this->risk = $data['risk'] ?? null;
        $this->links = $data['links'] ?? null;
        $this->meta = $data['meta'] ?? null;
    }

    /**
     * Gets data.
     *
     * @return OBReadConsentResponse1Data|null
     */
    public function getData(): ?OBReadConsentResponse1Data
    {
        return $this->data;
    }

    /**
     * Sets data.
     *
     * @param OBReadConsentResponse1Data|null $data
     *
     * @return $this
     */
    public function setData(?OBReadConsentResponse1Data $data): self
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

    /**
     * Gets links.
     *
     * @return Links|null
     */
    public function getLinks(): ?Links
    {
        return $this->links;
    }

    /**
     * Sets links.
     *
     * @param Links|null $links
     *
     * @return $this
     */
    public function setLinks(?Links $links = null): self
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Gets meta.
     *
     * @return Meta|null
     */
    public function getMeta(): ?Meta
    {
        return $this->meta;
    }

    /**
     * Sets meta.
     *
     * @param Meta|null $meta
     *
     * @return $this
     */
    public function setMeta(?Meta $meta = null): self
    {
        $this->meta = $meta;

        return $this;
    }
}


