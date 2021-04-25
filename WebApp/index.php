<?php


spl_autoload_register(function ($class_name) {
    if(file_exists('./classes/'.$class_name . '.php')){
        include './classes/'.$class_name . '.php';
    }else if(file_exists('./Controllers/'.$class_name . '.php')){
        include './Controllers/'.$class_name . '.php';
    }else{
        include './Models/'.$class_name.'.php';
    }
});

//require_once ('sessionhelper.php');
require_once('Routes.php');


?>


