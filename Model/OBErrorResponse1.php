<?php
/**
 * OBErrorResponse1
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
 * Class representing the OBErrorResponse1 model.
 *
 * An array of detail error codes, and messages, and URLs to documentation to help remediation.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBErrorResponse1 
{
        /**
     * High level textual error code, to help categorize the errors.
     *
     * @var string|null
     * @SerializedName("Code")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 40
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $code = null;

    /**
     * A unique reference for the error instance, for audit purposes, in case of unknown/unclassified errors.
     *
     * @var string|null
     * @SerializedName("Id")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 40
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $id = null;

    /**
     * Brief Error message, e.g., &#39;There is something wrong with the request parameters provided&#39;
     *
     * @var string|null
     * @SerializedName("Message")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 500
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $message = null;

    /**
     * @var array|null
     * @SerializedName("Errors")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBError1")
     * })
     * @Type("array<OpenAPI\Server\Model\OBError1>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $errors = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->code = $data['code'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->message = $data['message'] ?? null;
        $this->errors = $data['errors'] ?? null;
    }

    /**
     * Gets code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets code.
     *
     * @param string|null $code  High level textual error code, to help categorize the errors.
     *
     * @return $this
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param string|null $id  A unique reference for the error instance, for audit purposes, in case of unknown/unclassified errors.
     *
     * @return $this
     */
    public function setId(?string $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets message.
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets message.
     *
     * @param string|null $message  Brief Error message, e.g., 'There is something wrong with the request parameters provided'
     *
     * @return $this
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Gets errors.
     *
     * @return array|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets errors.
     *
     * @param array|null $errors
     *
     * @return $this
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;

        return $this;
    }
}

