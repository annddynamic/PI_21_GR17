<?php


class ReportsController extends Reports
{

    public function __construct()
    {
        $this->reportModel = $this->Model('ReportModel');
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


            if (empty($this->getName())) {
                foreach($words as $word){
                    $errors['nameError'] =$errors['nameError'].$word;
                }
            } else if (!preg_match($nameValidation, $this->getName())) {
                $errors['nameError'] = 'Name can only contain letters and numbers.';
            } else if (strlen($this->getName()) > 10) {
                $errors['nameError'] = 'Name cannot be longer than 10 characters';
            }


            // validimi i lastname
            if (empty ($this->getLastName())) {
                $errors['lastNameError'] = 'Please enter last name.';
            } else if (!preg_match($nameValidation, $this->getLastName())) {
                $errors['lastNameError'] = 'Last name can only contain letters and numbers.';
            } else if (strlen($this->getLastName()) > 10) {
                $errors['lastNameError'] = 'Surname cannot be longer than 10 characters';
            }

            // birthday format  validation
            $dateValidation = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";

            if (preg_match($dateValidation, $this->getDate())) {
                $errors['dateError'] = "";
            } else {
                $errors['dateError'] = "Your birthday is not in valid format.";
            }


            // Validimi i Report type
            if (empty($this->getReport())) {
                $errors['reportError'] = "Report type is required";
            } else {
                $errors['reportError'] = "";
            }


            // Address validation

            if (empty ($this->getAddress())) {
                $errors['addressError'] = 'Please enter address';
            } else if (!preg_match($nameValidation, $this->getAddress())) {
                $errors['addressError'] = 'Address can only contain letters and numbers.';
            } else if (strlen($this->getAddress()) > 30) {
                $errors['addressError'] = 'Address cannot be longer than 30 characters';
            }


            // City validation

            if (empty ($this->getCity())) {
                $errors['cityError'] = 'Please enter city';
            }

            $this->setErrors($errors);

            if (
                empty($errors['nameError']) && empty($errors['lastNameError']) &&
                empty($errors['reportError']) && empty($errors['addressError']) &&
                empty($errors['cityError']) && empty($errors['textfieldError']) &&
                empty($errors['dateError']) && empty($errors['fileError'])) {


                // Adding class properties to array

                $data =[
                  'address'=>$this->getAddress(),
                  'city'=>$this->getCity(),
                  'name'=>$this->getName(),
                  'lastName'=>$this->getLastName(),
                  'textField'=>$this->getTextfield(),
                  'date'=>$this->getDate(),
                  'file'=>$this->getFile(),
                  'report'=>$this->getReport(),
                  'sID'=>$this->getSID(),
                  'cID'=>$this->getCategoryID()

                ];


                if ($this->reportModel->addReport($data)) {

                    // Redirect to the login page

                    header('location:index.php');
                } else {
                    die('Something went wrong. ');
                }
            }



        }
    }

}