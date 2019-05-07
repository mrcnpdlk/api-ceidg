<?php

namespace Mrcnpdlk\Api\Ceidg\Sdk\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMigrationData201901Response StructType
 * @subpackage Structs
 */
class GetMigrationData201901Response extends AbstractStructBase
{
    /**
     * The GetMigrationData201901Result
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GetMigrationData201901Result;
    /**
     * Constructor method for GetMigrationData201901Response
     * @uses GetMigrationData201901Response::setGetMigrationData201901Result()
     * @param string $getMigrationData201901Result
     */
    public function __construct($getMigrationData201901Result = null)
    {
        $this
            ->setGetMigrationData201901Result($getMigrationData201901Result);
    }
    /**
     * Get GetMigrationData201901Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetMigrationData201901Result()
    {
        return isset($this->GetMigrationData201901Result) ? $this->GetMigrationData201901Result : null;
    }
    /**
     * Set GetMigrationData201901Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getMigrationData201901Result
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901Response
     */
    public function setGetMigrationData201901Result($getMigrationData201901Result = null)
    {
        // validation for constraint: string
        if (!is_null($getMigrationData201901Result) && !is_string($getMigrationData201901Result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getMigrationData201901Result, true), gettype($getMigrationData201901Result)), __LINE__);
        }
        if (is_null($getMigrationData201901Result) || (is_array($getMigrationData201901Result) && empty($getMigrationData201901Result))) {
            unset($this->GetMigrationData201901Result);
        } else {
            $this->GetMigrationData201901Result = $getMigrationData201901Result;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901Response
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
