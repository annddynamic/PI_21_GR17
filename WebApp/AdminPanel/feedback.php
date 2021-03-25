<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="../Asets/img/fav.png"/>



    <title>Feedback</title>

    <!-- Bootstrap core CSS -->
    <link href="../Asets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


</head>
<?php
include "navbar.php";
?>
    <body>

        <header id ="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1><span class ="glyphicon glyphicon-pencil" aria-hidden=""true> </span> Feedback <small>View Feedback</small></h1>
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
                                <li><a class="emergenciesButton" href="#">Add Article</a></li>
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
                            <a href="adminPanel.php" class="list-group-item " ><span class ="glyphicon glyphicon-cog" aria-hidden=""true> </span>
                                Dashboard
                            </a>
                            <a href="police.php" class="list-group-item "><span class ="glyphicon glyphicon-user" aria-hidden="" true> </span>   Users<span class="badge">12</span></a>
                            <a href="reports.php" class="list-group-item"><span class ="glyphicon glyphicon-list-alt" aria-hidden=""true> </span>   Reports<span class="badge">12</span></a>
                            <a href="articles.php" class="list-group-item "><span class ="glyphicon glyphicon-book" aria-hidden=""true> </span>   Articles<span class="badge">12</span></a>
                            <a href="feedback.php" class="list-group-item active main-color-bg"><span class ="glyphicon glyphicon-pencil" aria-hidden=""true> </span>   Feedback<span class="badge">12</span></a>
                        </div>


                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading main-color-bg">
                                <h3 class="panel-title">All feedback</h3>
                            </div>
                            <div class="panel-body">

                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>From</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Received</th>
                                        <th></th>
                                    </tr>

                                    <tr>
                                        <td>Andi</td>
                                        <td>eeee</td>
                                        <td>lorem10Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, reprehenderit!</td>
                                        <td>Dec 12, 2016</td>
                                        <td><a class="btn btn-primary center-block" href="#">Delete</a> </td>
                                    </tr>


                                    <tr>
                                        <td>Andi</td>
                                        <td>Andi</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, reprehenderit!</td>
                                        <td>Dec 13, 2016</td>
                                        <td><a class="btn btn-primary center-block" href="#">Delete</a> </td>
                                    </tr>

                                    <tr>
                                        <td>Andi</td>
                                        <td>Andi</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, reprehenderit!</td>
                                        <td>Dec 14, 2016</td>
                                        <td><a class="btn btn-primary center-block" href="#">Delete</a> </td>
                                    </tr>

                                    <tr>
                                        <td>Andi</td>
                                        <td>Andi</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, reprehenderit!</td>
                                        <td>Dec 13, 2016</td>
                                        <td><a class="btn btn-primary center-block" href="#">Delete</a> </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- FOOOTER-->

        <footer id="footer">
            <p>Copyright Adminstrap, &copy; 2021</p>
        </footer>

        <?php
        include "modals.php";
        ?>

    </body>
