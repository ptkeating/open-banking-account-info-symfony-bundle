<?php
/**
 * OBReadProduct2DataProductInnerOtherProductTypeLoanInterest
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
 * Class representing the OBReadProduct2DataProductInnerOtherProductTypeLoanInterest model.
 *
 * Details about the interest that may be payable to the SME Loan holders
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadProduct2DataProductInnerOtherProductTypeLoanInterest 
{
        /**
     * @var array|null
     * @SerializedName("Notes")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $notes = null;

    /**
     * @var array|null
     * @SerializedName("LoanInterestTierBandSet")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInner")
     * })
     * @Type("array<OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeLoanInterestLoanInterestTierBandSetInner>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $loanInterestTierBandSet = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->notes = $data['notes'] ?? null;
        $this->loanInterestTierBandSet = $data['loanInterestTierBandSet'] ?? null;
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
     * @param array|null $notes
     *
     * @return $this
     */
    public function setNotes(?array $notes = null): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Gets loanInterestTierBandSet.
     *
     * @return array|null
     */
    public function getLoanInterestTierBandSet(): ?array
    {
        return $this->loanInterestTierBandSet;
    }

    /**
     * Sets loanInterestTierBandSet.
     *
     * @param array|null $loanInterestTierBandSet
     *
     * @return $this
     */
    public function setLoanInterestTierBandSet(?array $loanInterestTierBandSet): self
    {
        $this->loanInterestTierBandSet = $loanInterestTierBandSet;

        return $this;
    }
}


