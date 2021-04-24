<?php
if (isset($data)) {


    $errors = $data['rep']->getErrors();
    $datta=$data['rep']->getData();
}
?>

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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>

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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>

                        <div class="icons">
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>

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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum harum nobis non officiis repellendus sit vel vero. Ad debitis dolore doloribus illo libero minima, odio quas tempore ut voluptatum.</p>

                        <div class="icons">
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
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Emergency Report</h4>
                </div>
                <div class="modal-body">
                    <form action="index.php" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="<?php echo isset($datta['name']) ? $datta['name'] : null; ?>" class="form-control" placeholder="Name" name="name">
                            <span class="invalidFeedback"><?php echo isset($errors['nameError']) ? $errors['nameError'] : null; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" value="<?php echo isset($datta['lastName']) ? $datta['lastName']: null; ?>" class="form-control" name="lastName" placeholder="Last Name">
                            <span class="invalidFeedback"> <?php echo $errors['lastNameError']; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="Reports" >What do you want to report?</label>
                            <select class="form-control" name="report">
                                <option value aria-disabled="true">Select report type..</option>
                                <option value="abuse" <?php echo (isset($_POST['report']) && $_POST['report'] === 'abuse') ? 'selected' : ''; ?>>Abuse</option>
                                <option value="suicide"<?php echo (isset($_POST['report']) && $_POST['report'] === 'suicide') ? 'selected' : ''; ?>>Suicide</option>
                                <option value="murder"<?php echo (isset($_POST['report']) && $_POST['report'] === 'murder') ? 'selected' : ''; ?>>Murder</option>
                                <option value="robbery"<?php echo (isset($_POST['report']) && $_POST['report'] === 'robbery') ? 'selected' : ''; ?>>Robbery</option>
                                <option value="arson"<?php echo (isset($_POST['report']) && $_POST['report'] === 'arson') ? 'selected' : ''; ?>>Arson</option>
                                <option value="breakIn"<?php echo (isset($_POST['report']) && $_POST['report'] === 'breakIn') ? 'selected' : ''; ?>>Break In</option>
                                <option value="corruption"<?php echo (isset($_POST['report']) && $_POST['report'] === 'corruption') ? 'selected' : ''; ?>>Corruption</option>
                                <option value="other"<?php echo (isset($_POST['report']) && $_POST['report'] === 'other') ? 'selected' : ''; ?>>Other</option>
                            </select>
                            <span class="invalidFeedback"> <?php echo $errors['reportError']; ?></span>
                        </div>
                        <div class="form-group">
                            <textarea id="textarea" name="textfield"placeholder="Add Message" value=""><?php if(isset($_POST['textfield'])) { echo $_POST['textfield']; } ?>  </textarea>
                            <span class="invalidFeedback"> <?php echo $errors['textfieldError']; ?></span>
                            <div class="pull-right ">
                                <input type="file" value="<?php echo isset($datta['file']) ? $datta['file'] : null; ?>" id="myfile" name="file">
                                <span class="invalidFeedback"> <?php echo $errors['fileError']; ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" value="<?php echo isset($datta['address']) ? $datta['address'] : null; ?> " class="form-control" placeholder="Address">
                            <span class="invalidFeedback"> <?php echo $errors['addressError']; ?></span>
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" value="<?php echo isset($datta['city']) ? $datta['city'] : null; ?>"class="form-control" placeholder="City">
                            <span class="invalidFeedback"> <?php echo $errors['cityError']; ?></span>
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

