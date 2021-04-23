<?php


class ReportsController extends Reports
{
    public function __construct()
    {
        $this->reportModel = $this->Model('ReportModel');
    }

    public function createReport()
    {
        $errors = [
            'nameError' => '',
            'lastNameError' => '',
            'reportError' => '',
            'addressError' => '',
            'cityError' => '',
            'textfieldError' => '',
            'dateError' => '',
            'fileError' => ''
        ];

        $this->setErrors($errors);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $this->setName(trim($_POST['name']));
            $this->setLastName(trim($_POST['lastName']));
            $this->setReport(trim($_POST['report']));
            $this->setFile($_FILES['file']);
            $this->setTextfield(trim($_POST['textfield']));
            $this->setDate(trim($_POST['date']));
            $this->setCity(trim($_POST['city']));
            $this->setAddress(trim($_POST['address']));


            //Validimi i name


            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $text = "Please enter your name";
            $words = preg_split($nameValidation, $text);


            if (empty($this->getName())) {
                foreach ($words as $word) {
                    $errors['nameError'] = $errors['nameError'] . $word;
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
            } else if (strlen($this->getAddress()) > 30) {
                $errors['addressError'] = 'Address cannot be longer than 30 characters';
            }

            // City validation

            if (empty ($this->getCity())) {
                $errors['cityError'] = 'Please enter city';
            }

            if (!is_dir('../Assets/DB-IMGS')) {
                mkdir('../Assets/DB-IMGS');
            }


            $image = $this->getFile();
            if ($image && $image['tmp_name']) {

                $this->setImgPath('../Assets/DB-IMGS/' . $this->randomString(9) . '/' . $image['name']);

                $imgPath = $this->getImgPath();

                mkdir(dirname($imgPath));

                move_uploaded_file($image['tmp_name'], $imgPath);
            }


            $this->setErrors($errors);

            if ($this->getReport() == 'abuse') {
                $this->setCategoryID(1);
            } else if ($this->getReport() == 'suicide') {
                $this->setCategoryID(2);
            } else if ($this->getReport() == 'murder') {
                $this->setCategoryID(3);
            } else if ($this->getReport() == 'robbery') {
                $this->setCategoryID(4);
            } else if ($this->getReport() == 'arson') {
                $this->setCategoryID(5);
            } else if ($this->getReport() == 'breakIn') {
                $this->setCategoryID(6);
            } else if ($this->getReport() == 'corruption') {
                $this->setCategoryID(7);
            } else {
                $this->setCategoryID(8);
            }

            // Photo


            if (
                empty($errors['nameError']) && empty($errors['lastNameError']) &&
                empty($errors['reportError']) && empty($errors['addressError']) &&
                empty($errors['cityError']) && empty($errors['textfieldError']) &&
                empty($errors['dateError']) && empty($errors['fileError'])) {


                // Adding class properties to array

                $data = $this->getData();

                if ($this->reportModel->addReport($data)) {

                    // Redirect to the login page

                    header('location:index.php');
                } else {
                    die('Something went wrong. ');
                }
            }


        }
    }

    public function getData()
    {
        $data = [
            'name' => $this->getName(),
            'lastName' => $this->getLastName(),
            'textField' => $this->getTextfield(),
            'file' => $this->getImgPath(),
            'date' => $this->getDate(),
            'address' => $this->getAddress(),
            'city' => $this->getCity(),
            'sID' => $this->getsID(),
            'cID' => $this->getCategoryID(),

        ];

        return $data;
    }

    public function randomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }
        return $str;
    }

}