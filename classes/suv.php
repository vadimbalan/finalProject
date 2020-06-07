<?php

class SUV extends Car
{
    // Declare instance variables
    private $_seats;

    /**
     * SUV constructor.
     * @param $_seats
     */
    public function __construct($_seats)
    {
        $this->_seats = $_seats;
    }


}
