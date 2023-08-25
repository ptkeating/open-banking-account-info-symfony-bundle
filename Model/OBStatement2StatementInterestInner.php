<?php
/**
 * OBStatement2StatementInterestInner
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
 * Class representing the OBStatement2StatementInterestInner model.
 *
 * Set of elements used to provide details of a generic interest amount related to the statement resource.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBStatement2StatementInterestInner 
{
        /**
     * Description that may be available for the statement interest.
     *
     * @var string|null
     * @SerializedName("Description")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 128
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $description = null;

    /**
     * @var OBCreditDebitCode0|null
     * @SerializedName("CreditDebitIndicator")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\OBCreditDebitCode0")
     * @Type("OpenAPI\Server\Model\OBCreditDebitCode0")
     */
    protected ?OBCreditDebitCode0 $creditDebitIndicator = null;

    /**
     * Interest amount type, in a coded form.
     *
     * @var string|null
     * @SerializedName("Type")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $type = null;

    /**
     * field representing a percentage (e.g. 0.05 represents 5% and 0.9525 represents 95.25%). Note the number of decimal places may vary.
     *
     * @var float|null
     * @SerializedName("Rate")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $rate = null;

    /**
     * Description that may be available for the statement Interest rate type.
     *
     * @var string|null
     * @SerializedName("RateType")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $rateType = null;

    /**
     * Specifies the statement fee type requested
     *
     * @var string|null
     * @SerializedName("Frequency")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $frequency = null;

    /**
     * @var OBActiveOrHistoricCurrencyAndAmount7|null
     * @SerializedName("Amount")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\OBActiveOrHistoricCurrencyAndAmount7")
     * @Type("OpenAPI\Server\Model\OBActiveOrHistoricCurrencyAndAmount7")
     */
    protected ?OBActiveOrHistoricCurrencyAndAmount7 $amount = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->description = $data['description'] ?? null;
        $this->creditDebitIndicator = $data['creditDebitIndicator'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->rate = $data['rate'] ?? null;
        $this->rateType = $data['rateType'] ?? null;
        $this->frequency = $data['frequency'] ?? null;
        $this->amount = $data['amount'] ?? null;
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
     * @param string|null $description  Description that may be available for the statement interest.
     *
     * @return $this
     */
    public function setDescription(?string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets creditDebitIndicator.
     *
     * @return OBCreditDebitCode0|null
     */
    public function getCreditDebitIndicator(): ?OBCreditDebitCode0
    {
        return $this->creditDebitIndicator;
    }

    /**
     * Sets creditDebitIndicator.
     *
     * @param OBCreditDebitCode0|null $creditDebitIndicator
     *
     * @return $this
     */
    public function setCreditDebitIndicator(?OBCreditDebitCode0 $creditDebitIndicator): self
    {
        $this->creditDebitIndicator = $creditDebitIndicator;

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
     * @param string|null $type  Interest amount type, in a coded form.
     *
     * @return $this
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets rate.
     *
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    /**
     * Sets rate.
     *
     * @param float|null $rate  field representing a percentage (e.g. 0.05 represents 5% and 0.9525 represents 95.25%). Note the number of decimal places may vary.
     *
     * @return $this
     */
    public function setRate(?float $rate = null): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Gets rateType.
     *
     * @return string|null
     */
    public function getRateType(): ?string
    {
        return $this->rateType;
    }

    /**
     * Sets rateType.
     *
     * @param string|null $rateType  Description that may be available for the statement Interest rate type.
     *
     * @return $this
     */
    public function setRateType(?string $rateType = null): self
    {
        $this->rateType = $rateType;

        return $this;
    }

    /**
     * Gets frequency.
     *
     * @return string|null
     */
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    /**
     * Sets frequency.
     *
     * @param string|null $frequency  Specifies the statement fee type requested
     *
     * @return $this
     */
    public function setFrequency(?string $frequency = null): self
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Gets amount.
     *
     * @return OBActiveOrHistoricCurrencyAndAmount7|null
     */
    public function getAmount(): ?OBActiveOrHistoricCurrencyAndAmount7
    {
        return $this->amount;
    }

    /**
     * Sets amount.
     *
     * @param OBActiveOrHistoricCurrencyAndAmount7|null $amount
     *
     * @return $this
     */
    public function setAmount(?OBActiveOrHistoricCurrencyAndAmount7 $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}


