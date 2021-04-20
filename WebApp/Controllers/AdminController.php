<?php
class AdminController extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->Model('AdminModel');
    }

    public function index(){
        $users = $this->adminModel->getUsers();

//            $data = [
//                'users' => $users
//            ];

            return $users;

    }

}