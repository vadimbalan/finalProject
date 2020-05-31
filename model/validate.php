<?php

// Validate.php

/* Return a value indicating if name parameter is valid
 * Valid names are not empty and do not contain anything except letters
 * @param String $first
 * @return boolean
 */
function validName($name)
{
    $name = str_replace(' ', '', $name);
    return !empty($name) && ctype_alpha($name);
}

/* Return a value indicating if email parameter is valid
 * Valid phone is 123-123-1234
 * @param int phone
 * @return boolean
 */
function validPhone($phone)
{
    if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone))
    {
        return true;
    }
    else
    {
        return false;
    }
}

/* Return a value indicating if email parameter is valid
 * Valid phone is example@example.com
 * @param string email
 * @return boolean
 */
function validEmail($email)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return true;
    }
    else
    {
        return false;
    }
}

/* Return a value indicating if model of bmw parameter is valid
 * @param string model
 * @return boolean
 */
function validModel($model)
{
    if (!in_array($model, getModel()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if year parameter is valid
 * @param string year
 * @return boolean
 */
function validYear($year)
{
    if (!in_array($year, getYear()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if drive-train parameter is valid
 * @param string drive-train
 * @return boolean
 */
function validDriveTrain($drive)
{
    if (!in_array($drive, getWheel()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if rim size parameter is valid
 * @param string rim
 * @return boolean
 */
function validRim($rim)
{
    if (!in_array($rim, getRim()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if to add spinners is valid
 * @param string spinner
 * @return boolean
 */
function validSpinner($spinner)
{
    if (!in_array($spinner, getSpinner()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if color of vehicle is valid
 * @param string color
 * @return boolean
 */
function validColor($color)
{
    if (!in_array($color, getColor()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if exhaust type is valid
 * @param string exhaust
 * @return boolean
 */
function validExhaust($exhaust)
{
    if (!in_array($exhaust, getExhaust()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if engine type is valid
 * @param string engine
 * @return boolean
 */
function validEngine($engine)
{
    if (!in_array($engine, getEngine()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if transmission type is valid
 * @param string transmission
 * @return boolean
 */
function validTransmission($transmission)
{
    if (!in_array($transmission, getTransmission()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if leather type is valid
 * @param string leather
 * @return boolean
 */
function validLeather($leather)
{
    if (!in_array($leather, getLeather()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if leather type is valid
 * @param string leather
 * @return boolean
 */
function validSeats($seats)
{
    if (!in_array($seats, getSeat()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if leather type is valid
 * @param string leather
 * @return boolean
 */
function validStereo($stereo)
{
    if (!in_array($stereo, getStereo()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if nav type is valid
 * @param string nav
 * @return boolean
 */
function validNav($nav)
{
    if (!in_array($nav, getNavigation()))
    {
        return false;
    }
    return true;
}

/* Return a value indicating if heads up display type is valid
 * @param string head
 * @return boolean
 */
function validHead($head)
{
    if (!in_array($head, getHeadsUp()))
    {
        return false;
    }
    return true;
}


