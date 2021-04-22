<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>



    <title>Feedback</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/style.css">

    <style>

        .search-box {
            position: absolute;
            top: 1.5em;
            left: -4em;
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
if (isset($data)) {
}
?>
    <body>

        <header id ="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="col-md-4">
                            <h1><span class ="glyphicon glyphicon-pencil" aria-hidden=""true> </span> Feedback </h1>

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
                            <a href="adminPanel" class="list-group-item " ><span class ="glyphicon glyphicon-cog" aria-hidden="" true> </span>
                                Dashboard
                            </a>
                            <a href="police" class="list-group-item "><span class ="glyphicon glyphicon-user" aria-hidden="" true> </span>   Users<span class="badge"><?php echo $data['count'][0]['COUNT(name)'] ?></span></a>
                            <a href="reports" class="list-group-item"><span class ="glyphicon glyphicon-list-alt" aria-hidden="" true> </span>   Reports<span class="badge"><?php echo $data['reportCount'][0]['COUNT(emri)'] ?></span></a>
                            <a href="articles" class="list-group-item "><span class ="glyphicon glyphicon-book" aria-hidden="" true> </span>   Articles<span class="badge">12</span></a>
                            <a href="feedback" class="list-group-item active main-color-bg"><span class ="glyphicon glyphicon-pencil" aria-hidden="" true> </span>   Feedback<span class="badge">12</span></a>
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
</html>
