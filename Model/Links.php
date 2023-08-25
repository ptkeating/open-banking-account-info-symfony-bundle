<?php
/**
 * Links
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
 * Class representing the Links model.
 *
 * Links relevant to the payload
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class Links 
{
        /**
     * @var string|null
     * @SerializedName("Self")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $self = null;

    /**
     * @var string|null
     * @SerializedName("First")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $first = null;

    /**
     * @var string|null
     * @SerializedName("Prev")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $prev = null;

    /**
     * @var string|null
     * @SerializedName("Next")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $next = null;

    /**
     * @var string|null
     * @SerializedName("Last")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $last = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->self = $data['self'] ?? null;
        $this->first = $data['first'] ?? null;
        $this->prev = $data['prev'] ?? null;
        $this->next = $data['next'] ?? null;
        $this->last = $data['last'] ?? null;
    }

    /**
     * Gets self.
     *
     * @return string|null
     */
    public function getSelf(): ?string
    {
        return $this->self;
    }

    /**
     * Sets self.
     *
     * @param string|null $self
     *
     * @return $this
     */
    public function setSelf(?string $self): self
    {
        $this->self = $self;

        return $this;
    }

    /**
     * Gets first.
     *
     * @return string|null
     */
    public function getFirst(): ?string
    {
        return $this->first;
    }

    /**
     * Sets first.
     *
     * @param string|null $first
     *
     * @return $this
     */
    public function setFirst(?string $first = null): self
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Gets prev.
     *
     * @return string|null
     */
    public function getPrev(): ?string
    {
        return $this->prev;
    }

    /**
     * Sets prev.
     *
     * @param string|null $prev
     *
     * @return $this
     */
    public function setPrev(?string $prev = null): self
    {
        $this->prev = $prev;

        return $this;
    }

    /**
     * Gets next.
     *
     * @return string|null
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Sets next.
     *
     * @param string|null $next
     *
     * @return $this
     */
    public function setNext(?string $next = null): self
    {
        $this->next = $next;

        return $this;
    }

    /**
     * Gets last.
     *
     * @return string|null
     */
    public function getLast(): ?string
    {
        return $this->last;
    }

    /**
     * Sets last.
     *
     * @param string|null $last
     *
     * @return $this
     */
    public function setLast(?string $last = null): self
    {
        $this->last = $last;

        return $this;
    }
}


