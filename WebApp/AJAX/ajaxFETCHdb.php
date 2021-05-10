<?php

require_once('../Models/AdminModel.php');
require_once("../Models/Database.php");

$model = new AdminModel();

$users = $model->getAvailable();


echo json_encode($users);