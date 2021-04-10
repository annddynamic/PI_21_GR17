
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Reports</title>

    <!-- Bootstrap core CSS -->
    <link href="../Asets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="../Asets/img/fav.png"/>

    <link rel="stylesheet" href="../Asets/css/style.css">

    <style>

        .search-box {
            position: absolute;
            top: 1.5em;
            left: -7em;
            background: white;
            height: 40px;
            border-radius: 40px;
            padding: 10px;
        }

        .search-btn {
            font-size: 19px;
            color: #011f4b;
        }

        .search-text {
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color: black;
            font-size: 16px;
            transition: 0.5s;
            line-height: 20px;
            width: 0px;
        }

        .search-box:hover > .search-text {
            width: 200px;
            padding: 0 6px;

        }

    </style>

</head>

<?php
include "navbar.php";
?>

    <body>
        <header id ="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="col-md-4">
                            <h1><span class ="glyphicon glyphicon-list-alt" aria-hidden=""true> </span> Reports </h1>

                        </div>
                        <div class="col-md-8 ">

                            <div class="search-box">

                                <input class="search-text" type="text" name="" placeholder="Type to search">
                                <a class="search-btn" href="#">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>

                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-2">
                        <div class="dropdown create">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Manage
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#addUser">Add User</a></li>
                                <li><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#reviewReq">Review Requests</a></li>
                                <li><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#addArticle">Add Article</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="main">
            <div class ="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="adminPanel.php" class="list-group-item  " ><span class ="glyphicon glyphicon-cog" aria-hidden="" true> </span>
                                Dashboard
                            </a>
                            <a href="police" class="list-group-item"><span class ="glyphicon glyphicon-user" aria-hidden="" true> </span>       Users<span class="badge">12</span></a>
                            <a href="reports" class="list-group-item main-color-bg active"><span class ="glyphicon glyphicon-list-alt" aria-hidden="" true> </span>    Reports<span class="badge">12</span></a>
                            <a href="articles" class="list-group-item"><span class ="glyphicon glyphicon-book" aria-hidden="" true> </span>    Articles<span class="badge">12</span></a>
                            <a href="feedback" class="list-group-item"><span class ="glyphicon glyphicon-pencil" aria-hidden="" true> </span>    Feedback<span class="badge">12</span></a>
                        </div>



                        <div class="well">
                            <h4>Reports resolved</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                            <h4>Reports this week</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    40%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>EMERGENCY REPORTS</b></h3>
                            </div>
                            <div class="panel-body myPanel">
                                <table class="table  table-hover tbl" id="emergency">
                                    <tr>
                                        <th class="main-color-bg">Name</th>
                                        <th class="main-color-bg">Date</th>
                                        <th class="main-color-bg">Status</th>
                                        <th class="main-color-bg">In Charge</th>
                                        <th class="main-color-bg"></th>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td>
                                            <button class="btn main-color-bg" type = "button" data-toggle="modal" data-target="#editUser">Edit</button>
                                            <button class="btn btn-danger" type = "button" data-toggle="modal" data-target="#deleteUser">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td>
                                            <button class="btn main-color-bg" type = "button" data-toggle="modal" data-target="#editUser">Edit</button>
                                            <button class="btn btn-danger" type = "button" data-toggle="modal" data-target="#deleteUser">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Andi Dika</td>
                                        <td>Andi Dika</td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td>
                                            Andi Dika

                                        </td>
                                        <td>
                                            <button class="btn main-color-bg" type = "button" data-toggle="modal" data-target="#editUser">Edit</button>
                                            <button class="btn btn-danger" type = "button" data-toggle="modal" data-target="#deleteUser">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Andi Dika</td>
                                        <td>Andi Dika</td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td>
                                            Andi Dika

                                        </td>
                                        <td>
                                            <button class="btn main-color-bg" type = "button" data-toggle="modal" data-target="#editUser">Edit</button>
                                            <button class="btn btn-danger" type = "button" data-toggle="modal" data-target="#deleteUser">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Adnit King kobra </td>
                                        <td>Adnit King kobra </td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td>
                                            Adnit King kobra

                                        </td>
                                        <td>
                                            <button class="btn main-color-bg" type = "button" data-toggle="modal" data-target="#editUser">Edit</button>
                                            <button class="btn btn-danger" type = "button" data-toggle="modal" data-target="#deleteUser">Delete</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>RANDOM REPORTS</b></h3>
                            </div>
                            <div class="panel-body myPanel">
                                <table class="table  table-hover tbl" id="random">
                                    <tr>
                                        <th class="main-color-bg">Name</th>
                                        <th class="main-color-bg">Date</th>
                                        <th class="main-color-bg">Status</th>
                                        <th class="main-color-bg">In Charge</th>
                                        <th class="main-color-bg"></th>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td>
                                            <button class="btn main-color-bg" type = "button" data-toggle="modal" data-target="#editUser">Edit</button>
                                            <button class="btn btn-danger" type = "button" data-toggle="modal" data-target="#deleteUser">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td>
                                            Jill Smith
                                        </td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td>
                                            <button class="btn main-color-bg" type = "button" data-toggle="modal" data-target="#editUser">Edit</button>
                                            <button class="btn btn-danger" type = "button" data-toggle="modal" data-target="#deleteUser">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Andi Dika</td>
                                        <td>Andi Dika</td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td>
                                            Andi Dika
                                        </td>
                                        <td>
                                            <button class="btn main-color-bg" type = "button" data-toggle="modal" data-target="#editUser">Edit</button>
                                            <button class="btn btn-danger" type = "button" data-toggle="modal" data-target="#deleteUser">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Andi Dika</td>
                                        <td>Andi Dika</td>
                                        <td>
                                            Jill Smith
                                        </td>
                                        <td>
                                            Andi Dika

                                        </td>
                                        <td>
                                            <button class="btn main-color-bg" type = "button" data-toggle="modal" data-target="#editUser">Edit</button>
                                            <button class="btn btn-danger" type = "button" data-toggle="modal" data-target="#deleteUser">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Adnit King kobra </td>
                                        <td>Adnit King kobra </td>
                                        <td>
                                            Jill Smith
                                        </td>
                                        <td>
                                            Adnit King kobra

                                        </td>
                                        <td>
                                            <button class="btn main-color-bg" type = "button" data-toggle="modal" data-target="#editUser">Edit</button>
                                            <button class="btn btn-danger" type = "button" data-toggle="modal" data-target="#deleteUser">Delete</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <pr>Copyright Adminstrap, &copy; 2021</pr>
        </footer>

        <?php
        include "modals.php";
        ?>

    </body>
</html>