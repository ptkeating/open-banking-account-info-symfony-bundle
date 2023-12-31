<?php
/**
 * OBReadConsent1Data
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
 * Class representing the OBReadConsent1Data model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadConsent1Data 
{
        /**
     * @var array|null
     * @SerializedName("Permissions")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Choice({ "ReadAccountsBasic", "ReadAccountsDetail", "ReadBalances", "ReadBeneficiariesBasic", "ReadBeneficiariesDetail", "ReadDirectDebits", "ReadOffers", "ReadPAN", "ReadParty", "ReadPartyPSU", "ReadProducts", "ReadScheduledPaymentsBasic", "ReadScheduledPaymentsDetail", "ReadStandingOrdersBasic", "ReadStandingOrdersDetail", "ReadStatementsBasic", "ReadStatementsDetail", "ReadTransactionsBasic", "ReadTransactionsCredits", "ReadTransactionsDebits", "ReadTransactionsDetail" })
     * })
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $permissions = null;

    /**
     * Specified date and time the permissions will expire. If this is not populated, the permissions will be open ended.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @var \DateTime|null
     * @SerializedName("ExpirationDateTime")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $expirationDateTime = null;

    /**
     * Specified start date and time for the transaction query period. If this is not populated, the start date will be open ended, and data will be returned from the earliest available transaction.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @var \DateTime|null
     * @SerializedName("TransactionFromDateTime")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $transactionFromDateTime = null;

    /**
     * Specified end date and time for the transaction query period. If this is not populated, the end date will be open ended, and data will be returned to the latest available transaction.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @var \DateTime|null
     * @SerializedName("TransactionToDateTime")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $transactionToDateTime = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->permissions = $data['permissions'] ?? null;
        $this->expirationDateTime = $data['expirationDateTime'] ?? null;
        $this->transactionFromDateTime = $data['transactionFromDateTime'] ?? null;
        $this->transactionToDateTime = $data['transactionToDateTime'] ?? null;
    }

    /**
     * Gets permissions.
     *
     * @return array|null
     */
    public function getPermissions(): ?array
    {
        return $this->permissions;
    }

    /**
     * Sets permissions.
     *
     * @param array|null $permissions
     *
     * @return $this
     */
    public function setPermissions(?array $permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * Gets expirationDateTime.
     *
     * @return \DateTime|null
     */
    public function getExpirationDateTime(): ?\DateTime
    {
        return $this->expirationDateTime;
    }

    /**
     * Sets expirationDateTime.
     *
     * @param \DateTime|null $expirationDateTime  Specified date and time the permissions will expire. If this is not populated, the permissions will be open ended.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @return $this
     */
    public function setExpirationDateTime(?\DateTime $expirationDateTime = null): self
    {
        $this->expirationDateTime = $expirationDateTime;

        return $this;
    }

    /**
     * Gets transactionFromDateTime.
     *
     * @return \DateTime|null
     */
    public function getTransactionFromDateTime(): ?\DateTime
    {
        return $this->transactionFromDateTime;
    }

    /**
     * Sets transactionFromDateTime.
     *
     * @param \DateTime|null $transactionFromDateTime  Specified start date and time for the transaction query period. If this is not populated, the start date will be open ended, and data will be returned from the earliest available transaction.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @return $this
     */
    public function setTransactionFromDateTime(?\DateTime $transactionFromDateTime = null): self
    {
        $this->transactionFromDateTime = $transactionFromDateTime;

        return $this;
    }

    /**
     * Gets transactionToDateTime.
     *
     * @return \DateTime|null
     */
    public function getTransactionToDateTime(): ?\DateTime
    {
        return $this->transactionToDateTime;
    }

    /**
     * Sets transactionToDateTime.
     *
     * @param \DateTime|null $transactionToDateTime  Specified end date and time for the transaction query period. If this is not populated, the end date will be open ended, and data will be returned to the latest available transaction.All dates in the JSON payloads are represented in ISO 8601 date-time format.  All date-time fields in responses must include the timezone. An example is below: 2017-04-05T10:43:07+00:00
     *
     * @return $this
     */
    public function setTransactionToDateTime(?\DateTime $transactionToDateTime = null): self
    {
        $this->transactionToDateTime = $transactionToDateTime;

        return $this;
    }
}


