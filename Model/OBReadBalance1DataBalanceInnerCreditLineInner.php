<?php
/**
 * OBReadBalance1DataBalanceInnerCreditLineInner
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
 * Class representing the OBReadBalance1DataBalanceInnerCreditLineInner model.
 *
 * Set of elements used to provide details on the credit line.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadBalance1DataBalanceInnerCreditLineInner 
{
        /**
     * Indicates whether or not the credit line is included in the balance of the account. Usage: If not present, credit line is not included in the balance amount of the account.
     *
     * @var bool|null
     * @SerializedName("Included")
     * @Assert\NotNull()
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $included = null;

    /**
     * Limit type, in a coded form.
     *
     * @var string|null
     * @SerializedName("Type")
     * @Assert\Choice({ "Available", "Credit", "Emergency", "Pre-Agreed", "Temporary" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $type = null;

    /**
     * @var OBReadBalance1DataBalanceInnerCreditLineInnerAmount|null
     * @SerializedName("Amount")
     * @Assert\Type("OpenAPI\Server\Model\OBReadBalance1DataBalanceInnerCreditLineInnerAmount")
     * @Type("OpenAPI\Server\Model\OBReadBalance1DataBalanceInnerCreditLineInnerAmount")
     */
    protected ?OBReadBalance1DataBalanceInnerCreditLineInnerAmount $amount = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->included = $data['included'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->amount = $data['amount'] ?? null;
    }

    /**
     * Gets included.
     *
     * @return bool|null
     */
    public function isIncluded(): ?bool
    {
        return $this->included;
    }

    /**
     * Sets included.
     *
     * @param bool|null $included  Indicates whether or not the credit line is included in the balance of the account. Usage: If not present, credit line is not included in the balance amount of the account.
     *
     * @return $this
     */
    public function setIncluded(?bool $included): self
    {
        $this->included = $included;

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
     * @param string|null $type  Limit type, in a coded form.
     *
     * @return $this
     */
    public function setType(?string $type = null): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets amount.
     *
     * @return OBReadBalance1DataBalanceInnerCreditLineInnerAmount|null
     */
    public function getAmount(): ?OBReadBalance1DataBalanceInnerCreditLineInnerAmount
    {
        return $this->amount;
    }

    /**
     * Sets amount.
     *
     * @param OBReadBalance1DataBalanceInnerCreditLineInnerAmount|null $amount
     *
     * @return $this
     */
    public function setAmount(?OBReadBalance1DataBalanceInnerCreditLineInnerAmount $amount = null): self
    {
        $this->amount = $amount;

        return $this;
    }
}


