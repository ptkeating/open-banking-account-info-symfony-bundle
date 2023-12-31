<?php
/**
 * OBStatement2StatementRateInner
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
 * Class representing the OBStatement2StatementRateInner model.
 *
 * Set of elements used to provide details of a generic rate related to the statement resource.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBStatement2StatementRateInner 
{
        /**
     * Rate associated with the statement rate type.
     *
     * @var string|null
     * @SerializedName("Rate")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,3}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $rate = null;

    /**
     * Statement rate type, in a coded form.
     *
     * @var string|null
     * @SerializedName("Type")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $type = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->rate = $data['rate'] ?? null;
        $this->type = $data['type'] ?? null;
    }

    /**
     * Gets rate.
     *
     * @return string|null
     */
    public function getRate(): ?string
    {
        return $this->rate;
    }

    /**
     * Sets rate.
     *
     * @param string|null $rate  Rate associated with the statement rate type.
     *
     * @return $this
     */
    public function setRate(?string $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Gets type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets type.
     *
     * @param string|null $type  Statement rate type, in a coded form.
     *
     * @return $this
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}


