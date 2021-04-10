
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Users</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" type="image/jpg" href="../Asets/img/fav.png"/>
    <link href="../Asets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Asets/css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="../Asets/img/fav.png"/>
    <style>

        .search-box {
            position: absolute;
            top: 1.5em;
            left: 0em;
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
                        <h1><span class ="glyphicon glyphicon-user" aria-hidden=""true> </span> Police Officials </h1>

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
                            <a href="police.php" class="list-group-item main-color-bg active"><span class ="glyphicon glyphicon-user" aria-hidden="" true> </span>   Users<span class="badge">12</span></a>
                            <a href="reports.php" class="list-group-item"><span class ="glyphicon glyphicon-list-alt" aria-hidden="" true> </span>   Reports<span class="badge">12</span></a>
                            <a href="articles.php" class="list-group-item"><span class ="glyphicon glyphicon-book" aria-hidden="" true> </span>   Articles<span class="badge">12</span></a>
                            <a href="feedback.php" class="list-group-item"><span class ="glyphicon glyphicon-pencil" aria-hidden="" true> </span>   Feedback<span class="badge">12</span></a>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Additional information</b></h3>
                            </div>
                            <div class="panel-body">
                                <div class="well dash-box">
                                    <h2><img height="50"  src="../../../Asets/img/policeman.png">12</h2>
                                    <h4>Police Officials</h4>
                                </div>
                                <br>
                                <ul class="list-group">
                                    <li  class="list-group-item" style="background:#f4f4f4;">
                                        <b>Top 3</b>
                                    </li>
                                    <li class="list-group-item">
                                        Andi
                                    </li>
                                    <li class="list-group-item">
                                        Andi
                                    </li>
                                    <li class="list-group-item">
                                        Andi
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Police Officials</b></h3>
                            </div>
                            <div class="panel-body myPanel">
                                <table class="table  table-hover tbl" >
                                    <tr>
                                        <th class="main-color-bg">Name</th>
                                        <th class="main-color-bg">Last Name</th>
                                        <th class="main-color-bg">Address</th>
                                        <th class="main-color-bg">Telephone</th>
                                        <th class="main-color-bg"></th>
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
                                        <td>Jill Smith</td>
                                        <td>Andi Dika</td>
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
                        <div class="col-md-6 myPanel">
                            <table class="table  table-hover tbl" id="costum">
                                <tr>
                                    <th class="main-color-bg">On Duty</th>
                                    <th class="main-color-bg">Available</th>
                                </tr>
                                <tr>
                                    <td>Jill Smith</td>
                                    <td>Jill Smith</td>
                                </tr>
                                <tr>
                                    <td>Jill Smith</td>
                                    <td>Jill Smith</td>
                                </tr>
                                <tr>
                                    <td>Jill Smith</td>
                                    <td>Andi Dika</td>
                                </tr>
                                <tr>
                                    <td>Jill Smith</td>
                                    <td>Andi Dika</td>
                                </tr>
                                <tr>
                                    <td>Jill Smith</td>
                                    <td>Andi Dika</td>
                                </tr>
                                <tr>
                                    <td>Andi Dika</td>
                                    <td>Andi Dika</td>
                                </tr>
                                <tr>
                                    <td>Andi Dika</td>
                                    <td>Andi Dika</td>
                                </tr>
                                <tr>
                                    <td>Andi Dika</td>
                                    <td>Andi Dika</td>
                                </tr>
                            </table>
                        </div>

                        <ul class="col-md-6 list-group myPanel important">
                            <li  class="sticky list-group-item active main-color-bg">
                                Pending Approval
                            </li>
                            <li class="list-group-item">
                                Dapibus ac facilisis in

                                <button type="button" class="pull-right btn btn-danger" data-toggle="modal" data-target="#approveUser">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button type="button" style="margin-left:115px;" class=" btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </li>
                            <li class="list-group-item">
                                Dapibus ac facilisis in
                                <button type="button" class="pull-right btn btn-danger" data-toggle="modal" data-target="#approveUser">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button type="button" style="margin-left:115px;" class=" btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </li>
                            <li class="list-group-item">
                                Dapibus ac facilisis in
                                <button type="button" class="pull-right btn btn-danger" data-toggle="modal" data-target="#approveUser">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button type="button" style="margin-left:115px;" class=" btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </li>
                            <li class="list-group-item">
                                Dapibus ac facilisis in
                                <button type="button" class="pull-right btn btn-danger" data-toggle="modal" data-target="#approveUser">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button type="button" style="margin-left:115px;" class=" btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </li>
                            <li class="list-group-item">
                                Dapibus ac facilisis in
                                <button type="button" class="pull-right btn btn-danger" data-toggle="modal" data-target="#approveUser">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button type="button" style="margin-left:115px;" class=" btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </li>
                        </ul>
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