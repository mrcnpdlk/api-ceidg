<?php

namespace Mrcnpdlk\Api\Ceidg\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIDResponse StructType
 */
class GetIDResponse extends AbstractStructBase
{
    /**
     * The GetIDResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $GetIDResult;

    /**
     * Constructor method for GetIDResponse
     *
     * @uses GetIDResponse::setGetIDResult()
     *
     * @param string $getIDResult
     */
    public function __construct($getIDResult = null)
    {
        $this
            ->setGetIDResult($getIDResult);
    }

    /**
     * Get GetIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getGetIDResult()
    {
        return isset($this->GetIDResult) ? $this->GetIDResult : null;
    }

    /**
     * Set GetIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $getIDResult
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetIDResponse
     */
    public function setGetIDResult($getIDResult = null)
    {
        // validation for constraint: string
        if (!is_null($getIDResult) && !is_string($getIDResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getIDResult, true), gettype($getIDResult)), __LINE__);
        }
        if (is_null($getIDResult) || (is_array($getIDResult) && empty($getIDResult))) {
            unset($this->GetIDResult);
        } else {
            $this->GetIDResult = $getIDResult;
        }

        return $this;
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see AbstractStructBase::__set_state()
     *
     * @uses AbstractStructBase::__set_state()
     *
     * @param array $array the exported values
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetIDResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
