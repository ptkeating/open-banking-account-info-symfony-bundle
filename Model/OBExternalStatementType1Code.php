<?php
/**
 * OBExternalStatementType1Code
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
 * Class representing the OBExternalStatementType1Code model.
 *
 * Statement type, in a coded form.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class OBExternalStatementType1Code
{
    /**
     * Possible values of this enum
     */
    const ACCOUNT_CLOSURE = "AccountClosure";
    const ACCOUNT_OPENING = "AccountOpening";
    const ANNUAL = "Annual";
    const INTERIM = "Interim";
    const REGULAR_PERIODIC = "RegularPeriodic";
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCOUNT_CLOSURE,
            self::ACCOUNT_OPENING,
            self::ANNUAL,
            self::INTERIM,
            self::REGULAR_PERIODIC,
        ];
    }
}



