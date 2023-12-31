<?php
/**
 * OBBankTransactionCodeStructure1
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
 * Class representing the OBBankTransactionCodeStructure1 model.
 *
 * Set of elements used to fully identify the type of underlying transaction resulting in an entry.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBBankTransactionCodeStructure1 
{
        /**
     * Specifies the family within a domain.
     *
     * @var string|null
     * @SerializedName("Code")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $code = null;

    /**
     * Specifies the sub-product family within a specific family.
     *
     * @var string|null
     * @SerializedName("SubCode")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $subCode = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->code = $data['code'] ?? null;
        $this->subCode = $data['subCode'] ?? null;
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
     * @param string|null $code  Specifies the family within a domain.
     *
     * @return $this
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets subCode.
     *
     * @return string|null
     */
    public function getSubCode(): ?string
    {
        return $this->subCode;
    }

    /**
     * Sets subCode.
     *
     * @param string|null $subCode  Specifies the sub-product family within a specific family.
     *
     * @return $this
     */
    public function setSubCode(?string $subCode): self
    {
        $this->subCode = $subCode;

        return $this;
    }
}


