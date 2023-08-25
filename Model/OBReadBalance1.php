<?php
/**
 * OBReadBalance1
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
 * Class representing the OBReadBalance1 model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadBalance1 
{
        /**
     * @var OBReadBalance1Data|null
     * @SerializedName("Data")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\OBReadBalance1Data")
     * @Type("OpenAPI\Server\Model\OBReadBalance1Data")
     */
    protected ?OBReadBalance1Data $data = null;

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
        $this->links = $data['links'] ?? null;
        $this->meta = $data['meta'] ?? null;
    }

    /**
     * Gets data.
     *
     * @return OBReadBalance1Data|null
     */
    public function getData(): ?OBReadBalance1Data
    {
        return $this->data;
    }

    /**
     * Sets data.
     *
     * @param OBReadBalance1Data|null $data
     *
     * @return $this
     */
    public function setData(?OBReadBalance1Data $data): self
    {
        $this->data = $data;

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


