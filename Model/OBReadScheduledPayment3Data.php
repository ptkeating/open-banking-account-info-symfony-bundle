<?php
/**
 * OBReadScheduledPayment3Data
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
 * Class representing the OBReadScheduledPayment3Data model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadScheduledPayment3Data 
{
        /**
     * @var array|null
     * @SerializedName("ScheduledPayment")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBScheduledPayment3")
     * })
     * @Type("array<OpenAPI\Server\Model\OBScheduledPayment3>")
     */
    protected ?array $scheduledPayment = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->scheduledPayment = $data['scheduledPayment'] ?? null;
    }

    /**
     * Gets scheduledPayment.
     *
     * @return array|null
     */
    public function getScheduledPayment(): ?array
    {
        return $this->scheduledPayment;
    }

    /**
     * Sets scheduledPayment.
     *
     * @param array|null $scheduledPayment
     *
     * @return $this
     */
    public function setScheduledPayment(?array $scheduledPayment = null): self
    {
        $this->scheduledPayment = $scheduledPayment;

        return $this;
    }
}


