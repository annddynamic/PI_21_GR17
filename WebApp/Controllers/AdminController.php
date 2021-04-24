<?php

class AdminController extends Controller
{
    private $obj;

    public function __construct()
    {
        $this->adminModel = $this->Model('AdminModel');
        $this->obj = new ReportsController();

    }

    public function getData()
    {
        $data = [
            'users' => $this->adminModel->getUsers(),
            'count' => $this->adminModel->countUsers(),
            'reportCount' => $this->adminModel->countReport(),
            'countNews'=>$this->adminModel->countNews(),
            'pendingApproval' => $this->adminModel->pendingApproval(),
            'countPoliceUsers' => $this->adminModel->countPoliceUsers(),
            'policeOfficials' => $this->adminModel->policeOfficials(),
            'onDuty'=>$this->adminModel->getOnDuty(),
            'available'=>$this->adminModel->getAvailable(),
            'emergency'=>$this->adminModel->getEmergencyReports(),
            'random'=>$this->adminModel->getReports(),
            'getNews'=>$this->adminModel->getNews(),

        ];
        return $data;
    }

    public function managePolice()
    {
        $data = [
            'uID' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            if (isset($_POST['delete'])) {
                $data = [
                    'uID' => $_POST['remove'],
                ];

                if ($this->adminModel->deletePolice($data)) {

                    header('location:police');
                } else {
                    die('Something went wrong. ');
                }

            } else {
                $data = [
                    'uID' => $_POST['insert'],
                ];

                if ($this->adminModel->addPolice($data)) {

                    header('location:police');
                } else {
                    die('Something went wrong. ');
                }

            }

        }
        return $data;
    }

    public function deletePoliceUser()
    {


        $data = [
            'uID' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            if (isset($_POST['delete'])) {
                $data = [
                    'uID' => $_POST['remove'],
                ];

                if ($this->adminModel->deletePoliceUser($data)) {

                    header('location:police');
                } else {
                    die('Something went wrong. ');
                }

            }


        }
        return $data;
    }

    public function editPoliceUser()
    {

        $data = [
            'uID' => '',
            'lastName' => '',
            'address' => '',
            'telephone'
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'uID' => trim($_POST['idUpdata']),
                'lastName' => trim($_POST['lastName']),
                'address' => trim($_POST['address']),
                'telephone' => trim($_POST['telephone'])
            ];

            echo '<pre>';
            var_dump($data);
            echo '</pre>';


        }

        return $data;

    }

    public function addNews()
    {
        $data = [
            'title' => '',
            'published' => '',
            'description' => '',
            'titleError' => '',
            'publishedError' => '',
            'descriptionError' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'published' => date('Y-m-d H:i:s'),
                'description' => trim($_POST['description']),
                'titleError' => '',
                'publishedError' => '',
                'descriptionError' => '',


            ];

            //Validimi i title
            $onlyLettersAndNumbers = "/^[a-zA-Z0-9]*$/";

            if (empty ($data['title'])) {
                $data['titleError'] = 'Please enter title.';
            } else if (!preg_match($onlyLettersAndNumbers, $data['lastName'])) {
                $data['title'] = 'Title name can only contain letters and numbers.';
            } else if (strlen($data['title']) > 10 || strlen($data['title']) <= 0) {
                $data['titleError'] = 'Last name cannot be empty or null';
            }


            //Validimi i fotos

            if (!is_dir('../Assets/DB-IMGS')) {
                mkdir('../Assets/DB-IMGS');
            }

            $image=$_FILES['foto'];



            if ($image && $image['tmp_name']) {
               $imgPath =  '../Assets/DB-IMGS/' . $this->obj->randomString(9) . '/' . $image['name'];
                mkdir(dirname($imgPath));
                move_uploaded_file($image['tmp_name'], $imgPath);
            }

            $data['foto']=$imgPath;



            if ($this->adminModel->addNews($data)) {
                header('location:articles');
            } else {
                die('Something went wrong !!');
            }
        }
        return $data;



    }


}