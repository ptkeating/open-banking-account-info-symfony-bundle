<?php
/**
 * OBStatement2StatementDateTimeInner
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
 * Class representing the OBStatement2StatementDateTimeInner model.
 *
 * Set of elements used to provide details of a generic date time for the statement resource.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBStatement2StatementDateTimeInner 
{
        /**
     * Date and time associated with the date time type.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @var \DateTime|null
     * @SerializedName("DateTime")
     * @Assert\NotNull()
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $dateTime = null;

    /**
     * Date time type, in a coded form.
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
        $this->dateTime = $data['dateTime'] ?? null;
        $this->type = $data['type'] ?? null;
    }

    /**
     * Gets dateTime.
     *
     * @return \DateTime|null
     */
    public function getDateTime(): ?\DateTime
    {
        return $this->dateTime;
    }

    /**
     * Sets dateTime.
     *
     * @param \DateTime|null $dateTime  Date and time associated with the date time type.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @return $this
     */
    public function setDateTime(?\DateTime $dateTime): self
    {
        $this->dateTime = $dateTime;

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
     * @param string|null $type  Date time type, in a coded form.
     *
     * @return $this
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}


