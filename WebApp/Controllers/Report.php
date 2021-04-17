<?php


class Report extends Controller {

    public function __construct()
    {
        $this->userModel=$this->model('UserModel');
    }

    public function showUsers(){
        $users=$this->userModel->getUsers();
        echo '<pre>';
        var_dump($users);
        echo '</pre>';
    }

}


