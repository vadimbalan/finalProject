<?php

class Car
{
    // Declare instance variables
    private $_fName;
    private $_lName;
    private $_phone;
    private $_email;
    private $_model;
    private $_year;
    private $_rim;
    private $_spinners;
    private $_color;
    private $_exhaust;
    private $_engine;
    private $_transmission;
    private $_leather;
    private $_stereo;
    private $_navigation;
    private $_headsUp;

    // Constructor
    /**
     * Car constructor.
     * @param $_fName
     * @param $_lName
     * @param $_phone
     * @param $_email
     * @param $_model
     * @param $_year
     * @param $_rim
     * @param $_spinners
     * @param $_color
     * @param $_exhaust
     * @param $_engine
     * @param $_transmission
     * @param $_leather
     * @param $_stereo
     * @param $_navigation
     * @param $_headsUp
     */
    public function __construct($_fName, $_lName, $_phone, $_email, $_model, $_year, $_rim, $_spinners, $_color,
                                $_exhaust, $_engine, $_transmission, $_leather, $_stereo, $_navigation, $_headsUp)
    {
        $this->_fName = $_fName;
        $this->_lName = $_lName;
        $this->_phone = $_phone;
        $this->_email = $_email;
        $this->_model = $_model;
        $this->_year = $_year;
        $this->_rim = $_rim;
        $this->_spinners = $_spinners;
        $this->_color = $_color;
        $this->_exhaust = $_exhaust;
        $this->_engine = $_engine;
        $this->_transmission = $_transmission;
        $this->_leather = $_leather;
        $this->_stereo = $_stereo;
        $this->_navigation = $_navigation;
        $this->_headsUp = $_headsUp;
    }

    /**
     * @return mixed
     */
    public function getFName()
    {
        return $this->_fName;
    }

    /**
     * @param mixed $fName
     */
    public function setFName($fName)
    {
        $this->_fName = $fName;
    }

    /**
     * @return mixed
     */
    public function getLName()
    {
        return $this->_lName;
    }

    /**
     * @param mixed $lName
     */
    public function setLName($lName)
    {
        $this->_lName = $lName;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->_model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->_model = $model;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->_year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->_year = $year;
    }

    /**
     * @return mixed
     */
    public function getRim()
    {
        return $this->_rim;
    }

    /**
     * @param mixed $rim
     */
    public function setRim($rim)
    {
        $this->_rim = $rim;
    }

    /**
     * @return mixed
     */
    public function getSpinners()
    {
        return $this->_spinners;
    }

    /**
     * @param mixed $spinners
     */
    public function setSpinners($spinners)
    {
        $this->_spinners = $spinners;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->_color = $color;
    }

    /**
     * @return mixed
     */
    public function getExhaust()
    {
        return $this->_exhaust;
    }

    /**
     * @param mixed $exhaust
     */
    public function setExhaust($exhaust)
    {
        $this->_exhaust = $exhaust;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->_engine;
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine)
    {
        $this->_engine = $engine;
    }

    /**
     * @return mixed
     */
    public function getTransmission()
    {
        return $this->_transmission;
    }

    /**
     * @param mixed $transmission
     */
    public function setTransmission($transmission)
    {
        $this->_transmission = $transmission;
    }

    /**
     * @return mixed
     */
    public function getLeather()
    {
        return $this->_leather;
    }

    /**
     * @param mixed $leather
     */
    public function setLeather($leather)
    {
        $this->_leather = $leather;
    }

    /**
     * @return mixed
     */
    public function getStereo()
    {
        return $this->_stereo;
    }

    /**
     * @param mixed $stereo
     */
    public function setStereo($stereo)
    {
        $this->_stereo = $stereo;
    }

    /**
     * @return mixed
     */
    public function getNavigation()
    {
        return $this->_navigation;
    }

    /**
     * @param mixed $navigation
     */
    public function setNavigation($navigation)
    {
        $this->_navigation = $navigation;
    }

    /**
     * @return mixed
     */
    public function getHeadsUp()
    {
        return $this->_headsUp;
    }

    /**
     * @param mixed $headsUp
     */
    public function setHeadsUp($headsUp)
    {
        $this->_headsUp = $headsUp;
    }

}
