<?php

 session_start();

    if($_GET['url']== 'index') {
        session_destroy();

        unset($_SESSION['user_id']);
        unset($_SESSION['name']);
        unset($_SESSION['role']);
        unset($_SESSION['email']);

    }
// function isLoggedIn(){
//        if(isset($_SESSION['user_id'])){
//            return true;
//        }else {
//            return false;
//        }
// }


