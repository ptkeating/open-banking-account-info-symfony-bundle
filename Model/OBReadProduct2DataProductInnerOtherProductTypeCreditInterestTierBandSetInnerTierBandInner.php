<?php
/**
 * OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInner
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
 * Class representing the OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInner model.
 *
 * Tier Band Details
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInner 
{
        /**
     * Unique and unambiguous identification of a  Tier Band for the Product.
     *
     * @var string|null
     * @SerializedName("Identification")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 35
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $identification = null;

    /**
     * Minimum deposit value for which the credit interest tier applies.
     *
     * @var string|null
     * @SerializedName("TierValueMinimum")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,14}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $tierValueMinimum = null;

    /**
     * Maximum deposit value for which the credit interest tier applies.
     *
     * @var string|null
     * @SerializedName("TierValueMaximum")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,14}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $tierValueMaximum = null;

    /**
     * How often is credit interest calculated for the account.
     *
     * @var string|null
     * @SerializedName("CalculationFrequency")
     * @Assert\Choice({ "FQAT", "FQDY", "FQHY", "FQMY", "FQOT", "FQQY", "FQSD", "FQWY", "FQYY" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $calculationFrequency = null;

    /**
     * How often is interest applied to the Product for this tier/band i.e. how often the financial institution pays accumulated interest to the customer&#39;s account.
     *
     * @var string|null
     * @SerializedName("ApplicationFrequency")
     * @Assert\NotNull()
     * @Assert\Choice({ "FQAT", "FQDY", "FQHY", "FQMY", "FQOT", "FQQY", "FQSD", "FQWY", "FQYY" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $applicationFrequency = null;

    /**
     * Amount on which Interest applied.
     *
     * @var string|null
     * @SerializedName("DepositInterestAppliedCoverage")
     * @Assert\Choice({ "INBA", "INTI", "INWH" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $depositInterestAppliedCoverage = null;

    /**
     * @var OBInterestFixedVariableType1Code|null
     * @SerializedName("FixedVariableInterestRateType")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\OBInterestFixedVariableType1Code")
     * @Type("OpenAPI\Server\Model\OBInterestFixedVariableType1Code")
     */
    protected ?OBInterestFixedVariableType1Code $fixedVariableInterestRateType = null;

    /**
     * The annual equivalent rate (AER) is interest that is calculated under the assumption that any interest paid is combined with the original balance and the next interest payment will be based on the slightly higher account balance. Overall, this means that interest can be compounded several times in a year depending on the number of times that interest payments are made.  Read more: Annual Equivalent Rate (AER) http://www.investopedia.com/terms/a/aer.asp#ixzz4gfR7IO1A
     *
     * @var string|null
     * @SerializedName("AER")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,3}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $aER = null;

    /**
     * Interest rate types, other than AER, which financial institutions may use to describe the annual interest rate payable to the account holder&#39;s account.
     *
     * @var string|null
     * @SerializedName("BankInterestRateType")
     * @Assert\Choice({ "INBB", "INFR", "INGR", "INLR", "INNE", "INOT" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $bankInterestRateType = null;

    /**
     * Bank Interest for the product
     *
     * @var string|null
     * @SerializedName("BankInterestRate")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Regex("/^(-?\\d{1,3}){1}(\\.\\d{1,4}){0,1}$/")
     */
    protected ?string $bankInterestRate = null;

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
     * @var OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInnerOtherBankInterestType|null
     * @SerializedName("OtherBankInterestType")
     * @Assert\Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInnerOtherBankInterestType")
     * @Type("OpenAPI\Server\Model\OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInnerOtherBankInterestType")
     */
    protected ?OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInnerOtherBankInterestType $otherBankInterestType = null;

    /**
     * @var OBOtherCodeType11|null
     * @SerializedName("OtherApplicationFrequency")
     * @Assert\Type("OpenAPI\Server\Model\OBOtherCodeType11")
     * @Type("OpenAPI\Server\Model\OBOtherCodeType11")
     */
    protected ?OBOtherCodeType11 $otherApplicationFrequency = null;

    /**
     * @var OBOtherCodeType12|null
     * @SerializedName("OtherCalculationFrequency")
     * @Assert\Type("OpenAPI\Server\Model\OBOtherCodeType12")
     * @Type("OpenAPI\Server\Model\OBOtherCodeType12")
     */
    protected ?OBOtherCodeType12 $otherCalculationFrequency = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->identification = $data['identification'] ?? null;
        $this->tierValueMinimum = $data['tierValueMinimum'] ?? null;
        $this->tierValueMaximum = $data['tierValueMaximum'] ?? null;
        $this->calculationFrequency = $data['calculationFrequency'] ?? null;
        $this->applicationFrequency = $data['applicationFrequency'] ?? null;
        $this->depositInterestAppliedCoverage = $data['depositInterestAppliedCoverage'] ?? null;
        $this->fixedVariableInterestRateType = $data['fixedVariableInterestRateType'] ?? null;
        $this->aER = $data['aER'] ?? null;
        $this->bankInterestRateType = $data['bankInterestRateType'] ?? null;
        $this->bankInterestRate = $data['bankInterestRate'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->otherBankInterestType = $data['otherBankInterestType'] ?? null;
        $this->otherApplicationFrequency = $data['otherApplicationFrequency'] ?? null;
        $this->otherCalculationFrequency = $data['otherCalculationFrequency'] ?? null;
    }

    /**
     * Gets identification.
     *
     * @return string|null
     */
    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    /**
     * Sets identification.
     *
     * @param string|null $identification  Unique and unambiguous identification of a  Tier Band for the Product.
     *
     * @return $this
     */
    public function setIdentification(?string $identification = null): self
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * Gets tierValueMinimum.
     *
     * @return string|null
     */
    public function getTierValueMinimum(): ?string
    {
        return $this->tierValueMinimum;
    }

    /**
     * Sets tierValueMinimum.
     *
     * @param string|null $tierValueMinimum  Minimum deposit value for which the credit interest tier applies.
     *
     * @return $this
     */
    public function setTierValueMinimum(?string $tierValueMinimum): self
    {
        $this->tierValueMinimum = $tierValueMinimum;

        return $this;
    }

    /**
     * Gets tierValueMaximum.
     *
     * @return string|null
     */
    public function getTierValueMaximum(): ?string
    {
        return $this->tierValueMaximum;
    }

    /**
     * Sets tierValueMaximum.
     *
     * @param string|null $tierValueMaximum  Maximum deposit value for which the credit interest tier applies.
     *
     * @return $this
     */
    public function setTierValueMaximum(?string $tierValueMaximum = null): self
    {
        $this->tierValueMaximum = $tierValueMaximum;

        return $this;
    }

    /**
     * Gets calculationFrequency.
     *
     * @return string|null
     */
    public function getCalculationFrequency(): ?string
    {
        return $this->calculationFrequency;
    }

    /**
     * Sets calculationFrequency.
     *
     * @param string|null $calculationFrequency  How often is credit interest calculated for the account.
     *
     * @return $this
     */
    public function setCalculationFrequency(?string $calculationFrequency = null): self
    {
        $this->calculationFrequency = $calculationFrequency;

        return $this;
    }

    /**
     * Gets applicationFrequency.
     *
     * @return string|null
     */
    public function getApplicationFrequency(): ?string
    {
        return $this->applicationFrequency;
    }

    /**
     * Sets applicationFrequency.
     *
     * @param string|null $applicationFrequency  How often is interest applied to the Product for this tier/band i.e. how often the financial institution pays accumulated interest to the customer's account.
     *
     * @return $this
     */
    public function setApplicationFrequency(?string $applicationFrequency): self
    {
        $this->applicationFrequency = $applicationFrequency;

        return $this;
    }

    /**
     * Gets depositInterestAppliedCoverage.
     *
     * @return string|null
     */
    public function getDepositInterestAppliedCoverage(): ?string
    {
        return $this->depositInterestAppliedCoverage;
    }

    /**
     * Sets depositInterestAppliedCoverage.
     *
     * @param string|null $depositInterestAppliedCoverage  Amount on which Interest applied.
     *
     * @return $this
     */
    public function setDepositInterestAppliedCoverage(?string $depositInterestAppliedCoverage = null): self
    {
        $this->depositInterestAppliedCoverage = $depositInterestAppliedCoverage;

        return $this;
    }

    /**
     * Gets fixedVariableInterestRateType.
     *
     * @return OBInterestFixedVariableType1Code|null
     */
    public function getFixedVariableInterestRateType(): ?OBInterestFixedVariableType1Code
    {
        return $this->fixedVariableInterestRateType;
    }

    /**
     * Sets fixedVariableInterestRateType.
     *
     * @param OBInterestFixedVariableType1Code|null $fixedVariableInterestRateType
     *
     * @return $this
     */
    public function setFixedVariableInterestRateType(?OBInterestFixedVariableType1Code $fixedVariableInterestRateType): self
    {
        $this->fixedVariableInterestRateType = $fixedVariableInterestRateType;

        return $this;
    }

    /**
     * Gets aER.
     *
     * @return string|null
     */
    public function getAER(): ?string
    {
        return $this->aER;
    }

    /**
     * Sets aER.
     *
     * @param string|null $aER  The annual equivalent rate (AER) is interest that is calculated under the assumption that any interest paid is combined with the original balance and the next interest payment will be based on the slightly higher account balance. Overall, this means that interest can be compounded several times in a year depending on the number of times that interest payments are made.  Read more: Annual Equivalent Rate (AER) http://www.investopedia.com/terms/a/aer.asp#ixzz4gfR7IO1A
     *
     * @return $this
     */
    public function setAER(?string $aER): self
    {
        $this->aER = $aER;

        return $this;
    }

    /**
     * Gets bankInterestRateType.
     *
     * @return string|null
     */
    public function getBankInterestRateType(): ?string
    {
        return $this->bankInterestRateType;
    }

    /**
     * Sets bankInterestRateType.
     *
     * @param string|null $bankInterestRateType  Interest rate types, other than AER, which financial institutions may use to describe the annual interest rate payable to the account holder's account.
     *
     * @return $this
     */
    public function setBankInterestRateType(?string $bankInterestRateType = null): self
    {
        $this->bankInterestRateType = $bankInterestRateType;

        return $this;
    }

    /**
     * Gets bankInterestRate.
     *
     * @return string|null
     */
    public function getBankInterestRate(): ?string
    {
        return $this->bankInterestRate;
    }

    /**
     * Sets bankInterestRate.
     *
     * @param string|null $bankInterestRate  Bank Interest for the product
     *
     * @return $this
     */
    public function setBankInterestRate(?string $bankInterestRate = null): self
    {
        $this->bankInterestRate = $bankInterestRate;

        return $this;
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
     * Gets otherBankInterestType.
     *
     * @return OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInnerOtherBankInterestType|null
     */
    public function getOtherBankInterestType(): ?OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInnerOtherBankInterestType
    {
        return $this->otherBankInterestType;
    }

    /**
     * Sets otherBankInterestType.
     *
     * @param OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInnerOtherBankInterestType|null $otherBankInterestType
     *
     * @return $this
     */
    public function setOtherBankInterestType(?OBReadProduct2DataProductInnerOtherProductTypeCreditInterestTierBandSetInnerTierBandInnerOtherBankInterestType $otherBankInterestType = null): self
    {
        $this->otherBankInterestType = $otherBankInterestType;

        return $this;
    }

    /**
     * Gets otherApplicationFrequency.
     *
     * @return OBOtherCodeType11|null
     */
    public function getOtherApplicationFrequency(): ?OBOtherCodeType11
    {
        return $this->otherApplicationFrequency;
    }

    /**
     * Sets otherApplicationFrequency.
     *
     * @param OBOtherCodeType11|null $otherApplicationFrequency
     *
     * @return $this
     */
    public function setOtherApplicationFrequency(?OBOtherCodeType11 $otherApplicationFrequency = null): self
    {
        $this->otherApplicationFrequency = $otherApplicationFrequency;

        return $this;
    }

    /**
     * Gets otherCalculationFrequency.
     *
     * @return OBOtherCodeType12|null
     */
    public function getOtherCalculationFrequency(): ?OBOtherCodeType12
    {
        return $this->otherCalculationFrequency;
    }

    /**
     * Sets otherCalculationFrequency.
     *
     * @param OBOtherCodeType12|null $otherCalculationFrequency
     *
     * @return $this
     */
    public function setOtherCalculationFrequency(?OBOtherCodeType12 $otherCalculationFrequency = null): self
    {
        $this->otherCalculationFrequency = $otherCalculationFrequency;

        return $this;
    }
}


