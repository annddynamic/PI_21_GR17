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
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>


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


            </div>

        </div>
    </div>
</header>

<body>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="policePanel" class="list-group-item  "><span class="glyphicon glyphicon-cog" aria-hidden=""
                                                                          true> </span>
                        Dashboard
                    </a>
                    <a href="policeReports" class="list-group-item  "><span class="glyphicon glyphicon-list-alt"
                                                                            aria-hidden="" true> </span>
                        Reports<span
                                class="badge"><?php echo $data['countReports'][0]['COUNT(emri)'] ?></span></a>
                    <a href="myReports" class="list-group-item main-color-bg "><span
                                class="glyphicon glyphicon-list-alt" aria-hidden="" true> </span>
                        My Reports<span class="badge"><?php echo $data['countActiveReports'][0]['COUNT(emri)'] ?></span></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>ACTIVE CASES</b></h3>

                    </div>
                    <div class="panel-body myPanel">
                        <table class="table  table-hover tbl" id="emergency">
                            <tr>
                                <th class="main-color-bg">Name</th>
                                <th class="main-color-bg">Data</th>
                                <th class="main-color-bg">Address</th>
                                <th class="main-color-bg">Description</th>
                                <th class="main-color-bg">Foto</th>
                                <th class="main-color-bg"></th>

                            </tr>
                            <tr>
                                <?php foreach ($data['myReports'] as $i => $report): ?>

                            <tr>
                                <td><?php echo $report['emri'] ?>  </td>
                                <td><?php echo $report['dt_raportimit'] ?>  </td>
                                <td><?php echo $report['address'] ?>  </td>
                                <td><?php echo $report['description'] ?>  </td>
                                <td><img width="150" style="display:block;
                                                                        text-align:center;
                                                                        margin-left: auto;
                                                                        margin-right: auto;
                                                                       " src="<?php echo $report['foto'] ?>"></td>
                                <td>
                                    <form action="myReports" method ="post">
                                        <input type="hidden" name="reID" value="<?php echo $data['myReports'][$i]['reID'] ?>">
                                        <button type="submit" name="finish" value=""
                                                class="pull-right btn btn-success">Finish
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tr>
                        </table>
                    </div>

                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>FINISHED REPORTS</b></h3>
                    </div>
                    <div class="panel-body myPanel">
                        <table class="table  table-hover tbl" id="emergency">
                            <tr>
                                <th class="main-color-bg">Name</th>
                                <th class="main-color-bg">Date</th>
                                <th class="main-color-bg">Address</th>
                                <th class="main-color-bg">Description</th>
                                <th class="main-color-bg">Foto</th>
                            </tr>
                            <?php foreach ($data['finishedReports'] as $i => $report): ?>
                                <tr>
                                    <td><?php echo $report['emri'] ?>  </td>
                                    <td><?php echo $report['dt_raportimit'] ?>  </td>
                                    <td><?php echo $report['address'] ?>  </td>
                                    <td><?php echo $report['description'] ?>  </td>
                                    <td><img width="150" style="display:block;
                                                                        text-align:center;
                                                                        margin-left: auto;
                                                                        margin-right: auto;
                                                                       " src="<?php echo $report['foto'] ?>"></td>
                                </tr>
                            <?php endforeach; ?>

                        </table>
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
</body>