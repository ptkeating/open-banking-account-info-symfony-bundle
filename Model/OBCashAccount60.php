<?php

/**
 * OBCashAccount60
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
 * Class representing the OBCashAccount60 model.
 *
 * Unambiguous identification of the account of the creditor, in the case of a debit transaction.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBCashAccount60
{
    /**
     * Name of the identification scheme, in a coded form as published in an external list.
     *
     * @var string|null
     * @SerializedName("SchemeName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $schemeName = null;

    /**
     * Identification assigned by an institution to identify an account. This identification is known by the account owner.
     *
     * @var string|null
     * @SerializedName("Identification")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 256
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $identification = null;

    /**
     * The account name is the name or names of the account owner(s) represented at an account level, as displayed by the ASPSP&#39;s online channels. Note, the account name is not the product name or the nickname of the account.
     *
     * @var string|null
     * @SerializedName("Name")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 350
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $name = null;

    /**
     * This is secondary identification of the account, as assigned by the account servicing institution.  This can be used by building societies to additionally identify accounts with a roll number (in addition to a sort code and account number combination).
     *
     * @var string|null
     * @SerializedName("SecondaryIdentification")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 34
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $secondaryIdentification = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->schemeName = $data['schemeName'] ?? null;
        $this->identification = $data['identification'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->secondaryIdentification = $data['secondaryIdentification'] ?? null;
    }

    /**
     * Gets schemeName.
     *
     * @return string|null
     */
    public function getSchemeName(): ?string
    {
        return $this->schemeName;
    }

    /**
     * Sets schemeName.
     *
     * @param string|null $schemeName  Name of the identification scheme, in a coded form as published in an external list.
     *
     * @return $this
     */
    public function setSchemeName(?string $schemeName = null): self
    {
        $this->schemeName = $schemeName;

        return $this;
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
     * @param string|null $identification  Identification assigned by an institution to identify an account. This identification is known by the account owner.
     *
     * @return $this
     */
    public function setIdentification(?string $identification = null): self
    {
        $this->identification = $identification;

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
     * @param string|null $name  The account name is the name or names of the account owner(s) represented at an account level, as displayed by the ASPSP's online channels. Note, the account name is not the product name or the nickname of the account.
     *
     * @return $this
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets secondaryIdentification.
     *
     * @return string|null
     */
    public function getSecondaryIdentification(): ?string
    {
        return $this->secondaryIdentification;
    }

    /**
     * Sets secondaryIdentification.
     *
     * @param string|null $secondaryIdentification  This is secondary identification of the account, as assigned by the account servicing institution.  This can be used by building societies to additionally identify accounts with a roll number (in addition to a sort code and account number combination).
     *
     * @return $this
     */
    public function setSecondaryIdentification(?string $secondaryIdentification = null): self
    {
        $this->secondaryIdentification = $secondaryIdentification;

        return $this;
    }
}
