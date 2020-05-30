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