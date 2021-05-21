<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Reports</title>

    <!-- Bootstrap core CSS -->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/StylesP.css">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>


</head>

<?php
include "navbarP.php";
if (isset($data)) {
}

?>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-list-alt" aria-hidden="" true> </span> Reports </h1>
            </div>

        </div>
    </div>
</header>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="policePanel" class="list-group-item  ">
                        <span class="glyphicon glyphicon-cog" aria-hidden="" true></span>Dashboard
                    </a>
                    <a href="#" class="list-group-item main-color-bg active"><span class="glyphicon glyphicon-list-alt"
                                                                                   aria-hidden="" true> </span>
                        Reports<span class="badge"><?php echo $data['countReports'][0]['COUNT(emri)'] ?></span></a>
                    <a href="myReports" class="list-group-item "><span class="glyphicon glyphicon-list-alt"
                                                                       aria-hidden="" true> </span>
                        My Reports<span class="badge"><?php echo $data['countActiveReports'][0]['COUNT(emri)'] ?></span></a>
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
                                <th class="main-color-bg">Data</th>
                                <th class="main-color-bg">Address</th>
                                <th class="main-color-bg">Description</th>
                                <th class="main-color-bg">Foto</th>
                                <th class="main-color-bg">Take Report</th>

                            </tr>
                            <?php foreach ($data['reports'] as $i => $report): ?>
                                <tr>
                                    <td><?php echo $report['emri'] ?>  </td>
                                    <td><?php echo $report['dt_raportimit'] ?>  </td>
                                    <td><?php echo $report['address'] ?>  </td>
                                    <td style="max-width:300px;
                                                   word-wrap:break-word;"><?php echo $report['description'] ?>  </td>
                                    <td><img width="200" style="display:block;
                                                                 text-align:center;
                                                                 margin-left: auto;
                                                                 margin-right: auto;
                                                                " src="<?php echo $report['foto'] ?>"></td>
                                    <td>
                                        <form method="post" action="policeReports" style="display:inline">
                                            <input type="hidden" name="remove"
                                                   value="<?php echo $data['reports'][$i]['reID'] ?>">
                                            <button type="submit" name="take" value="" style="margin-right:"
                                                    class="pull-right btn btn-primary">Take
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div style="height: 110px"></div>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
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
<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header main-color-bg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Account Type</h4>
                </div>
                <div class="modal-body" style="background: #f4f4f4">

                    <h2>Are you sure?</h2>
                    <hr>

                    <div class="text-center">
                        <a href="signUpPolice.php" class="btn btn-default btn-lg main-color-bg" role="button">NO</a>
                        <a href="signUpCitizen.php" class="btn btn-default  btn-lg main-color-bg" role="button">YES</a>

                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

