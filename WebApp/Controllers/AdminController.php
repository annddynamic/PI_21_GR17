<?php

class AdminController extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->Model('AdminModel');
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

    public function editPoliceUser(){

        $data = [
            'uID' => '',
            'lastName'=>'',
            'address'=>'',
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





}