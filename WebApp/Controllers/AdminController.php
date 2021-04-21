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
        $count = $this->adminModel->countUsers();
        return $count;
    }




}