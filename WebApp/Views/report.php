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
            </div>

        </div>


        <div class="modal fade" id="andi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

        <?php include_once "footer.php" ?>


        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
                integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
                crossorigin="anonymous"></script>
        <script src="../Assets/js/bootstrap.min.js"></script>


  </body>