<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Asets/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="dist/simple-lightbox.min.css"
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Crime Reporting System</title>

    <style>
        .grid {
            margin: 2rem 0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 3rem;
            align-items: center;
            justify-content: center;

        }

        .dy {
            margin: auto;
        }


        .par {
            margin-left: 15em;
        }

    </style>

</head>
<body>
<header>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">
                            <span class=" glyphicon glyphicon-eye-open" aria-hidden="true"></span> Home</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Sign up</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>


<!--Qetu u kry navbari-->

<div class="grid">
    <div class="par">
        <h1>Mut

        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nam Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Doloremque ex expedita itaque iure nemo odio pariatur provident quos tempora
            velit.
        </p>
        <a href="#" class="btn">Emergjencaaa</a>
    </div>
    <div class="dy">
        <img src="Asets/img/testi.png">
    </div>
</div>


<div style="height: 100px"></div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>
<script src="Asets/js/bootstrap.min.js"></script>


<div class="container">

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
                    <img src="Asets/img/2.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Andi Dika</h3>
                        <p>Mitrovicali</p>
                    </div>
                </div>

                <div class="item">
                    <img src="Asets/img/2.jpg" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi aut delectus,
                            distinctio dolores eligendi est et illum laudantium natus neque nihil perferendis possimus
                            quia quod repudiandae sunt temporibus voluptatum.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur aut
                            consequuntur cupiditate, debitis dolor dolore dolorem eius eligendi expedita laudantium,
                            neque quam quas, qui recusandae sed sit temporibus tenetur.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="Asets/img/3.jpg" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Adnit gashi</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ducimus eligendi error
                            ipsum necessitatibus quas quos repellendus! A amet animi autem beatae culpa dolorem eius
                            eligendi est hic impedit incidunt inventore, itaque libero magnam nihil odio, officiis
                            perferendis quae quasi qui recusandae reiciendis, rerum sit temporibus totam ut vel
                            voluptates.</p>
                    </div>
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

    <script src="dist/simple-lightbox.min.js"></script>
    <script>
        $(function () {
            const $gallery = $('.gallery a').simpleLightbox();
        });</script>
    <div style="height: 400px"></div>
</body>
</html>

