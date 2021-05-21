<?php

/*  validation.php
 *  Validate data from dating form
 *
 */

//returns the name if the name is valid otherwise false
function validName($name)
{
    if ($name != "" && ctype_alpha($name))
    {
        return $name;
    }
    return !empty($name);
}

//returns true as long as 1 flavor is selected
function validFlavor($userFlavors)
{
    return !is_null($userFlavors);
}