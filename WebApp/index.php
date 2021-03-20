<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Asets/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Crime Reporting System</title>
    <style>
        body{

            background:#f4f4f4;
        }

        .navbar{
            border-radius: 0;
        }

        .navbar-nav >li {
            padding-left:20px;
        }

        .navbar-right >li {
            padding-left:20px;
        }

        .navbar-default {
            background-color: #005b96;
            border-color: #03396c;
        }
        .navbar-default .navbar-brand {
            color: #ecf0f1;
        }
        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #b3cde0;
        }
        .navbar-default .navbar-text {
            color: #ecf0f1;
        }
        .navbar-default .navbar-nav > li > a {
            color: #ecf0f1;
        }
        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > li > a:focus {
            color: #b3cde0;
        }
        .navbar-default .navbar-nav > .active > a,
        .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .active > a:focus {
            color: #b3cde0;
            background-color: #03396c;
        }
        .navbar-default .navbar-nav > .open > a,
        .navbar-default .navbar-nav > .open > a:hover,
        .navbar-default .navbar-nav > .open > a:focus {
            color: #b3cde0;
            background-color: #03396c;
        }
        .navbar-default .navbar-toggle {
            border-color: #03396c;
        }
        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
            background-color: #03396c;
        }
        .navbar-default .navbar-toggle .icon-bar {
            background-color: #ecf0f1;
        }
        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
            border-color: #ecf0f1;
        }
        .navbar-default .navbar-link {
            color: #ecf0f1;
        }
        .navbar-default .navbar-link:hover {
            color: #b3cde0;
        }



        @media (max-width: 767px) {
            .navbar-default .navbar-nav .open .dropdown-menu > li > a {
                color: #ecf0f1;
            }
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
                color: #b3cde0;
            }
            .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
            .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
                color: #b3cde0;
                background-color: #03396c;
            }
        }

    </style>
</head>
<body>
<header>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Sign up</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="Asets/js/bootstrap.min.js"></script>

<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="./Asets/img/1.jpg" alt="Foto 1" style="width:100%;">
            </div>

            <div class="item">
                <img src="./Asets/img/2.jpg" alt="Foto 2" style="width:100%;">
            </div>

            <div class="item">
                <img src="./Asets/img/3.jpg" alt="Foto 3" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



<div style="height: 400px"></div>
</body>
</html>

