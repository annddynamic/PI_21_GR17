<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Police Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../Assets/css/StylesP.css">


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
                    <a href="MainP.php" class="list-group-item  " ><span class ="glyphicon glyphicon-cog" aria-hidden="" true> </span>
                        Dashboard
                    </a>
                    <a href="ReportsP.php" class="list-group-item  "><span class ="glyphicon glyphicon-list-alt" aria-hidden="" true> </span>
                     Reports<span class="badge">12</span></a>
                    <a href=" class="list-group-item main-color-bg "><span class ="glyphicon glyphicon-list-alt" aria-hidden="" true> </span>
                     My Reports<span class="badge">12</span></a>
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
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            40%
                        </div>
                    
                    </div>
                    <div>
                    
                    </div>
                   
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
                                <th class="main-color-bg">Date</th>
                                <th class="main-color-bg">Status</th>
                                <th class="main-color-bg">In Charge</th>
                                <th class="main-color-bg">Delete</th>
                            </tr>
                            <tr>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>
                                    Not Resolved
                                    <div class="dropdown create pull-right">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Not Resolved</a></li>
                                            <li><a href="#">In process</a></li>
                                            <li><a href="#">Resolved</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    Jill Smith 
                                    <button class="btn btn-info pull-right">  Edit</button>
                                </td>
                                <td><button class="btn btn-danger "><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#deleteUser" style="float: right;"  >  Request Delete</a></button></td>
                            </tr>
                            <tr>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>
                                    Jill Smith
                                    <div class="dropdown create pull-right">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Not Resolved</a></li>
                                            <li><a href="#">In process</a></li>
                                            <li><a href="#">Resolved</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    Jill Smith
                                    <button class="btn btn-info pull-right">  Edit</button>
                                </td>
                                <td><button class="btn btn-danger "><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#deleteUser" style="float: right;">  Request Delete</a></button></td>
                            </tr>
                            <tr>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>
                                    Jill Smith
                                    <div class="dropdown create pull-right">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Not Resolved</a></li>
                                            <li><a href="#">In process</a></li>
                                            <li><a href="#">Resolved</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    Andi Dika
                                    <button class="btn btn-info pull-right">  Edit</button>

                                </td>
                                <td><button class="btn btn-danger "><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#deleteUser" style="float: right;">  Request Delete</a></button></td>
                            </tr>
                            <tr>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>
                                    Jill Smith
                                    <div class="dropdown create pull-right">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Not Resolved</a></li>
                                            <li><a href="#">In process</a></li>
                                            <li><a href="#">Resolved</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    Andi Dika
                                    <button class="btn btn-info pull-right">  Edit</button>
                                </td>
                                <td><button class="btn btn-danger "><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#deleteUser" style="float: right;">  Request Delete</a></button></td>
                            </tr>
                            <tr>
                                <td>Adnit King kobra </td>
                                <td>Adnit King kobra </td>
                                <td>
                                    Jill Smith
                                    <div class="dropdown create pull-right">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Not Resolved</a></li>
                                            <li><a href="#">In process</a></li>
                                            <li><a href="#">Resolved</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    Adnit King kobra
                                    <button class="btn btn-info pull-right">  Edit</button>
                                </td>
                                <td><button class="btn btn-danger "><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#deleteUser" style="float: right;">  Request Delete</a></button></td>
                            </tr>
                        </table>
                    </div>

                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>ALL REPORTS</b></h3>
                    </div>
                    <div class="panel-body myPanel">
                        <table class="table  table-hover tbl" id="emergency">
                            <tr>
                                <th class="main-color-bg">Name</th>
                                <th class="main-color-bg">Date</th>
                                <th class="main-color-bg">Status</th>
                                <th class="main-color-bg">In Charge</th>
                                <th class="main-color-bg">Delete</th>
                            </tr>
                            <tr>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>
                                    Not Resolved
                                    <div class="dropdown create pull-right">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Not Resolved</a></li>
                                            <li><a href="#">In process</a></li>
                                            <li><a href="#">Resolved</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    Jill Smith 
                                    <button class="btn btn-info pull-right">  Edit</button>
                                </td>
                                <td><button class="btn btn-danger "><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#deleteUser" style="float: right;"  >  Request Delete</a></button></td>
                            </tr>
                            <tr>
                                <td>Jill Smith</td>
                                <td>Jill Smith</td>
                                <td>
                                    Jill Smith
                                    <div class="dropdown create pull-right">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Not Resolved</a></li>
                                            <li><a href="#">In process</a></li>
                                            <li><a href="#">Resolved</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    Jill Smith
                                    <button class="btn btn-info pull-right">  Edit</button>
                                </td>
                                <td><button class="btn btn-danger "><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#deleteUser" style="float: right;">  Request Delete</a></button></td>
                            </tr>
                            <tr>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>
                                    Jill Smith
                                    <div class="dropdown create pull-right">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Not Resolved</a></li>
                                            <li><a href="#">In process</a></li>
                                            <li><a href="#">Resolved</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    Andi Dika
                                    <button class="btn btn-info pull-right">  Edit</button>

                                </td>
                                <td><button class="btn btn-danger "><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#deleteUser" style="float: right;">  Request Delete</a></button></td>
                            </tr>
                            <tr>
                                <td>Andi Dika</td>
                                <td>Andi Dika</td>
                                <td>
                                    Jill Smith
                                    <div class="dropdown create pull-right">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Not Resolved</a></li>
                                            <li><a href="#">In process</a></li>
                                            <li><a href="#">Resolved</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    Andi Dika
                                    <button class="btn btn-info pull-right">  Edit</button>
                                </td>
                                <td><button class="btn btn-danger "><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#deleteUser" style="float: right;">  Request Delete</a></button></td>
                            </tr>
                            <tr>
                                <td>Adnit King kobra </td>
                                <td>Adnit King kobra </td>
                                <td>
                                    Jill Smith
                                    <div class="dropdown create pull-right">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Not Resolved</a></li>
                                            <li><a href="#">In process</a></li>
                                            <li><a href="#">Resolved</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    Adnit King kobra
                                    <button class="btn btn-info pull-right">  Edit</button>
                                </td>
                                <td><button class="btn btn-danger "><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#deleteUser" style="float: right;">  Request Delete</a></button></td>
                            </tr>
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
  </footer>>
</body>