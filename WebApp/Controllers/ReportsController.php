<?php


class ReportsController extends Controller {

    private $name;
    private $lastName;
    private $report;
    private $textfield;
    private $file;
    private $date;
    private $city;
    private $address;
    private $errors=[];


    public function __construct()
    {
        $this->reportModel=$this->model('ReportModel');
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


    public function createReport()
    {
        $errors=[
            'nameError' => '',
            'lastNameError' => '',
            'reportError' => '',
            'addressError' => '',
            'cityError' => '',
            'textfieldError' => '',
            'dateError' => '',
            'fileError'=>''
        ];

        $this->setErrors($errors);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $this->setName(trim($_POST['name']));
            $this->setLastName(trim($_POST['lastName']));
            $this->setReport(trim($_POST['report']));
            $this->setFile(trim($_POST['file']));
            $this->setTextfield(trim($_POST['textfield']));
            $this->setDate(trim($_POST['date']));
            $this->setCity(trim($_POST['city']));
            $this->setAddress(trim($_POST['address']));




            //Validimi i name

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $text = "Please enter your name";
            $words = preg_split($nameValidation, $text);


            if (empty($this->name)) {
                foreach($words as $word){
                    $errors['nameError'] =$errors['nameError'].$word;
                }
            } else if (!preg_match($nameValidation, $this->name)) {
                $errors['nameError'] = 'Name can only contain letters and numbers.';
            } else if (strlen($this->name) > 10) {
                $errors['nameError'] = 'Name cannot be longer than 10 characters';
            }


            // validimi i lastname
            if (empty ($this->lastName)) {
                $errors['lastNameError'] = 'Please enter last name.';
            } else if (!preg_match($nameValidation, $this->lastName)) {
                $errors['lastNameError'] = 'Last name can only contain letters and numbers.';
            } else if (strlen($this->lastName) > 10) {
                $errors['lastNameError'] = 'Surname cannot be longer than 10 characters';
            }

            // birthday format  validation
            $dateValidation = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";

            if (preg_match($dateValidation, $this->date)) {
                $errors['dateError'] = "";
            } else {
                $errors['dateError'] = "Your birthday is not in valid format.";
            }


            // Validimi i Report type
            if (empty($this->report)) {
                $errors['reportError'] = "Report type is required";
            } else {
                $errors['reportError'] = "";
            }


            // Address validation

            if (empty ($this->address)) {
                $errors['addressError'] = 'Please enter address';
            } else if (!preg_match($nameValidation, $this->address)) {
                $errors['addressError'] = 'Address can only contain letters and numbers.';
            } else if (strlen($this->address) > 30) {
                $errors['addressError'] = 'Address cannot be longer than 30 characters';
            }




            $this->setErrors($errors);




        }
    }


}


