<?php
if (isset($data)) {


    $errors = $data['rep']->getErrors();
    $datta = $data['rep']->getData();

    if (count($data['models']["data"]) > 1) {

        list($firstArray, $secondArray) = array_chunk($data['models']["data"], ceil(count($data['models']["data"]) / 2));
    } else {
        $firstArray = $data['models']["data"];
    }

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
                    <li><a class="emergenciesButton" type="button" data-toggle="modal" data-target="#signUp">Sign up</a>
                    </li>
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
                printf("There are %u criminal cases everyday in %s.", $number, $str);
                echo $data['models']['paragraph'];
                ?>
            </p>
            <p>
                <?php $imp = array('Crime-Report-System', 'can', 'help', 'to', 'reduce', 'the', 'number', 'of', 'cases ');
                echo implode(" ", $imp)
                ?>It will bring the police and the victims closer and hence increasing the security. This makes the FIR
                registration simple and easy hence making it time-efficient. The system will help the crime department
                to take action as quickly as possible and maintain the database efficiently.
            </p>
            <p class="report">Do you have somethint to report?
                <a class="emergenciesButton" style="color: red; font-weight: bold" type="button" data-toggle="modal"
                   data-target="#report">Report now!</a>
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
                        <h2>Quick overviw of how our website works!</h2>
                        <p>
                            The aim of our application, as mentioned above is to establish a better connetction between
                            the victims and the police forces.
                        </p>
                        <p>
                            In order to achieve that, our site contains a three role hierarchy. Therefore your
                            experience on the site can be as an admin, police officer or a user (citizen).
                        </p>
                        <p>
                            With the admin on top, each of the roles has its own set of tasks to complete and privileges it is
                            allowed to perform!

                        </p>

                    </div>

                </div>

            </div>

            <div class="item">
                <div class="sliderGrid">

                    <div class="foto">
                        <img style="height:30em; margin-left: 45px" src="../Assets/img/admin.png" alt="diqka">
                    </div>
                    <div class="tekst">
                        <h2>Admin</h2>
                        <p>
                            An admin is usually someone of the high ranks. Could be head of police station himself.
                            He has to be capable of running the site and handling the responsibilities that come with it,
                            pretty much in charge of how things go down here!
                        </p>
                        <p>
                            The Admin has control over the police officials and the citizens. Police officers that want to join
                            the forces, have to be manually approved by the admin in order to proceed...
                            He also manages and keeps track of reports submitted by the citizens and following officers working on their cases.
                        </p>
                        <p>
                            Last, but not least the admin handles all the technicalities! Constantly updates the news section in the web-page so the users know what
                            is new in the precinct or if someone is wanted etc.
                            Also they can receive direct communication from the users through the form on the landing page.
                        </p>
                    </div>

                </div>
            </div>

            <div class="item">
                <div class="sliderGrid">

                    <div class="foto">
                        <img style="height:30em; margin-left: 45px" src="../Assets/img/policeman.png" alt="Diqka">
                    </div>
                    <div class="tekst">
                        <h2>Police Official</h2>
                        <p>
                            Police Officials have to take care of the cases, if they are available they have the ability
                            to chose the case they want.
                        </p>
                        <p>
                            They can view the citizen accounts and keep track of the reports they make. If they are done
                            working on a case, they can mark it as finished and that report will go to the
                            admin, so he can see the the progress in details.
                        </p>
                        <p>
                            If the job is not done properly, or the officer does not obey the orders and does not follow protocol,
                            he can be instantly removed by the admin!
                        </p>
                    </div>

                </div>
            </div>

            <div class="item">
                <div class="sliderGrid">

                    <div class="foto">
                        <img style="width: 100%;margin-top:60px" src="../Assets/img/citizens.png" alt="diqka">
                    </div>
                    <div class="tekst">
                        <h2>Citizens</h2>
                        <p>
                            As a citizen you have the possibility to make a report directly from the home page, or you
                            can sign up and add a report from your personal account.
                        </p>
                        <p>
                            If you have an account you can also see all your reports that you made, and you can email us
                            if you have any ideas on how to improve our webpage.
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

                <?php if (!empty($firstArray)): ?>
                    <?php foreach ($firstArray as $i => $content): ?>

                        <div style="height: 7em"></div>

                        <div class="content">
                            <img width="100%" src="<?php echo $content['foto']; ?>" class="" alt="">
                            <div class="content2">
                                <h2 class="text-left"><?php echo $content['title']; ?></h2>

                                <p><?php echo $content['description']; ?></p>

                                <article class="">
                                    <h3><?php echo $content['published']; ?></h3>
                                    <p>CRP NEWS</p>
                                </article>

                                <div class="icons">
                                    <a href="http://twitter.com" class="fa fa-twitter"></a>
                                    <a href="http://facebook.com" class="fa fa-facebook"></a>
                                    <a href="http://instagram.com" class="fa fa-instagram"></a>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-6">

                <?php if (!empty($secondArray)): ?>
                    <?php foreach ($secondArray as $i => $content): ?>


                        <div style="height: 7em"></div>

                        <div class="content">
                            <img width="100%" src="<?php echo $content['foto']; ?>" class="" alt="">
                            <div class="content2">
                                <h2 class="text-left"><?php echo $content['title']; ?></h2>

                                <p><?php echo $content['description']; ?></p>

                                <article class="">
                                    <h3><?php echo $content['published']; ?></h3>
                                    <p>CRP NEWS</p>
                                </article>

                                <div class="icons">
                                    <a href="http://twitter.com" class="fa fa-twitter"></a>
                                    <a href="http://facebook.com" class="fa fa-facebook"></a>
                                    <a href="http://instagram.com" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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
                <form action="index" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="<?php echo $datta['name']; ?>"
                               class="form-control" placeholder="Name" name="name">
                        <span class="invalidFeedback"><?php echo isset($errors['nameError']) ? $errors['nameError'] : null; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" value="<?php echo isset($datta['lastName']) ? $datta['lastName'] : null; ?>"
                               class="form-control" name="lastName" placeholder="Last Name">
                        <span class="invalidFeedback"> <?php echo $errors['lastNameError']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="Reports">What do you want to report?</label>
                        <select class="form-control" name="report">
                            <option value aria-disabled="true">Select report type..</option>
                            <option value="abuse" <?php echo (isset($_POST['report']) && $_POST['report'] === 'abuse') ? 'selected' : ''; ?>>
                                Abuse
                            </option>
                            <option value="suicide"<?php echo (isset($_POST['report']) && $_POST['report'] === 'suicide') ? 'selected' : ''; ?>>
                                Suicide
                            </option>
                            <option value="murder"<?php echo (isset($_POST['report']) && $_POST['report'] === 'murder') ? 'selected' : ''; ?>>
                                Murder
                            </option>
                            <option value="robbery"<?php echo (isset($_POST['report']) && $_POST['report'] === 'robbery') ? 'selected' : ''; ?>>
                                Robbery
                            </option>
                            <option value="arson"<?php echo (isset($_POST['report']) && $_POST['report'] === 'arson') ? 'selected' : ''; ?>>
                                Arson
                            </option>
                            <option value="breakIn"<?php echo (isset($_POST['report']) && $_POST['report'] === 'breakIn') ? 'selected' : ''; ?>>
                                Break In
                            </option>
                            <option value="corruption"<?php echo (isset($_POST['report']) && $_POST['report'] === 'corruption') ? 'selected' : ''; ?>>
                                Corruption
                            </option>
                            <option value="other"<?php echo (isset($_POST['report']) && $_POST['report'] === 'other') ? 'selected' : ''; ?>>
                                Other
                            </option>
                        </select>
                        <span class="invalidFeedback"> <?php echo $errors['reportError']; ?></span>
                    </div>
                    <div class="form-group">
                        <textarea id="textarea" name="textfield" placeholder="Add Message"
                                  value=""><?php if (isset($_POST['textfield'])) {
                                echo $_POST['textfield'];
                            } ?>  </textarea>
                        <span class="invalidFeedback"> <?php echo $errors['textfieldError']; ?></span>
                        <div class="pull-right ">
                            <input type="file" value="<?php echo isset($datta['file']) ? $datta['file'] : null; ?>"
                                   id="myfile" name="file">
                            <span class="invalidFeedback"> <?php echo $errors['fileError']; ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address"
                               value="<?php echo isset($datta['address']) ? $datta['address'] : null; ?> "
                               class="form-control" placeholder="Address">
                        <span class="invalidFeedback"> <?php echo $errors['addressError']; ?></span>
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city"
                               value="<?php echo isset($datta['city']) ? $datta['city'] : null; ?>" class="form-control"
                               placeholder="City">
                        <span class="invalidFeedback"> <?php echo $errors['cityError']; ?></span>
                    </div>

                    <input type="submit" name="addReport" class="btn btn-default main-color-bg btn-lg " value="Submit">
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

