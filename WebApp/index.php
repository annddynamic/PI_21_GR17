<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Asets/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
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

        .hyrje {
            margin-left: 15em;
        }

        .hyrje2 {
            margin: auto;
        }


        .sliderGrid {
            display: grid;
            grid-template-columns:repeat(2, 1fr);
            grid-gap: 1rem;
            align-items: center;
            justify-content: center;
        }

        .foto {
            height: 40em;
            align-self: center;
        }

        .foto img {
            width: 100%;
            margin-top: 15%;
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
<div class="container">
    <div class="grid">
        <div class="hyrje">
            <h1>Mut

            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nam Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Doloremque ex expedita itaque iure nemo odio pariatur provident quos
                tempora
                velit.
            </p>
            <a href="#" class="btn">Emergjencaaa</a>
        </div>
        <div class="hyrje2">
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
                        <div class="sliderGrid">

                            <div class="foto">
                                <img src="Asets/img/3.jpg">
                            </div>
                            <div class="tekst">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                                    minima
                                    quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam modi
                                    provident, qui quod reiciendis sapiente sint tempore, veniam!</h3>
                            </div>

                        </div>

                    </div>

                    <div class="item">
                        <div class="sliderGrid">

                            <div class="foto">
                                <img src="Asets/img/3.jpg">
                            </div>
                            <div class="tekst">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                                    minima
                                    quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam modi
                                    provident, qui quod reiciendis sapiente sint tempore, veniam!</h3>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="sliderGrid">

                            <div class="foto">
                                <img src="Asets/img/2.jpg">
                            </div>
                            <div class="tekst">
                                <h3>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                                    minima quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam
                                    modi provident, qui quod reiciendis sapiente sint tempore, veniam!
                                </h3>
                            </div>

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


        <div style="height: 400px"></div>
    </div>
</body>
</html>

