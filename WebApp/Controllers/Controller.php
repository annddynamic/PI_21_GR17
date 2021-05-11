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
    public function isEmpty($data, $error, $string){
        if(empty($data)){
            $error = "Please enter ".$string;
            return $error;
        }
    }

    public function getImgPath(){

        $image = $_FILES['foto'];

        if ($image && $image['tmp_name']) {
            $imgPath = '../Assets/DB-IMGS/' . $this->randomString(9) . '/' . $image['name'];
            mkdir(dirname($imgPath));
            move_uploaded_file($image['tmp_name'], $imgPath);
        }

        return $imgPath;

    }

    public  function mkdir($path){
        if (!is_dir("$path")) {
            mkdir("$path");
        }
    }

    public function foto($error){

        if ($_FILES['foto']['name'] == "") {
            $error = 'Please add an image';
            return $error;
        }
    }


    public function randomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }
        return $str;
    }

    public function emptyErrors(...$errors){
        foreach ($errors as $error){
            if (!is_null($error)) return false;
        }
        return  true;
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