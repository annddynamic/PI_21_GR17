<?php

require_once('../Models/AdminModel.php');
require_once("../Models/Database.php");

$model = new AdminModel();

    $data = [
        'uID' => '',
        'name' => '',
        'address' => '',
        'telephone'=>''
    ];

    if(isset($_POST)){

        $data = [
            'uID' => trim($_POST['idUpdata']),
            'name' => trim($_POST['name']),
            'lastName' => trim($_POST['lastName']),
            'telephone' => trim($_POST['telephone']),
            'address' => trim($_POST['address'])
        ];

        if($model->editUser($data)){
            echo 'SUCCESS!';
        }else {
            die("Something went wrong");
        }
    }