<?php


class Controller {
    public static function CreateView($viewName){
        if(file_exists("./Views/AdminPanel/$viewName.php")) {
            require_once "./Views/AdminPanel/$viewName.php";
        }else if(file_exists("./Views/$viewName.php")) {
            require_once "./Views/$viewName.php";
        }else if(file_exists("./Views/PolicePanel/$viewName.php")) {
            require_once "./Views/PolicePanel/$viewName.php";
        }else {
            require_once "./Views/Citizens/$viewName.php";
        }

    }

}