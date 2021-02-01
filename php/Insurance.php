<?php
class Insurance
{
    private $startingDate;
    private $expirationDate;
    private $coverage;
    private $typeOfInsurance;

    function __construct($startingDate = null, $expirationDate = null, $coverage = null, $typeOfInsurance = null)
    {
        $this->startingDate = $startingDate;
        $this->expirationDate = $expirationDate;
        $this->coverage = $coverage;
        $this->typeOfInsurance = $typeOfInsurance;
    }
    function get_startingDate()
    {
        return $this->startingDate;
    }
    function set_startingDate($startingDate)
    {
        $this->startingDate = $startingDate;
    }
    function get_expirationDate()
    {
        return $this->expirationDate;
    }
    function set_expirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }
    function get_coverage()
    {
        return $this->coverage;
    }
    function set_coverage($coverage)
    {
        $this->coverage = $coverage;
    }
    function get_typeOfInsurance()
    {
        return $this->typeOfInsurance;
    }
    function set_typeOfInsurance($typeOfInsurance)
    {
        $this->typeOfInsurance = $typeOfInsurance;
    }
    function get_properties()
    {
        return get_object_vars($this);
    }
}
