<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Reports</title>

    <!-- Bootstrap core CSS -->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>

    <link rel="stylesheet" href="../Assets/css/style.css">

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
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="col-md-4">
                    <h1><span class="glyphicon glyphicon-list-alt" aria-hidden="" true> </span> Reports </h1>

                </div>
                <div class="col-md-8 ">

                    <form>
                        <div class="search-box">
                            <input class="search-text" type="text" name="search" placeholder="Type to search"
                                   value="<?php echo $data['search'] ?>">
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
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="adminPanel" class="list-group-item "><span
                                class="glyphicon glyphicon-cog" aria-hidden="" true> </span>
                        Dashboard
                    </a>
                    <a href="police" class="list-group-item">
                        <span class="glyphicon glyphicon-user" aria-hidden="" true></span> Users<span
                                class="badge"><?php echo $data['count'][0]['COUNT(name)'] ?></span></a>

                    <a href="reports" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="" true></span> Reports<span
                                class="badge"><?php echo $data['reportCount'][0]['COUNT(emri)'] ?></span></a>

                    <a href="articles" class="list-group-item">
                        <span class="glyphicon glyphicon-book" aria-hidden="" true> </span> Articles<span
                                class="badge"><?php echo $data['countNews'][0]['COUNT(nID)'] ?></span></a>

                    <a href="feedback" class="list-group-item">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="" true> </span> Feedback<span
                                class="badge"><?php echo $data['countFeedback'][0]['COUNT(name)'] ?></span></a>

                </div>


            </div>
            <div class="col-md-9">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>REPORTS NOT TAKEN</b></h3>
                    </div>
                    <div class="panel-body myPanel">
                        <table class="table  table-hover tbl" id="emergency">
                            <tr>
                                <th class="main-color-bg">Name</th>
                                <th class="main-color-bg">Date</th>
                                <th class="main-color-bg">Status</th>
                                <th class="main-color-bg">In Charge</th>
                                <th class="main-color-bg">Pictures</th>
                                <th class="main-color-bg"></th>
                            </tr>
                            <?php foreach ($data['emergency'] as $i => $emergency): ?>

                                <tr>
                                    <td><?php echo $emergency['emri'] ?></td>
                                    <td><?php echo $emergency['dt_raportimit'] ?></td>
                                    <td><?php echo $emergency['gjendja'] ?></td>
                                    <td><?php echo $emergency['name'] ?></td>
                                    <td>
                                        <img width="150" style="display:block;
                                                                        text-align:center;
                                                                        margin-left: auto;
                                                                        margin-right: auto;
                                                                       " src="<?php echo $emergency['foto'] ?>"></td>
                                    <td>
                                        <form action="reports" method ="post">
                                            <input type="hidden" name="remove"
                                                value="<?php echo $data['emergency'][$i]['reID'] ?>">
                                            <button type="submit" name="emergency" value="" style="margin-left:-20px"
                                                    class="pull-right btn btn-danger">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>

                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>REPORTS IN PROCCESS / FINISHED</b></h3>
                    </div>
                    <div class="panel-body myPanel">
                        <table class="table  table-hover tbl" id="random">
                            <tr>
                                <th class="main-color-bg">Name</th>
                                <th class="main-color-bg">Date</th>
                                <th class="main-color-bg">Status</th>
                                <th class="main-color-bg">In Charge</th>
                                <th class="main-color-bg">Pictures</th>
                                <th class="main-color-bg"></th>
                            </tr>
                            <?php if (!empty($data['random'])): ?>
                                <?php foreach ($data['random'] as $i => $random): ?>

                                    <tr>
                                        <td><?php echo $random['emri'] ?></td>
                                        <td><?php echo $random['dt_raportimit'] ?></td>
                                        <td><?php echo $random['gjendja'] ?></td>
                                        <td><?php echo $random['name'] ?></td>
                                        <td>
                                            <img width="150" style="display:block;
                                                                        text-align:center;
                                                                        margin-left: auto;
                                                                        margin-right: auto;
                                                                       " src="<?php echo $random['foto'] ?>"></td>
                                        <td>
                                            <form action="reports" method ="post">    
                                                <input type="hidden" name="remove" value="<?php echo $data['random'][$i]['reID'] ?>">
                                                <input type="hidden" name="userID" value="<?php echo $data['random'][$i]['uID'] ?>">
                                                <button type="submit" name="emergency" value="" style="margin-left:-30px"
                                                        class="pull-right btn btn-danger">Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </table>
                    </div>
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