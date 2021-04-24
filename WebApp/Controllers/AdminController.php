<?php

class AdminController extends Controller
{
    private $obj;

    public function __construct()
    {
        $this->adminModel = $this->Model('AdminModel');
        $this->obj = new ReportsController();

    }

//    public function getUsers()
//    {
//        $users = $this->adminModel->getUsers();
//        return $users;
//    }
//
//    public function countUsers()
//    {
//        $users = $this->adminModel->countUsers();
//        return $users;
//    }
//
//    public function countPoliceUsers()
//    {
//        $users = $this->adminModel->countPoliceUsers();
//        return $users;
//    }
//
//    public function countReport()
//    {
//        $users = $this->adminModel->countReport();
//        return $users;
//    }
//
//    public function pendingApproval()
//    {
//        $users = $this->adminModel->pendingApproval();
//        return $users;
//
//
//    }
//
//    public function policeOfficials(){
//        $users = $this->adminModel->policeOfficials();
//        return $users;
//    }

    public function getData()
    {
        $data = [
            'users' => $this->adminModel->getUsers(),
            'count' => $this->adminModel->countUsers(),
            'reportCount' => $this->adminModel->countReport(),
            'pendingApproval' => $this->adminModel->pendingApproval(),
            'countPoliceUsers' => $this->adminModel->countPoliceUsers(),
            'policeOfficials' => $this->adminModel->policeOfficials(),

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
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'published' => date('Y-m-d H:i:s'),
                'description' => trim($_POST['description']),
                'fotoError' => '',
                'titleError' => '',
                'publishedError' => '',
                'descriptionError' => '',


            ];

//            Validimi i fotos

            if (!is_dir('../Assets/DB-IMGS')) {
                mkdir('../Assets/DB-IMGS');
            }

            $image=$_FILES['foto'];
            echo '<pre>';
            var_dump($image);
            echo '</pre>';


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