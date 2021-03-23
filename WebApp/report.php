    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="Asets/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
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
                            <li class="active"><a href="report.php">Report</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="signIn.php">Sign in</a></li>
                            <li><a href="signUp.php">Sign up</a></li>
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
                    <img style="margin-left: 2em;" height="400" src="Asets/img/vioence.png" alt="">
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

        <?php include_once "footer.php"?>

  </body>