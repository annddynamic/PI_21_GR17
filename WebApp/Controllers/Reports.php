<?php


class Reports extends Controller {

    private $name;
    private $lastName;
    private $report;
    private $textfield;
    private $file;
    private $date;
    private $city;
    private $address;
    private $sID;
    private $categoryID;
    private $errors=[];


    public function __construct()
    {
        $this->sID=1;
        $this->categoryID=1;
    }


    public function getSID()
    {
        return $this->sID;
    }


    public function getCategoryID()
    {
        return $this->categoryID;
    }

    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


    public function setAddress($address): void
    {
        $this->address = $address;
    }


    public function getAddress()
    {
        return $this->address;
    }

    public function setReport($report)
    {
        $this->report = $report;
    }

    public function setTextfield($textfield)
    {
        $this->textfield = $textfield;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getReport()
    {
        return $this->report;
    }

    public function getTextfield()
    {
        return $this->textfield;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getCity()
    {
        return $this->city;
    }



}

