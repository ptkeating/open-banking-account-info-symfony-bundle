<?php
/**
 * OBReadDataStatement2
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
 * Class representing the OBReadDataStatement2 model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadDataStatement2 
{
        /**
     * @var array|null
     * @SerializedName("Statement")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBStatement2")
     * })
     * @Type("array<OpenAPI\Server\Model\OBStatement2>")
     */
    protected ?array $statement = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->statement = $data['statement'] ?? null;
    }

    /**
     * Gets statement.
     *
     * @return array|null
     */
    public function getStatement(): ?array
    {
        return $this->statement;
    }

    /**
     * Sets statement.
     *
     * @param array|null $statement
     *
     * @return $this
     */
    public function setStatement(?array $statement = null): self
    {
        $this->statement = $statement;

        return $this;
    }
}


