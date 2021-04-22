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
    public function countReport()
    {
        $users = $this->adminModel->countReport ();
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
            'users'=>$this->getUsers(),
            'count'=>$this->countUsers(),
            'reportCount'=>$this->countReport(),
            'pendingApproval'=>$this->pendingApproval(),
        ];
        return $data;
    }


}