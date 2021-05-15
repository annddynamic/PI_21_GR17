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
                            <form>
                                <div class="search-box">
                                    <input class="search-text" type="text" name="search" placeholder="Type to search" value="<?php echo $data['search'] ?>">
                                    <a class="search-btn" type="submit">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </form>
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
                            <a href="adminPanel" class="list-group-item "><span
                                        class="glyphicon glyphicon-cog" aria-hidden="" true> </span>
                                Dashboard
                            </a>
                            <a href="police" class="list-group-item active main-color-bg">
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
                                        class="badge"><?php echo $data['countFeedback'][0]['COUNT(name)'] ?></span></a>

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
                                                <form method="post" action="citizen" style="display:inline">
                                                    <input type="hidden" name="remove"  value="<?php echo $data['citizens'][$i]['uID'] ?>">
                                                    <button type="submit" name="delete" value=""  class="pull-right btn btn-danger">Delete</button>

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
        <?php include 'modals.php'?>

</body>

</html>