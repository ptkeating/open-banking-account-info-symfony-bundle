<?php
/**
 * OBReadDataTransaction6
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
 * Class representing the OBReadDataTransaction6 model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadDataTransaction6 
{
        /**
     * @var array|null
     * @SerializedName("Transaction")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBTransaction6")
     * })
     * @Type("array<OpenAPI\Server\Model\OBTransaction6>")
     */
    protected ?array $transaction = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->transaction = $data['transaction'] ?? null;
    }

    /**
     * Gets transaction.
     *
     * @return array|null
     */
    public function getTransaction(): ?array
    {
        return $this->transaction;
    }

    /**
     * Sets transaction.
     *
     * @param array|null $transaction
     *
     * @return $this
     */
    public function setTransaction(?array $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }
}


