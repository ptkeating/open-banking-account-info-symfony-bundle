<?php
/**
 * OtherApplicationFrequency1
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
 * Class representing the OtherApplicationFrequency1 model.
 *
 * Other application frequencies not covered in the standard code list
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OtherApplicationFrequency1 
{
        /**
     * The four letter Mnemonic used within an XML file to identify a code
     *
     * @var string|null
     * @SerializedName("Code")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 4
     * )
     * @Assert\Length(
     *   min = 0
     * )
     * @Assert\Regex("/^\\w{0,4}$/")
     */
    protected ?string $code = null;

    /**
     * Long name associated with the code
     *
     * @var string|null
     * @SerializedName("Name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 70
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $name = null;

    /**
     * Description to describe the purpose of the code
     *
     * @var string|null
     * @SerializedName("Description")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 350
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $description = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->code = $data['code'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
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
     * @param string|null $code  The four letter Mnemonic used within an XML file to identify a code
     *
     * @return $this
     */
    public function setCode(?string $code = null): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string|null $name  Long name associated with the code
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets description.
     *
     * @param string|null $description  Description to describe the purpose of the code
     *
     * @return $this
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}


