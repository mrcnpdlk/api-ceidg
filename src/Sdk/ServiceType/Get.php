<?php

namespace Mrcnpdlk\Api\Ceidg\Sdk\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetID $parameters
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetIDResponse|bool
     */
    public function GetID(\Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetID $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetID($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMigrationData201901
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901 $parameters
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901Response|bool
     */
    public function GetMigrationData201901(\Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMigrationData201901($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetIDResponse|\Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901Response
     */
    public function getResult()
    {
        return parent::getResult();
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
