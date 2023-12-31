<?php
/**
 * OBInterestRateType1Code1
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
 * Class representing the OBInterestRateType1Code1 model.
 *
 * Rate type for Fee/Charge (where it is charged in terms of a rate rather than an amount)
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class OBInterestRateType1Code1
{
    /**
     * Possible values of this enum
     */
    const INBB = "INBB";
    const INFR = "INFR";
    const INGR = "INGR";
    const INLR = "INLR";
    const INNE = "INNE";
    const INOT = "INOT";
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INBB,
            self::INFR,
            self::INGR,
            self::INLR,
            self::INNE,
            self::INOT,
        ];
    }
}



