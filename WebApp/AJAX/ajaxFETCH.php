<?php

require_once('../Models/AdminModel.php');
require_once("../Models/Database.php");

$model = new AdminModel();

$users = $model->getUserByName();

$q="";

if (isset($_REQUEST["q"])) {
    $q = $_REQUEST["q"];
}

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($users as $user) {
        if (stristr($q, substr($user['name'], 0, $len))) {
            if ($hint === "") {
                $hint = $user['name'];
            } else {
                $name=$user['name'];
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : "Suggestion: ".$hint;







