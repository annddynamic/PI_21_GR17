<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="../Asets/img/fav.png"/>


    <title>Articles</title>

    <!-- Bootstrap core CSS -->
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
                        <h1><span class="glyphicon glyphicon-book" aria-hidden="" true> </span> Articles <small>Manage
                                Articles</small></h1>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown create">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="adminPanel.php" class="list-group-item  " ><span class ="glyphicon glyphicon-cog" aria-hidden=""true> </span>
                                Dashboard
                            </a>
                            <a href="police.php" class="list-group-item main-color-bg active"><span class ="glyphicon glyphicon-user" aria-hidden="" true> </span>   Users<span class="badge">12</span></a>
                            <a href="reports.php" class="list-group-item"><span class ="glyphicon glyphicon-list-alt" aria-hidden=""true> </span>   Reports<span class="badge">12</span></a>
                            <a href="articles.php" class="list-group-item"><span class ="glyphicon glyphicon-book" aria-hidden=""true> </span>   Articles<span class="badge">12</span></a>
                            <a href="feedback.php" class="list-group-item"><span class ="glyphicon glyphicon-pencil" aria-hidden=""true> </span>   Feedback<span class="badge">12</span></a>
                        </div>
                        <div>
                                <table class="table  table-hover tbl" id="costum">
                                    <tr>
                                        <th class="main-color-bg">Title</th>
                                        <th class="main-color-bg">Published</th>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>3/25/2021</td>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>3/25/2021</td>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>3/25/2021</td>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>3/25/2021</td>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>3/25/2021</td>
                                    </tr>
                                </table>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="main-color-bg panel-heading">
                                <h3 class="panel-title">Add content to your Page</h3>
                            </div>
                            <div class="panel-body">
                                <form>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="picture">Select your image<small> image list</small></label>
                                            <select onchange="changePic(event)" id="characters" class="form-control">
                                                <option class="fotot">Violence</option>
                                                <option class="fotot">Corruption</option>
                                                <option class="fotot">Robbery</option>
                                                <option class="fotot">Report</option>
                                            </select>
                                        </div>
                                        <div class="foto" style="border: 1px solid lightgray">
                                            <img id="foto" height="264" src="../Asets/img/vioence.png" class="center-block" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Add Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control textarea" placeholder="Add Message"> </textarea>
                                        </div>
                                    </div>
                                    <div>
                                        <input style="margin-top:2em; margin-left: 1em;" type="submit" class="btn btn-lg main-color-bg" value="Add">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div style="height: 250px"></div>
        <footer id="footer">
            <p>Copyright Adminstrap, &copy; 2021</p>
        </footer>

        <script>
            let fotoja =document.getElementById("foto");
            main_path = "../Asets/img/"
            fotot = ["vioence", "corruption", "robbery", "report"]

            function changePic(e) {
                fotoja.src= main_path + fotot[e.target.options.selectedIndex] + ".png";
            }

        </script>

    <?php include "modals.php" ?>

    </body>

</html>
