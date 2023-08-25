<?php
/**
 * OBReadBalance1Data
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
 * Class representing the OBReadBalance1Data model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadBalance1Data 
{
        /**
     * @var array|null
     * @SerializedName("Balance")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBReadBalance1DataBalanceInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OBReadBalance1DataBalanceInner>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $balance = null;

    /**
     * @var OBReadBalance1DataTotalValue|null
     * @SerializedName("TotalValue")
     * @Assert\Type("OpenAPI\Server\Model\OBReadBalance1DataTotalValue")
     * @Type("OpenAPI\Server\Model\OBReadBalance1DataTotalValue")
     */
    protected ?OBReadBalance1DataTotalValue $totalValue = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->balance = $data['balance'] ?? null;
        $this->totalValue = $data['totalValue'] ?? null;
    }

    /**
     * Gets balance.
     *
     * @return array|null
     */
    public function getBalance(): ?array
    {
        return $this->balance;
    }

    /**
     * Sets balance.
     *
     * @param array|null $balance
     *
     * @return $this
     */
    public function setBalance(?array $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Gets totalValue.
     *
     * @return OBReadBalance1DataTotalValue|null
     */
    public function getTotalValue(): ?OBReadBalance1DataTotalValue
    {
        return $this->totalValue;
    }

    /**
     * Sets totalValue.
     *
     * @param OBReadBalance1DataTotalValue|null $totalValue
     *
     * @return $this
     */
    public function setTotalValue(?OBReadBalance1DataTotalValue $totalValue = null): self
    {
        $this->totalValue = $totalValue;

        return $this;
    }
}

