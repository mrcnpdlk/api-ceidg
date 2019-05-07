<?php

namespace Mrcnpdlk\Api\Ceidg\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMigrationData201901 StructType
 */
class GetMigrationData201901 extends AbstractStructBase
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
     * The NIP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $NIP;
    /**
     * The REGON
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $REGON;
    /**
     * The NIP_SC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $NIP_SC;
    /**
     * The REGON_SC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $REGON_SC;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $Name;
    /**
     * The Province
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $Province;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $County;
    /**
     * The Commune
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $Commune;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $City;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $Street;
    /**
     * The Postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $Postcode;
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
     * The PKD
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $PKD;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfint
     */
    public $status;
    /**
     * The UniqueId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring
     */
    public $UniqueId;
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
     * Constructor method for GetMigrationData201901
     *
     * @uses GetMigrationData201901::setAuthToken()
     * @uses GetMigrationData201901::setNIP()
     * @uses GetMigrationData201901::setREGON()
     * @uses GetMigrationData201901::setNIP_SC()
     * @uses GetMigrationData201901::setREGON_SC()
     * @uses GetMigrationData201901::setName()
     * @uses GetMigrationData201901::setProvince()
     * @uses GetMigrationData201901::setCounty()
     * @uses GetMigrationData201901::setCommune()
     * @uses GetMigrationData201901::setCity()
     * @uses GetMigrationData201901::setStreet()
     * @uses GetMigrationData201901::setPostcode()
     * @uses GetMigrationData201901::setDateFrom()
     * @uses GetMigrationData201901::setDateTo()
     * @uses GetMigrationData201901::setPKD()
     * @uses GetMigrationData201901::setStatus()
     * @uses GetMigrationData201901::setUniqueId()
     * @uses GetMigrationData201901::setMigrationDateFrom()
     * @uses GetMigrationData201901::setMigrationDateTo()
     *
     * @param string                                          $authToken
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $nIP
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $rEGON
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $nIP_SC
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $rEGON_SC
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $name
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $province
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $county
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $commune
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $city
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $street
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $postcode
     * @param string                                          $dateFrom
     * @param string                                          $dateTo
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $pKD
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfint    $status
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $uniqueId
     * @param string                                          $migrationDateFrom
     * @param string                                          $migrationDateTo
     */
    public function __construct($authToken = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $nIP = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $rEGON = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $nIP_SC = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $rEGON_SC = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $name = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $province = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $county = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $commune = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $city = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $street = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $postcode = null, $dateFrom = null, $dateTo = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $pKD = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfint $status = null, \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $uniqueId = null, $migrationDateFrom = null, $migrationDateTo = null)
    {
        $this
            ->setAuthToken($authToken)
            ->setNIP($nIP)
            ->setREGON($rEGON)
            ->setNIP_SC($nIP_SC)
            ->setREGON_SC($rEGON_SC)
            ->setName($name)
            ->setProvince($province)
            ->setCounty($county)
            ->setCommune($commune)
            ->setCity($city)
            ->setStreet($street)
            ->setPostcode($postcode)
            ->setDateFrom($dateFrom)
            ->setDateTo($dateTo)
            ->setPKD($pKD)
            ->setStatus($status)
            ->setUniqueId($uniqueId)
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
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
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
     * Get NIP value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getNIP()
    {
        return isset($this->NIP) ? $this->NIP : null;
    }

    /**
     * Set NIP value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $nIP
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setNIP(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $nIP = null)
    {
        if (is_null($nIP) || (is_array($nIP) && empty($nIP))) {
            unset($this->NIP);
        } else {
            $this->NIP = $nIP;
        }

        return $this;
    }

    /**
     * Get REGON value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getREGON()
    {
        return isset($this->REGON) ? $this->REGON : null;
    }

    /**
     * Set REGON value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $rEGON
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setREGON(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $rEGON = null)
    {
        if (is_null($rEGON) || (is_array($rEGON) && empty($rEGON))) {
            unset($this->REGON);
        } else {
            $this->REGON = $rEGON;
        }

        return $this;
    }

    /**
     * Get NIP_SC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getNIP_SC()
    {
        return isset($this->NIP_SC) ? $this->NIP_SC : null;
    }

    /**
     * Set NIP_SC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $nIP_SC
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setNIP_SC(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $nIP_SC = null)
    {
        if (is_null($nIP_SC) || (is_array($nIP_SC) && empty($nIP_SC))) {
            unset($this->NIP_SC);
        } else {
            $this->NIP_SC = $nIP_SC;
        }

        return $this;
    }

    /**
     * Get REGON_SC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getREGON_SC()
    {
        return isset($this->REGON_SC) ? $this->REGON_SC : null;
    }

    /**
     * Set REGON_SC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $rEGON_SC
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setREGON_SC(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $rEGON_SC = null)
    {
        if (is_null($rEGON_SC) || (is_array($rEGON_SC) && empty($rEGON_SC))) {
            unset($this->REGON_SC);
        } else {
            $this->REGON_SC = $rEGON_SC;
        }

        return $this;
    }

    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }

    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $name
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setName(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $name = null)
    {
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }

        return $this;
    }

    /**
     * Get Province value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getProvince()
    {
        return isset($this->Province) ? $this->Province : null;
    }

    /**
     * Set Province value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $province
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setProvince(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $province = null)
    {
        if (is_null($province) || (is_array($province) && empty($province))) {
            unset($this->Province);
        } else {
            $this->Province = $province;
        }

        return $this;
    }

    /**
     * Get County value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getCounty()
    {
        return isset($this->County) ? $this->County : null;
    }

    /**
     * Set County value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $county
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setCounty(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $county = null)
    {
        if (is_null($county) || (is_array($county) && empty($county))) {
            unset($this->County);
        } else {
            $this->County = $county;
        }

        return $this;
    }

    /**
     * Get Commune value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getCommune()
    {
        return isset($this->Commune) ? $this->Commune : null;
    }

    /**
     * Set Commune value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $commune
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setCommune(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $commune = null)
    {
        if (is_null($commune) || (is_array($commune) && empty($commune))) {
            unset($this->Commune);
        } else {
            $this->Commune = $commune;
        }

        return $this;
    }

    /**
     * Get City value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getCity()
    {
        return isset($this->City) ? $this->City : null;
    }

    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $city
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setCity(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $city = null)
    {
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }

        return $this;
    }

    /**
     * Get Street value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getStreet()
    {
        return isset($this->Street) ? $this->Street : null;
    }

    /**
     * Set Street value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $street
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setStreet(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $street = null)
    {
        if (is_null($street) || (is_array($street) && empty($street))) {
            unset($this->Street);
        } else {
            $this->Street = $street;
        }

        return $this;
    }

    /**
     * Get Postcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getPostcode()
    {
        return isset($this->Postcode) ? $this->Postcode : null;
    }

    /**
     * Set Postcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $postcode
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setPostcode(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $postcode = null)
    {
        if (is_null($postcode) || (is_array($postcode) && empty($postcode))) {
            unset($this->Postcode);
        } else {
            $this->Postcode = $postcode;
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
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
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
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
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
     * Get PKD value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getPKD()
    {
        return isset($this->PKD) ? $this->PKD : null;
    }

    /**
     * Set PKD value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $pKD
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setPKD(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $pKD = null)
    {
        if (is_null($pKD) || (is_array($pKD) && empty($pKD))) {
            unset($this->PKD);
        } else {
            $this->PKD = $pKD;
        }

        return $this;
    }

    /**
     * Get status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfint|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }

    /**
     * Set status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfint $status
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setStatus(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfint $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->status);
        } else {
            $this->status = $status;
        }

        return $this;
    }

    /**
     * Get UniqueId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring|null
     */
    public function getUniqueId()
    {
        return isset($this->UniqueId) ? $this->UniqueId : null;
    }

    /**
     * Set UniqueId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $uniqueId
     *
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
     */
    public function setUniqueId(\Mrcnpdlk\Api\Ceidg\Sdk\ArrayType\ArrayOfstring $uniqueId = null)
    {
        if (is_null($uniqueId) || (is_array($uniqueId) && empty($uniqueId))) {
            unset($this->UniqueId);
        } else {
            $this->UniqueId = $uniqueId;
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
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
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
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
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
     * @return \Mrcnpdlk\Api\Ceidg\Sdk\StructType\GetMigrationData201901
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
