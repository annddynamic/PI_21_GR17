<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="../Asets/img/fav.png"/>

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css"
          integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css"
          integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <style>

        .search-box {
            position: absolute;
            top: 1.5em;
            left: -5em;
            background: #b3cde0;
            height: 40px;
            border-radius: 40px;
            padding: 10px;
        }

        .search-btn {
            font-size: 19px;
            color: white;
        }

        .search-text {
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color: grey;
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
    <link href="../Asets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>


<?php

include "navbar.php";

?>
<body>


<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="col-md-4">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="" true> </span>Dashboard </h1>
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
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Manage
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a class="emergenciesButton" type="button" data-toggle="modal" data-target="#addUser">Add
                                User</a></li>
                        <li><a class="emergenciesButton" type="button" data-toggle="modal" data-target="#reviewReq">Review
                                Requests</a></li>
                        <li><a class="emergenciesButton" type="button" data-toggle="modal" data-target="#addArticle">Add
                                Article</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="adminPanel.php" class="list-group-item active main-color-bg"><span
                                class="glyphicon glyphicon-cog" aria-hidden="" true> </span>
                        Dashboard
                    </a>
                    <a href="police.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden=""
                                                                       true> </span> Users<span class="badge">12</span></a>
                    <a href="reports.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                                                                        aria-hidden="" true> </span> Reports<span
                                class="badge">12</span></a>
                    <a href="articles.php" class="list-group-item"><span class="glyphicon glyphicon-book" aria-hidden=""
                                                                         true> </span> Articles<span
                                class="badge">12</span></a>
                    <a href="feedback.php" class="list-group-item"><span class="glyphicon glyphicon-pencil"
                                                                         aria-hidden="" true> </span> Feedback<span
                                class="badge">12</span></a>
                </div>

                <div class="well">
                    <h4>Reports resolved</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                             aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                    <h4>Reports this week</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                             aria-valuemax="100" style="width: 40%;">
                            40%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Website Overview</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-user" aria-hidden="" true> </span> 12</h2>
                                <h4>Users</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="" true> </span> 12</h2>
                                <h4>Reports</h4>
                            </div>
                        </div>
                        <div class="col-md-3 dash-box">
                            <div class="well">
                                <h2><span class="glyphicon glyphicon-book" aria-hidden="" true> </span> 12</h2>
                                <h4>Articles</h4>
                            </div>
                        </div>
                        <div class="col-md-3 dash-box">
                            <div class="well">
                                <h2><span class="glyphicon glyphicon-pencil" aria-hidden="" true> </span> 12</h2>
                                <h4>Feedback</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Latest Users</h3>
                    </div>
                    <div class="panel-body myPanel">
                        <table class="table  table-hover tbl">
                            <tr>
                                <th class="main-color-bg">Name</th>
                                <th class="main-color-bg">Last Name</th>
                                <th class="main-color-bg">Gender</th>
                                <th class="main-color-bg">Dob</th>
                                <th class="main-color-bg">Address</th>
                                <th class="main-color-bg">Email</th>
                                <th class="main-color-bg">Role</th>
                            </tr>
                            <tr>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                            </tr>
                            <tr>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                            </tr>
                            <tr>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                            </tr>
                            <tr>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                            </tr>
                            <tr>
                                <td>Adnit King kobra</td>
                                <td>Adnit King kobra</td>
                                <td>Adnit King kobra</td>
                                <td>Adnit King kobra</td>
                                <td>Adnit King kobra</td>
                                <td>Adnit King kobra</td>
                                <td>Adnit King kobra</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <p>Copyright Adminstrap, &copy; 2021</p>
</footer>

<?php
include "modals.php";
?>

</body>
</html>