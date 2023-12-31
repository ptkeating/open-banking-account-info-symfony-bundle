<?php
/**
 * Overdraft1
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
 * Class representing the Overdraft1 model.
 *
 * Details about Overdraft rates, fees &amp; charges
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class Overdraft1 
{
        /**
     * Associated Notes about the overdraft rates
     *
     * @var array|null
     * @SerializedName("Notes")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $notes = null;

    /**
     * Tier band set details
     *
     * @var array|null
     * @SerializedName("OverdraftTierBandSet")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OverdraftTierBandSetInner1")
     * })
     * @Type("array<OpenAPI\Server\Model\OverdraftTierBandSetInner1>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $overdraftTierBandSet = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->notes = $data['notes'] ?? null;
        $this->overdraftTierBandSet = $data['overdraftTierBandSet'] ?? null;
    }

    /**
     * Gets notes.
     *
     * @return array|null
     */
    public function getNotes(): ?array
    {
        return $this->notes;
    }

    /**
     * Sets notes.
     *
     * @param array|null $notes  Associated Notes about the overdraft rates
     *
     * @return $this
     */
    public function setNotes(?array $notes = null): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Gets overdraftTierBandSet.
     *
     * @return array|null
     */
    public function getOverdraftTierBandSet(): ?array
    {
        return $this->overdraftTierBandSet;
    }

    /**
     * Sets overdraftTierBandSet.
     *
     * @param array|null $overdraftTierBandSet  Tier band set details
     *
     * @return $this
     */
    public function setOverdraftTierBandSet(?array $overdraftTierBandSet): self
    {
        $this->overdraftTierBandSet = $overdraftTierBandSet;

        return $this;
    }
}


