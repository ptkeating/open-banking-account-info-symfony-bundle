<?php
/**
 * OBError1
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
 * Class representing the OBError1 model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBError1 
{
        /**
     * Low level textual error code, e.g., UK.OBIE.Field.Missing
     *
     * @var string|null
     * @SerializedName("ErrorCode")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $errorCode = null;

    /**
     * A description of the error that occurred. e.g., &#39;A mandatory field isn&#39;t supplied&#39; or &#39;RequestedExecutionDateTime must be in future&#39; OBIE doesn&#39;t standardise this field
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
     * Recommended but optional reference to the JSON Path of the field with error, e.g., Data.Initiation.InstructedAmount.Currency
     *
     * @var string|null
     * @SerializedName("Path")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 500
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $path = null;

    /**
     * URL to help remediate the problem, or provide more information, or to API Reference, or help etc
     *
     * @var string|null
     * @SerializedName("Url")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $url = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->errorCode = $data['errorCode'] ?? null;
        $this->message = $data['message'] ?? null;
        $this->path = $data['path'] ?? null;
        $this->url = $data['url'] ?? null;
    }

    /**
     * Gets errorCode.
     *
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * Sets errorCode.
     *
     * @param string|null $errorCode  Low level textual error code, e.g., UK.OBIE.Field.Missing
     *
     * @return $this
     */
    public function setErrorCode(?string $errorCode): self
    {
        $this->errorCode = $errorCode;

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
     * @param string|null $message  A description of the error that occurred. e.g., 'A mandatory field isn't supplied' or 'RequestedExecutionDateTime must be in future' OBIE doesn't standardise this field
     *
     * @return $this
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Gets path.
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Sets path.
     *
     * @param string|null $path  Recommended but optional reference to the JSON Path of the field with error, e.g., Data.Initiation.InstructedAmount.Currency
     *
     * @return $this
     */
    public function setPath(?string $path = null): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Gets url.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets url.
     *
     * @param string|null $url  URL to help remediate the problem, or provide more information, or to API Reference, or help etc
     *
     * @return $this
     */
    public function setUrl(?string $url = null): self
    {
        $this->url = $url;

        return $this;
    }
}

