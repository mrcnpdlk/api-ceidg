<?php

namespace Mrcnpdlk\Api\Ceidg\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetID StructType
 */
class GetID extends AbstractStructBase
{
    /**
     * The AuthToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $AuthToken;
    /**
     * The DateFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $DateFrom;
    /**
     * The DateTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $DateTo;
    /**
     * The MigrationDateFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $MigrationDateFrom;
    /**
     * The MigrationDateTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $MigrationDateTo;

    /**
     * Constructor method for GetID
     *
     * @uses GetID::setAuthToken()
     * @uses GetID::setDateFrom()
     * @uses GetID::setDateTo()
     * @uses GetID::setMigrationDateFrom()
     * @uses GetID::setMigrationDateTo()
     *
     * @param string $authToken
     * @param string $dateFrom
     * @param string $dateTo
     * @param string $migrationDateFrom
     * @param string $migrationDateTo
     */
    public function __construct($authToken = null, $dateFrom = null, $dateTo = null, $migrationDateFrom = null, $migrationDateTo = null)
    {
        $this
            ->setAuthToken($authToken)
            ->setDateFrom($dateFrom)
            ->setDateTo($dateTo)
            ->setMigrationDateFrom($migrationDateFrom)
            ->setMigrationDateTo($migrationDateTo);
    }

    /**
     * Get AuthToken value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAuthToken()
    {
        return isset($this->AuthToken) ? $this->AuthToken : null;
    }

    /**
     * Set AuthToken value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $authToken
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetID
     */
    public function setAuthToken($authToken = null)
    {
        // validation for constraint: string
        if (!is_null($authToken) && !is_string($authToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authToken, true), gettype($authToken)), __LINE__);
        }
        if (is_null($authToken) || (is_array($authToken) && empty($authToken))) {
            unset($this->AuthToken);
        } else {
            $this->AuthToken = $authToken;
        }

        return $this;
    }

    /**
     * Get DateFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDateFrom()
    {
        return isset($this->DateFrom) ? $this->DateFrom : null;
    }

    /**
     * Set DateFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $dateFrom
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetID
     */
    public function setDateFrom($dateFrom = null)
    {
        // validation for constraint: string
        if (!is_null($dateFrom) && !is_string($dateFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFrom, true), gettype($dateFrom)), __LINE__);
        }
        if (is_null($dateFrom) || (is_array($dateFrom) && empty($dateFrom))) {
            unset($this->DateFrom);
        } else {
            $this->DateFrom = $dateFrom;
        }

        return $this;
    }

    /**
     * Get DateTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDateTo()
    {
        return isset($this->DateTo) ? $this->DateTo : null;
    }

    /**
     * Set DateTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $dateTo
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetID
     */
    public function setDateTo($dateTo = null)
    {
        // validation for constraint: string
        if (!is_null($dateTo) && !is_string($dateTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTo, true), gettype($dateTo)), __LINE__);
        }
        if (is_null($dateTo) || (is_array($dateTo) && empty($dateTo))) {
            unset($this->DateTo);
        } else {
            $this->DateTo = $dateTo;
        }

        return $this;
    }

    /**
     * Get MigrationDateFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMigrationDateFrom()
    {
        return isset($this->MigrationDateFrom) ? $this->MigrationDateFrom : null;
    }

    /**
     * Set MigrationDateFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $migrationDateFrom
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetID
     */
    public function setMigrationDateFrom($migrationDateFrom = null)
    {
        // validation for constraint: string
        if (!is_null($migrationDateFrom) && !is_string($migrationDateFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($migrationDateFrom, true), gettype($migrationDateFrom)), __LINE__);
        }
        if (is_null($migrationDateFrom) || (is_array($migrationDateFrom) && empty($migrationDateFrom))) {
            unset($this->MigrationDateFrom);
        } else {
            $this->MigrationDateFrom = $migrationDateFrom;
        }

        return $this;
    }

    /**
     * Get MigrationDateTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMigrationDateTo()
    {
        return isset($this->MigrationDateTo) ? $this->MigrationDateTo : null;
    }

    /**
     * Set MigrationDateTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $migrationDateTo
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetID
     */
    public function setMigrationDateTo($migrationDateTo = null)
    {
        // validation for constraint: string
        if (!is_null($migrationDateTo) && !is_string($migrationDateTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($migrationDateTo, true), gettype($migrationDateTo)), __LINE__);
        }
        if (is_null($migrationDateTo) || (is_array($migrationDateTo) && empty($migrationDateTo))) {
            unset($this->MigrationDateTo);
        } else {
            $this->MigrationDateTo = $migrationDateTo;
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
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetID
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
