<?php

/**
 * CreditInterest1
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
 * Class representing the CreditInterest1 model.
 *
 * Details about the interest that may be payable to the PCA account holders
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class CreditInterest1 extends CreditInterest
{
    /**
     * The group of tiers or bands for which credit interest can be applied.
     *
     * @var array|null
     * @SerializedName("TierBandSet")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\TierBandSetInner1")
     * })
     * @Type("array<OpenAPI\Server\Model\TierBandSetInner1>")
     * @Assert\Count(
     *   min = 1
     * )
     */
    protected ?array $tierBandSet = null;
}
