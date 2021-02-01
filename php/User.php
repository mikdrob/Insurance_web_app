<?php
require_once 'Insurance.php';
class User
{
    public $firstName;
    private $lastName;
    private $dateOfBirth;
    private $gender;
    private $contactNumber;
    private $email;
    private $psw;
    private $insurance;

    function __construct()
    {
        $this->insurance = new Insurance();
    }


    function get_firstName()
    {
        return $this->firstName;
    }
    function set_firstName($firstName)
    {
        $this->firstName = $firstName;
    }
    function get_secondName()
    {
        return $this->lastName;
    }
    function set_secondName($lastName)
    {
        $this->lastName = $lastName;
    }
    function get_dateOfBirth()
    {
        return $this->dateOfBirth;
    }
    function set_dateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }
    function get_gender()
    {
        return $this->gender;
    }
    function set_gender($gender)
    {
        $this->gender = $gender;
    }
    function get_contactNumber()
    {
        return $this->contactNumber;
    }
    function set_contactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;
    }
    function get_password()
    {
        return $this->psw;
    }
    function set_password($psw)
    {
        $this->psw = $psw;
    }
    function get_email()
    {
        return $this->email;
    }
    function set_email($email)
    {
        $this->email = $email;
    }
    function get_insurance()
    {
        return $this->insurance;
    }
    function add_insurance()
    {
        return new Insurance();
    }
    function set_insurance($insurance)
    {
        $this->insurance = $insurance;
    }
    function get_properties()
    {
        return get_object_vars($this);
    }
    function get_insuraceProperties()
    {
        return $this->insurance->get_properties();
    }
}
