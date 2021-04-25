<?php


class Controller extends Database {
    public static function CreateView($viewName, $data=[]){
        if(file_exists("./Views/AdminPanel/$viewName.php")) {
            require_once "./Views/AdminPanel/$viewName.php";
        }else if(file_exists("./Views/$viewName.php")) {
            require_once "./Views/$viewName.php";
        }else if(file_exists("./Views/PolicePanel/$viewName.php")) {
            require_once "./Views/PolicePanel/$viewName.php";
        }else if(file_exists("./Views/Citizens/$viewName.php")){
            require_once "./Views/Citizens/$viewName.php";
        }else if(file_exists("./Views/PolicePanel/$viewName.php")){
            require_once "./Views/PolicePanel/$viewName.php";
        }

    }

    public function model($model){
        require_once './Models/'.$model.'.php';

        return new $model;
    }

    public static function logout(){


        if(isset($_GET['index.php'])) {
            session_destroy();

            unset($_SESSION['user_id']);
            unset($_SESSION['name'] );
            unset($_SESSION['role'] );

            header('location:index.php');
        }

    }

}