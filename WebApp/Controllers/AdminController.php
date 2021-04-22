<?php

class AdminController extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->Model('AdminModel');
    }

    public function getUsers()
    {
        $users = $this->adminModel->getUsers();
        return $users;
    }

    public function countUsers()
    {
        $users = $this->adminModel->countUsers();
        return $users;
    }

    public function countPoliceUsers()
    {
        $users = $this->adminModel->countPoliceUsers();
        return $users;
    }

    public function countReport()
    {
        $users = $this->adminModel->countReport();
        return $users;
    }

    public function pendingApproval()
    {
        $users = $this->adminModel->pendingApproval();
        return $users;


    }

    public function getData()
    {
        $data = [
            'users' => $this->getUsers(),
            'count' => $this->countUsers(),
            'reportCount' => $this->countReport(),
            'pendingApproval' => $this->pendingApproval(),
            'countPoliceUsers' => $this->countPoliceUsers()
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


            if(isset($_POST['delete'])){
                $data=[
                    'uID'=>$_POST['remove'],
                ];

                if ($this->adminModel->deletePolice($data)) {

                    header('location:police');
                } else {
                    die('Something went wrong. ');
                }

            }else {
                $data=[
                    'uID'=>$_POST['insert'],
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




}