<?php

if (isset($data)) {

    $errors = $data['rep']->getErrors();
    $datta = $data['rep']->getData();

}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Assets/css/index.css">
        <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>

        <meta charset="UTF-8">
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
                            <li class=""><a href="index.php">Home</a></li>
                            <li class="active"><a href="report">Report</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="signIn">Sign in</a></li>
                            <li><a  class="emergenciesButton" type = "button" data-toggle="modal" data-target="#andi">Sign Up</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </header>

        <div class="container ">
            <div class="row">
                <div class="col-md-5 ">
                    <div class="hyrje">
                        <h1 style="font-size: 3em;">Make your report now!</h1>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nam Lorem ipsum dolor sit amet,
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

                        <h3>Your report is anonymous, we provide 100% confidentiality!</h3>
                    </div>
                    <img style="margin-left: 2em;" height="400" src="../Assets/img/vioence.png" alt="">
                </div>
                <div class="col-md-6 col-md-offset-1 push">
                    <form action="report" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="<?php echo isset($datta['name']) ? $datta['name'] : null; ?>" class="form-control" placeholder="Name" name="name">
                            <span class="invalidFeedback"><?php echo isset($errors['nameError']) ? $errors['nameError'] : null; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" value="<?php echo $datta['lastName']; ?>" class="form-control" name="lastName" placeholder="Last Name">
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
                                <input type="file" value="<?php echo $datta['file']; ?>" id="myfile" name="file">
                                <span class="invalidFeedback"> <?php echo $errors['fileError']; ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" value="<?php echo $datta['address']; ?> " class="form-control" placeholder="Address">
                            <span class="invalidFeedback"> <?php echo $errors['addressError']; ?></span>
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" value="<?php echo $datta['city']; ?>"class="form-control" placeholder="City">
                            <span class="invalidFeedback"> <?php echo $errors['cityError']; ?></span>
                        </div>

                        <input type="submit" name="addReport" class="btn btn-default main-color-bg btn-lg " value="Submit">
                    </form>
                </div>
            </div>

        </div>


        <div class="modal fade" id="andi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="report" enctype="multipart/form-data" method="POST">
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

        <?php include_once "footer.php" ?>


        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
                integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
                crossorigin="anonymous"></script>
        <script src="../Assets/js/bootstrap.min.js"></script>


  </body>