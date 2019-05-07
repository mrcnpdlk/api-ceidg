<?php

namespace Mrcnpdlk\Api\Ceidg\Sdk;

use Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfint;
use Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring;
use Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetID;
use Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetIDResponse;
use Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901;
use Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901Response;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     *
     * @return string[]
     */
    final public static function get()
    {
        return [
            'GetID'                          => GetID::class,
            'GetIDResponse'                  => GetIDResponse::class,
            'GetMigrationData201901'         => GetMigrationData201901::class,
            'GetMigrationData201901Response' => GetMigrationData201901Response::class,
            'ArrayOfstring'                  => ArrayOfstring::class,
            'ArrayOfint'                     => ArrayOfint::class,
        ];
    }
}
