
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Citizens</title>

    <!-- Bootstrap core CSS -->
    <link href="../Asets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<?php
include "navbar.php";
?>
    <body>

        <header id ="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1><span class ="glyphicon glyphicon-user" aria-hidden=""true> </span> Users <small>Manage Citizens</small></h1>
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
                            <a href="police.php" class="list-group-item main-color-bg active"><span class ="glyphicon glyphicon-user" aria-hidden="" true> </span>   Users<span class="badge">12</span></a>
                            <a href="reports.php" class="list-group-item"><span class ="glyphicon glyphicon-list-alt" aria-hidden=""true> </span>   Reports<span class="badge">12</span></a>
                            <a href="articles.php" class="list-group-item"><span class ="glyphicon glyphicon-book" aria-hidden=""true> </span>   Articles<span class="badge">12</span></a>
                            <a href="feedback.php" class="list-group-item"><span class ="glyphicon glyphicon-pencil" aria-hidden=""true> </span>   Feedback<span class="badge">12</span></a>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Edit Users</b></h3>
                            </div>
                            <div class="panel-body">
                                <div class="well dash-box">
                                    <h2><span class ="glyphicon glyphicon-user" aria-hidden=""true> </span> 12</h2>
                                    <h4>Citizens</h4>
                                </div>
                                <button class="btn btn-default  main-color-bg" type="button">Edit</button>
                                <button class="btn btn-default  main-color-bg" type="submit" style="margin-left: 0.6em" >Submit</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Citizen Accounts</b></h3>
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
                                        <td><button class="btn btn-danger">DELETE</button></td>
                                    </tr>
                                    <tr>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td>Jill Smith</td>
                                        <td><button class="btn btn-danger">DELETE</button></td>
                                    </tr>
                                    <tr>
                                        <td>Andi Dika</td>
                                        <td>Andi Dika</td>
                                        <td>Jill Smith</td>
                                        <td>Andi Dika</td>
                                        <td><button class="btn btn-danger">DELETE</button></td>
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
                                        <td><button class="btn btn-danger">DELETE</button></td>
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
                                        <td><button class="btn btn-danger">DELETE</button></td>
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
                                        <td><button class="btn btn-danger">DELETE</button></td>
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
                                        <td><button class="btn btn-danger">DELETE</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Message</b></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <form>
                                        <h4 style="padding-bottom:10px;">
                                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                            Send a message to
                                            <select name="person">
                                                <option value="admin">Adnit (alfa)</option>
                                                <option value="police">Arben Dedaj</option>
                                                <option value="citizen">Andi </option>
                                            </select>
                                        </h4>
                                            <div class="form-group">
                                                <textarea id="textarea"  class="form-control" placeholder="Add Message"> </textarea>
                                            </div>
                                        <button type="submit" class="btn btn-primary main-color-bg">Send</button>
                                    </form>
                                </div>
                                    <ul class="col-md-6 list-group myPanel ">
                                        <h4 class="specialh4">Sent messaages</h4>
                                        <li class="list-group-item">
                                            Dapibus ac facilisis in
                                            <button type="button" class="btn btn-danger" style="margin-left: 11em">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </button>
                                        </li>
                                        <li class="list-group-item">
                                            Dapibus ac facilisis in
                                            <button type="button" class="btn btn-danger" style="margin-left: 11em">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </button>
                                        </li>
                                        <li class="list-group-item">
                                            Dapibus ac facilisis in
                                            <button type="button" class="btn btn-danger" style="margin-left: 11em">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </button>
                                        </li>
                                        <li class="list-group-item">
                                            Dapibus ac facilisis in
                                            <button type="button" class="btn btn-danger" style="margin-left: 11em">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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