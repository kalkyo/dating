<?php

/**
 * Member class
 * Represents a member object standard member info
 * @author Peter Eang
 * @copyright 2021
 */

class Member
{
    private $_fname;
    private $_lname;
    private $_age;
    private $_gender;
    private $_phone;
    private $_email;
    private $_state;
    private $_seeking;
    private $_bio;

    /**
     * Member constructor.
     * @param string $_fname User's first name, default ""
     * @param string $_lname User's last name, default ""
     * @param int $_age User's age, default ""
     * @param string $_gender User's gender, default ""
     * @param string $_phone User's Phone #, default ""
     * @return void
     */
    function __construct($_fname="", $_lname="", $_age="", $_gender="", $_phone="")
    {
        $this->_fname = $_fname;
        $this->_lname = $_lname;
        $this->_age = $_age;
        $this->_gender = $_gender;
        $this->_phone = $_phone;
    }

    /**
     * getFname() function
     * @return string User's first name
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * setFname() function
     * @param string $fname User's first name
     * @return void
     */
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    /**
     * getLname() function
     * @return string User's last name
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * setLname() function
     * @param string $lname User's last name
     * @return void
     */
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    /**
     * getAge() function
     * @return int User's age
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * setAge() function
     * @param int $age User's age
     * @return void
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * getGender() function
     * @return string User's gender
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /**
     * setGender() function
     * @param string $gender User's gender
     * @return void
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * getPhone() function
     * @return string User's phone #
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * setPhone() function
     * @param string $phone User's phone #
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * getEmail() function
     * @return mixed User's email
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * setEmail() function
     * @param mixed $email User's email
     * @return void
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * getState() function
     * @return mixed User's state
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * setState() function
     * @param mixed $state User's state
     * @return void
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * getSeeking() function
     * @return mixed User's seeking option
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /**
     * setSeeking() function
     * @param mixed $seeking User's seeking option
     * @return void
     */
    public function setSeeking($seeking)
    {
        $this->_seeking = $seeking;
    }

    /**
     * getBio() function
     * @return mixed User's bio
     */
    public function getBio()
    {
        return $this->_bio;
    }

    /**
     * setBio() function
     * @param mixed $bio User's bio
     * @return void
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }
}