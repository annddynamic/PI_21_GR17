<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/index.css">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>
    <title>Crime Reporting System</title>

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
                    <li class="active"><a href="#">Home</a></li>
                    <li class=""><a href="report">Report</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signIn">Sign in</a></li>
                    <li><a class="emergenciesButton"  type = "button" data-toggle="modal" data-target="#signUp" >Sign up</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>


<!--Qetu u kry navbari-->

<div class="container push2">

    <div class="grid">
        <div class="hyrje">
            <h1>Crime Reporting System</h1>

            <p>
                <?php
                $number = 100;
                $str = "Kosovo";
                printf("There are %u criminal cases everyday in %s.",$number,$str);
                ?> adipisicing elit. Dignissimos, nam Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Doloremque ex expedita itaque iure nemo odio pariatur provident quos
                tempora
                velit.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nam Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Doloremque ex expedita itaque iure nemo odio pariatur provident quos
                tempora
                velit.
            </p>
            <p class="report">Lorem ipsum dolor sit amet, consectetur adipisicing?
                <a class="emergenciesButton" style="color: red; font-weight: bold" type="button" data-toggle="modal" data-target="#report">Report now!</a>
        </div>

        <div class="hyrje2">
            <img style="height:33em" src="../Assets/img/test2.png">
        </div>
    </div>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <div class="sliderGrid">

                    <div class="foto">
                        <img style="height:30em" src="../Assets/img/report.png" alt="Diqka">
                    </div>
                    <div class="tekst">
                        <h2> lorem</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                            minima
                            quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam modi
                            provident, qui quod veniam!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                            minima
                            quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam modi
                            provident, qui quod veniam!
                        </p>
                    </div>

                </div>

            </div>

            <div class="item">
                <div class="sliderGrid">

                    <div class="foto">
                        <img style="height:30em" src="../Assets/img/robbery.png" alt="diqka">
                    </div>
                    <div class="tekst">
                        <h2> lorem</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                            minima
                            quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam modi
                            provident, qui quod veniam!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                            minima
                            quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam modi
                            provident, qui quod veniam!
                        </p>
                    </div>

                </div>
            </div>

            <div class="item">
                <div class="sliderGrid">

                    <div class="foto">
                        <img style="height:30em" src="../Assets/img/robbery.png" alt="Diqka">
                    </div>
                    <div class="tekst">
                        <h2> lorem</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                            minima
                            quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam modi
                            provident, qui quod veniam!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                            minima
                            quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam modi
                            provident, qui quod veniam!
                        </p>
                    </div>

                </div>
            </div>

            <div class="item">
                <div class="sliderGrid">

                    <div class="foto">
                        <img style="height:30em" src="../Assets/img/corruption.png" alt="diqka">
                    </div>
                    <div class="tekst">
                        <h2> lorem</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                            minima
                            quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam modi
                            provident, qui quod veniam!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere in
                            minima
                            quos veniam! Cupiditate ducimus eius impedit inventore, laboriosam magnam modi
                            provident, qui quod veniam!
                        </p>
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


<section id="latest">
    <div class="container">
        <div class="row">
            <h1>News Section</h1>

            <div class="col-md-6">
                <div style="height: 7em"></div>
                <div class="content">
                    <img src="../Assets/img/policeguard.jpg" alt="">
                    <div class="content2">
                        <h2 class="text-left">lorem</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>

                        <div class="icons">
                            <a href="#"class="btn main-color-bg pull-left" role="button">Read more</a>
                            <a href="http://twitter.com" class="fa fa-twitter"></a>
                            <a href="http://facebook.com" class="fa fa-facebook"></a>
                            <a href="http://instagram.com" class="fa fa-instagram"></a>
                            <a href="http://twitter.com" class="fa fa-whatsapp"></a>
                        </div>
                    </div>
                </div>
                <div style="height: 5em"></div>
                <div class="content">
                    <img src="../Assets/img/policeguard.jpg" alt="">
                    <div class="content2">
                        <h2 class="text-left">lorem</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>

                        <div class="icons">
                            <a href="#"class="btn main-color-bg pull-left" role="button">Read more</a>
                            <a href="http://twitter.com" class="fa fa-twitter"></a>
                            <a href="http://facebook.com" class="fa fa-facebook"></a>
                            <a href="http://instagram.com" class="fa fa-instagram"></a>
                            <a href="http://twitter.com" class="fa fa-whatsapp"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <div class="content">
                    <img src="../Assets/img/policeguard.jpg" alt="">
                    <div class="content2">
                        <h2 class="text-left">lorem</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>

                        <div class="icons">
                            <a href="http://twitter.com" class="fa fa-twitter"></a>
                            <a href="http://facebook.com" class="fa fa-facebook"></a>
                            <a href="http://instagram.com" class="fa fa-instagram"></a>
                            <a href="http://twitter.com" class="fa fa-whatsapp"></a>
                        </div>
                    </div>
                </div>
                <div style="height: 5em"></div>
                <div class="content">
                    <img src="../Assets/img/policeguard.jpg" alt="">
                    <div class="content2">
                        <h2 class="text-left">lorem</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>

                        <div class="icons">
                            <a href="#"class="btn main-color-bg pull-left" role="button">Read more</a>
                            <a href="http://twitter.com" class="fa fa-twitter"></a>
                            <a href="http://facebook.com" class="fa fa-facebook"></a>
                            <a href="http://instagram.com" class="fa fa-instagram"></a>
                            <a href="http://twitter.com" class="fa fa-whatsapp"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<div style="height: 100px;">

</div>
<!-- Footeri -->

<?php include_once "footer.php" ?>

<!--modali per report-->
<div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Emergency Report</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">

                            <label for="Gender">What do you want to report?</label>
                            <select class="form-control" name="gender">
                                <option value="abuse">Abuse</option>
                                <option value="suicide">Suicide</option>
                                <option value="murder">Murder</option>
                                <option value="robbery">Robbery</option>
                                <option value="robbery">Arson</option>
                                <option value="breakIn">Break In</option>
                                <option value="corruption">Corruption</option>
                                <option value="other">Other</option>
                            </select>


                        </div>
                        <div class="form-group">
                            <textarea id="textarea"   placeholder="Add Message"> </textarea>
                            <div class="pull-right ">

                                <input type="file" id="myfile" name="myfile">
                            </div>
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



                        <input type="submit" class="btn btn-default main-color-bg btn-lg " value="Submit">


                    </form>

                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header main-color-bg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Account Type</h4>
                </div>
                <div class="modal-body" style="background: #f4f4f4">

                    <h2>What type of account do you want to create ?</h2>
                    <hr>

                    <div class="text-center">
                        <a href="signUpPolice" class="btn btn-default btn-lg main-color-bg" role="button">Police</a>
                        <a href="signUpCitizen" class="btn btn-default  btn-lg main-color-bg" role="button">Citizen</a>

                    </div>

                </div>

            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>
<script src="../Assets/js/bootstrap.min.js"></script>


</body>
</html>

