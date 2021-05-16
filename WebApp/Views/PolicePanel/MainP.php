<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Police Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/StylesP.css">


</head>


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


<?php

include "navbarP.php";
if (isset($data)) {

}


?>
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
           
        </div>
    </div>
</header>

<body>



<section id="main">
    <div class ="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="policePanel" class="list-group-item active main-color-bg" ><span class ="glyphicon glyphicon-cog" aria-hidden="" true> </span>
                        Dashboard
                    </a>
                    <a href="policeReports" class="list-group-item"><span class ="glyphicon glyphicon-list-alt" aria-hidden="" true> </span>
                      Reports<span class="badge"><?php echo $data['countReports'][0]['COUNT(emri)'] ?></span></a>
                    <a href="myReports" class="list-group-item "><span class ="glyphicon glyphicon-list-alt" aria-hidden="" true> </span>
                     My Reports<span class="badge"><?php echo $data['countActiveReports'][0]['COUNT(emri)'] ?></span></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Website Overview</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="well dash-box">
                                <h2><span class ="glyphicon glyphicon-user" aria-hidden=""true> </span> <?php echo $data['countCitizens'][0]['COUNT(name)'] ?></h2>
                                <h4>Users</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" well dash-box">
                                <h2><span class ="glyphicon glyphicon-list-alt" aria-hidden=""true> </span><?php echo $data['countReports'][0]['COUNT(emri)'] ?></h2>
                                <h4>Reports</h4>
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

                            </tr>
                            <tbody>
                            <?php foreach ($data['user'] as $i => $user): ?>
                                <tr>
                                    <td><?php echo $user['name'] ?></td>
                                    <td><?php echo $user['surname'] ?></td>
                                    <td><?php echo $user['gender'] ?></td>
                                    <td><?php echo $user['data_lindjes'] ?></td>
                                    <td><?php echo $user['rruga'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                </tr>
                            <?php endforeach; ?>  
                            </tbody>
                            
                        </table>
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

</body>

<?php
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?>
<!--Review Request-->

<!--Add Article-->