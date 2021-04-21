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

    public function getData()
    {
        $data = [
            'users'=>$this->getUsers(),
            'count'=>$this->countUsers()
        ];
        return $data;
    }


}