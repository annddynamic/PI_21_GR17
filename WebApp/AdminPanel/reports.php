
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Reports</title>

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
                        <h1><span class ="glyphicon glyphicon-list-alt" aria-hidden=""true> </span> Reports <small>Manage & Review</small></h1>
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

        <section id="main">
            <div class ="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="adminPanel.php" class="list-group-item  " ><span class ="glyphicon glyphicon-cog" aria-hidden=""true> </span>
                                Dashboard
                            </a>
                            <a href="police.php" class="list-group-item"><span class ="glyphicon glyphicon-user" aria-hidden="" true> </span>       Users<span class="badge">12</span></a>
                            <a href="reports.php" class="list-group-item main-color-bg active"><span class ="glyphicon glyphicon-list-alt" aria-hidden=""true> </span>    Reports<span class="badge">12</span></a>
                            <a href="articles.php" class="list-group-item"><span class ="glyphicon glyphicon-book" aria-hidden=""true> </span>    Articles<span class="badge">12</span></a>
                            <a href="feedback.php" class="list-group-item"><span class ="glyphicon glyphicon-pencil" aria-hidden=""true> </span>    Feedback<span class="badge">12</span></a>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Edit Reports</b></h3>
                            </div>
                            <div class="panel-body">
                                <button class="btn btn-default  main-color-bg" type="button">Edit</button>
                                <button class="btn btn-default  main-color-bg" type="submit" style="margin-left: 0.6em" >Submit</button>


                            </div>
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
                                            <div class="dropdown create pull-right">

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Not Resolved</a></li>
                                                    <li><a href="#">In process</a></li>
                                                    <li><a href="#">Resolved</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td><button class="btn btn-danger">DELETE</button></td>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td>
                                            Jill Smith
                                            <div class="dropdown create pull-right">

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Not Resolved</a></li>
                                                    <li><a href="#">In process</a></li>
                                                    <li><a href="#">Resolved</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td><button class="btn btn-danger">DELETE</button></td>
                                    </tr>
                                    <tr>
                                        <td>Andi Dika</td>
                                        <td>Andi Dika</td>
                                        <td>
                                            Jill Smith
                                            <div class="dropdown create pull-right">

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Not Resolved</a></li>
                                                    <li><a href="#">In process</a></li>
                                                    <li><a href="#">Resolved</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            Andi Dika


                                        </td>
                                        <td><button class="btn btn-danger">DELETE</button></td>
                                    </tr>
                                    <tr>
                                        <td>Andi Dika</td>
                                        <td>Andi Dika</td>
                                        <td>
                                            Jill Smith
                                            <div class="dropdown create pull-right">

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Not Resolved</a></li>
                                                    <li><a href="#">In process</a></li>
                                                    <li><a href="#">Resolved</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            Andi Dika

                                        </td>
                                        <td><button class="btn btn-danger">DELETE</button></td>
                                    </tr>
                                    <tr>
                                        <td>Adnit King kobra </td>
                                        <td>Adnit King kobra </td>
                                        <td>
                                            Jill Smith
                                            <div class="dropdown create pull-right">

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Not Resolved</a></li>
                                                    <li><a href="#">In process</a></li>
                                                    <li><a href="#">Resolved</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            Adnit King kobra

                                        </td>
                                        <td><button class="btn btn-danger">DELETE</button></td>
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
                                            <div class="dropdown create pull-right">

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Not Resolved</a></li>
                                                    <li><a href="#">In process</a></li>
                                                    <li><a href="#">Resolved</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td>
                                            Jill Smith
                                            <div class="dropdown create pull-right">

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Not Resolved</a></li>
                                                    <li><a href="#">In process</a></li>
                                                    <li><a href="#">Resolved</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            Jill Smith

                                        </td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>Andi Dika</td>
                                        <td>Andi Dika</td>
                                        <td>
                                            Jill Smith
                                            <div class="dropdown create pull-right">

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Not Resolved</a></li>
                                                    <li><a href="#">In process</a></li>
                                                    <li><a href="#">Resolved</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            Andi Dika


                                        </td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>Andi Dika</td>
                                        <td>Andi Dika</td>
                                        <td>
                                            Jill Smith
                                            <div class="dropdown create pull-right">

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Not Resolved</a></li>
                                                    <li><a href="#">In process</a></li>
                                                    <li><a href="#">Resolved</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            Andi Dika

                                        </td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>Adnit King kobra </td>
                                        <td>Adnit King kobra </td>
                                        <td>
                                            Jill Smith
                                            <div class="dropdown create pull-right">

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Not Resolved</a></li>
                                                    <li><a href="#">In process</a></li>
                                                    <li><a href="#">Resolved</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            Adnit King kobra

                                        </td>
                                        <td><button class="btn btn-danger">Delete</button></td>
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

        <!--Modals-->
        <!--Add User-->
        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add User</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Last Nme">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">

                                <label for="Gender">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="Date">Date</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" placeholder="Country">
                            </div>
                            <div class="form-group">
                                <label>ZIP</label>
                                <input type="number" class="form-control" placeholder="ZIP">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="Gender">Role</label>
                                <select class="form-control" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="police">Police</option>
                                    <option value="citizen">Citizen</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
