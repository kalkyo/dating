<?php

/*  validation.php
 *  Validate data from dating form
 *
 */

class Validation
{
    //returns the name if the name is valid otherwise false
    static function validName($name)
    {
        if (ctype_alpha($name)) {
            return $name;
        } else if ($name == "") {
            return !empty($name);
        }
    }

    //returns the age if the age is valid
    static function validAge($age)
    {
        $HIGHEST_AGE = 118;
        $LOWEST_AGE = 18;
        if (ctype_digit($age)) {
            if ($age < $LOWEST_AGE || $age > $HIGHEST_AGE) {
                return !ctype_digit($age);
            }
            return !empty($age);
        }
    }

    //returns the phone number if it is valid following the regex
    static function validPhone($phone)
    {
        if (preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)) {
            return $phone;
        } else {
            return !empty($age);
        }
    }

    //returns the email if it is valid
    static function validEmail($email)
    {
        return !!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@
        ([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email);;
    }

    //returns the outdoor interests if they are valid
    static function validIndoor($indoorint)
    {
        $validIndoor = getIndoor();

        //Make sure each selected condiment is valid
        foreach ($indoorint as $userIndoorChoices) {
            if (!in_array($userIndoorChoices, $validIndoor)) {
                return false;
            }
        }
        //All choices are valid
        return true;
    }

    static function validOutdoor($outdoorint)
    {
        $validOutdoor = getOutdoor();

        //Make sure each selected condiment is valid
        foreach ($outdoorint as $userOutdoorChoices) {
            if (!in_array($userOutdoorChoices, $validOutdoor)) {
                return false;
            }
        }
        //All choices are valid
        return true;
    }
}

