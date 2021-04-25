<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>


    <title>Citizens</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

if (isset($data)) {


}


?>
    <body>

        <header id ="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="col-md-4">
                            <h1><span class ="glyphicon glyphicon-user" aria-hidden=""true> </span> Citizens </h1>

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


                </div>
            </div>
        </header>

        <section id="main">
            <div class ="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="adminPanel" class="list-group-item active main-color-bg"><span
                                        class="glyphicon glyphicon-cog" aria-hidden="" true> </span>
                                Dashboard
                            </a>
                            <a href="police" class="list-group-item">
                                <span class="glyphicon glyphicon-user" aria-hidden="" true></span> Users<span
                                        class="badge"><?php echo $data['count'][0]['COUNT(name)'] ?></span></a>

                            <a href="reports" class="list-group-item">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="" true></span> Reports<span
                                        class="badge"><?php echo $data['reportCount'][0]['COUNT(emri)'] ?></span></a>

                            <a href="articles" class="list-group-item">
                                <span class="glyphicon glyphicon-book" aria-hidden="" true> </span> Articles<span
                                        class="badge"><?php echo $data['countNews'][0]['COUNT(nID)'] ?></span></a>

                            <a href="feedback" class="list-group-item">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="" true> </span> Feedback<span
                                        class="badge">12</span></a>

                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Edit Users</b></h3>
                            </div>
                            <div class="panel-body">
                                <div class="well dash-box">
                                    <h2><span class ="glyphicon glyphicon-user" aria-hidden=""true> </span> <?php echo $data['countCitizens'][0]['COUNT(name)'] ?></h2>
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
                                    <?php foreach ($data['citizens'] as $i => $citizen): ?>

                                        <tr>
                                            <td><?php echo $citizen['name']?></td>
                                            <td><?php echo $citizen['surname']?></td>
                                            <td><?php echo $citizen['rruga']?></td>
                                            <td><?php echo $citizen['nr_telefonit']?></td>
                                            <td>
                                                <button class="btn main-color-bg" type="button" data-toggle="modal" data-target="#editUser">Edit</button>
                                                <form method="post" action="citizen" style="display:inline">
                                                    <input type="hidden" name="remove"  value="<?php echo $data['citizens'][$i]['uID'] ?>">
                                                    <button type="submit" name="delete" value="" style="margin-left: 10px" class="pull-right btn btn-danger">Delete</button>

                                                </form>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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


<!--        reviewRequestMOdal-->
        <div class="modal fade" id="reviewReq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add User</h4>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            <li  class="sticky list-group-item active main-color-bg">
                                Pending Approval
                            </li>
                            <li class="list-group-item">
                                Dapibus ac facilisis in
                                <button type="button" class="pull-right btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button type="button" style="margin-left:22em;" class=" btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </li>
                            <li class="list-group-item">
                                Dapibus ac facilisis in
                                <button type="button" class="pull-right btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button type="button" style="margin-left:22em;" class=" btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </li>
                            <li class="list-group-item">
                                Dapibus ac facilisis in
                                <button type="button" class="pull-right btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button type="button" style="margin-left:22em;" class=" btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </li>
                            <li class="list-group-item">
                                Dapibus ac facilisis in
                                <button type="button" class="pull-right btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button type="button" style="margin-left:22em;" class=" btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </li>
                            <li class="list-group-item">
                                Dapibus ac facilisis in
                                <button type="button" class="pull-right btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                                <button type="button" style="margin-left:22em;" class=" btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add User</button>
                    </div>
                </div>
            </div>
        </div>


        <!--    editUser modal-->
        <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit User</h4>
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
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email">
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

        <!--        deleteUser Modal-->

        <div class="modal fade"  style="margin-top: 10em" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="delete">
                            <h3>
                                Are you sure you want to delete this user?
                                <br>
                                Changes cannot be undone!
                            </h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>


</body>

</html>