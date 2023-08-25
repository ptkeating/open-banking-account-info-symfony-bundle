<?php
/**
 * OBOverdraftFeeType1Code
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
 * Class representing the OBOverdraftFeeType1Code model.
 *
 * Overdraft fee type
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class OBOverdraftFeeType1Code
{
    /**
     * Possible values of this enum
     */
    const FBAO = "FBAO";
    const FBAR = "FBAR";
    const FBEB = "FBEB";
    const FBIT = "FBIT";
    const FBOR = "FBOR";
    const FBOS = "FBOS";
    const FBSC = "FBSC";
    const FBTO = "FBTO";
    const FBUB = "FBUB";
    const FBUT = "FBUT";
    const FTOT = "FTOT";
    const FTUT = "FTUT";
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FBAO,
            self::FBAR,
            self::FBEB,
            self::FBIT,
            self::FBOR,
            self::FBOS,
            self::FBSC,
            self::FBTO,
            self::FBUB,
            self::FBUT,
            self::FTOT,
            self::FTUT,
        ];
    }
}



