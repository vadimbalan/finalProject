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
    public function __construct($fName = "", $lName = "", $phone = "", $email = "", $model = "", $year = "",
                                $rim = "", $spinners = "", $color = "", $exhaust = "", $engine = "", $transmission = "",
                                $exterior = "", $leather = "", $stereo = "", $navigation = "", $headsUp = "", $seats = "", $numOfWheels = "")
    {
        parent::construct($fName, $lName, $phone, $email, $model, $year, $rim, $spinners, $color, $exhaust, $engine,
            $transmission, $exterior, $leather, $stereo, $navigation, $headsUp);

        $this->setSeats($seats);
        $this->setNumOfWheels($numOfWheels);
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
