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
            'countPoliceUsers' => $this->countPoliceUsers(),
            'deleteData'=>$this->deleteData(),
        ];
        return $data;
    }


    public function deleteData()
    {
        $data = [
            'uID' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data=[
                'uID'=>$_POST['uID'],
            ];
        }
        return $data;
    }


}