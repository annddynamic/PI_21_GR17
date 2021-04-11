<?php


class SignIn extends Controller{

    public function __construct(){
        $this->userModel=$this->model('signIn');
    }

    public function login(){
        $data =[
            'title'=>'Login page'
        ];

        $this->view('users/login', $data);
    }

}