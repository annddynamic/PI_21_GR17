<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->

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
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/style.css">
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
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="" true> </span> Dashboard </h1>
                </div>
                <div class="col-md-8 ">
                    <form action="adminPanel" method="GET">
                        <div class="search-box">
                            <input class="search-text" type="text" name="search" onkeyup="showHint(this.value)" placeholder="Type to search" value="<?php echo $data['search'] ?>">
                            <a class="search-btn" href="#">
                                <span class="glyphicon glyphicon-search" aria-hidden="true" ></span>
                            </a>
                        </div>
                    </form>
                    <div style="margin-top:60px;
                                margin-left:-60px;

                               " class="suggestion">
                        <p><span id="txtHint"></span></p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</header>


<script>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                // 0: Req not initialised
                // 1: Server connection established
                // 2: processing request
                // 3: req finished and response is ready
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "./AJAX/ajaxFETCH.php?q=" + str, true);
            xmlhttp.send();
        }
    }
</script>



<section id="main">
    <div class="container">
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
                                class="badge"><?php echo $data['countFeedback'][0]['COUNT(name)'] ?></span></a>

                </div>


            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Website Overview</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-user" aria-hidden=""
                                          true> </span><?php echo $data['count'][0]['COUNT(name)'] ?></h2>
                                <h4>Users</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-list-alt" aria-hidden=""
                                          true> </span><?php echo $data['reportCount'][0]['COUNT(emri)'] ?></h2>
                                <h4>Reports</h4>
                            </div>
                        </div>
                        <div class="col-md-3 dash-box">
                            <div class="well">
                                <h2><span class="glyphicon glyphicon-book" aria-hidden=""
                                          true> </span> <?php echo $data['countNews'][0]['COUNT(nID)'] ?></h2>
                                <h4>Articles</h4>
                            </div>
                        </div>
                        <div class="col-md-3 dash-box">
                            <div class="well">
                                <h2><span class="glyphicon glyphicon-pencil" aria-hidden=""
                                          true> </span> <?php echo $data['countFeedback'][0]['COUNT(name)'] ?></h2>
                                <h4>Feedback</h4>
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
                                <th class="main-color-bg" scope="col">Name</th>
                                <th class="main-color-bg" scope="col">Last Name</th>
                                <th class="main-color-bg" scope="col">Gender</th>
                                <th class="main-color-bg" scope="col">Dob</th>
                                <th class="main-color-bg" scope="col">Address</th>
                                <th class="main-color-bg" scope="col">Email</th>
                                <th class="main-color-bg" scope="col">Role</th>
                            </tr>
                            <tbody>

                            <?php foreach ($data['users'] as $i => $user): ?>

                                <tr>
                                    <td><?php echo $user['name'] ?></td>
                                    <td><?php echo $user['surname'] ?></td>
                                    <td><?php echo $user['gender'] ?></td>
                                    <td><?php echo $user['data_lindjes'] ?></td>
                                    <td><?php echo $user['rruga'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td><?php echo $user['role_name'] ?></td>
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
    <p>Copyright Adminstrap, &copy; 2021</p>
</footer>

<?php
include "modals.php";
?>

</body>
</html>