<?php

/**
 * OBCashAccount51
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
 * Class representing the OBCashAccount51 model.
 *
 * Provides the details to identify the beneficiary account.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class OBCashAccount51 extends OBCashAccount50
{

    /**
     * Beneficiary account identification.
     *
     * @var string|null
     * @SerializedName("Identification")
     * @Assert\NotNull()
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
     * Sets identification.
     *
     * @param string|null $identification  Beneficiary account identification.
     *
     * @return $this
     */
    public function setIdentification(?string $identification): self
    {
        $this->identification = $identification;

        return $this;
    }
}
