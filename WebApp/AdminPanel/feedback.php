<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Feedback</title>

    <!-- Bootstrap core CSS -->
    <link href="../Asets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


</head>
<?php
include "navbar.php";
?>

<header id ="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class ="glyphicon glyphicon-cog" aria-hidden=""true> </span>Dashboard <small>Manage Your Site</small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Manage
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a type = "button" data-toggle="modal" data-target="#addUser">Add User</a></li>
                        <li><a href="#">Review Requests</a></li>
                        <li><a href="#">Manage Reports</a></li>
                        <li><a href="#">Add Article</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

