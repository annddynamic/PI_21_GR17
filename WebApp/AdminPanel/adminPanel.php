<?php

include "navbar.php";

?>

<header id ="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class ="glyphicon glyphicon-cog" aria-hidden=""true> </span>Dashboard <small>Manage Your Site</small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Manage
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Add User</a></li>
                        <li><a href="#">Review Request</a></li>
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
                    <a href="adminPanel.php" class="list-group-item active main-color-bg" ><span class ="glyphicon glyphicon-cog" aria-hidden=""true> </span>
                        Dashboard
                    </a>
                    <a href="users.php" class="list-group-item"><span class ="glyphicon glyphicon-user" aria-hidden=""true> </span>Users<span class="badge">12</span></a>
                    <a href="reports.php" class="list-group-item"><span class ="glyphicon glyphicon-cog" aria-hidden=""true> </span>Reports<span class="badge">12</span></a>
                    <a href="feedback.php" class="list-group-item"><span class ="glyphicon glyphicon-pencil" aria-hidden=""true> </span>Feedback<span class="badge">12</span></a>
                </div>

                <div class="well">
                    <h4>Number of reports resolved</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                    <h4>lorem lorem</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40 %;">
                            40%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">

            </div>
        </div>
    </div>
</section>
