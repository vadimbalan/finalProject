<?php

class SUV extends Car
{
    // Declare instance variables
    private $_seats;
    private $_numOfWheels;

    /**
     * SUV constructor.
     * @param $_fName
     * @param $_lName
     * @param $_phone
     * @param $_email
     * @param $_seats
     * @param $_numOfWheels
     */
    public function __construct($_fName, $_lName, $_phone, $_email, $_seats = "", $_numOfWheels = "")
    {
        parent::__construct($_fName, $_lName, $_phone, $_email);

        $this->_seats = $_seats;
        $this->_numOfWheels = $_numOfWheels;
    }

    /**
     * @return mixed
     */
    public function getSeats()
    {
        return $this->_seats;
    }

    /**
     * @param mixed $seats
     */
    public function setSeats($seats)
    {
        $this->_seats = $seats;
    }

    /**
     * @return mixed
     */
    public function getNumOfWheels()
    {
        return $this->_numOfWheels;
    }

    /**
     * @param mixed $numOfWheels
     */
    public function setNumOfWheels($numOfWheels)
    {
        $this->_numOfWheels = $numOfWheels;
    }




}
