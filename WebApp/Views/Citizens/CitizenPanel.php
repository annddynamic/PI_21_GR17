<?php


if (isset($data)) {

    $sendEmail = $data['CitizenC']->sendEmail();
    $datta = $data['report']->getData();
    $errors = $data['report']->getErrors();
    $reportsIMade = $data['CitizenC']->getReportsIMade();
    
    // echo '<pre>';
    // var_dump($data['CitizenC']->getReportsIMade());
    // echo '</pre>';
    
echo $_SESSION['user_id'];
    
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Citizen Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/StylesP.css">




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

    .search-box:hover>.search-text {
        width: 200px;
        padding: 0 6px;

    }


    .glyphicon.glyphicon-pencil {
        font-size: 70px;
        padding-left: 33%;
        padding-top: 20px;
    }

    .glyphicon.glyphicon-comment {
        font-size: 70px;
        padding-left: 33%;
        padding-top: 20px;
    }

    .glyphicon.glyphicon-eye-open {
        font-size: 70px;
        padding-left: 33%;
        padding-top: 20px;
    }

    .glyphicon.glyphicon-exclamation-sign {
        font-size: 70px;
        padding-left: 33%;
        padding-top: 20px;
    }
</style>


<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Citizen Panel</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="manageAccount">Manage Account</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="citizenPanel">Welcome <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : null;  ?></a></li>
                <li><a href="index">Logout</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="col-md-4">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="" true> </span>Dashboard </h1>
                </div>
            </div>
        </div>
    </div>
</header>





<body>

    <div class="jumbotron">
        <div class="container">
            <h1 style="color: red;">IF THIS IS A CRIME IN PROGRESS PLEASE CALL 9-1-1 !!!</h1>
        </div>
    </div>


    <div class="container" style="position: relative;">

        <div class="  row">


            <div class="col-xs-6 col-md-3">
                <a class="thumbnail" data-toggle="modal" data-target="#report">
                    <span class="glyphicon glyphicon-comment"></span>
                    <div class="caption">
                        <h3> Report your complaint here </h3>
                    </div>
                </a>
            </div>


            <div class="col-xs-6 col-md-3  ">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#info">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <div class="caption">
                        <h3> What you need to know</h3>

                    </div>
                </a>
            </div>



            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#previousReports">
                    <span class="glyphicon glyphicon-eye-open"></span>
                    <div class="caption">
                        <h3>Keep track of previous reports</h3>
                    </div>
                </a>
            </div>



            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#feedback">
                    <span class="glyphicon glyphicon-pencil"></span>
                    <div class="caption">
                        <h3> How can we improve?</h3>

                    </div>

                </a>
            </div>

        </div>



        



        <div class="modal fade" tabindex="-1" role="dialog" id="info">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Important information before using our crime reporting system</h4>
                    </div>
                    <div class="modal-body">
                        <p> <span class="glyphicon glyphicon-ok"></span> Using t​his online citizen police report system allows you to submit a report immediately and keep track of the proggres made
                            on the cases.

                        </p>
                        <p> <span class="glyphicon glyphicon-alert"></span> Filing a false police report is a crime.

                        </p>

                        <p> <span class="glyphicon glyphicon-transfer"></span>
                            All cases filed using the Citizens Crime Reporting System will be reviewed.
                            Upon review, if further investigation of your case is needed, you may be contacted.
                        </p>


                        <p> <span class="glyphicon glyphicon-minus"></span>
                            Reports filed on behalf of a third party. i.e. another person or for public property, will not be accepted.
                            Reports must be filed by the actual complainant, owner or authorized representative.
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-pushpin"></span>
                            This page lets you report: Stolen Licence Plate(s)​​​​​,Theft from a Vehicle, Theft of or Damage to Property,
                            Frauds & Scams, Drug Activity, Shoplifting or provide information on existing cases.


                        </p>

                        ​​​​​

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="previousReports">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Check proggres made on other reports</h4>
                    </div>
                    <div class="panel-body myPanel">
                        <table class="table  table-hover tbl" id="emergency"  >
                            <tr>
                            <th>Emri</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>State</th>
                            </tr>
                            <?php foreach ($reportsIMade as $i => $MyReports    ): ?>  
                                <tr>
                                    <td><?php echo $MyReports['emri'] ;?></td>
                                    <td><?php echo $MyReports['dt_raportimit']; ?></td>
                                    <td><?php echo $MyReports['description']; ?></td>
                                    <td><?php echo $MyReports['gjendja']; ?></td>
                                </tr>   
                            <?php endforeach; ?>   
                        </table> 
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>


        <div class="modal" tabindex="-1" role="dialog" id="contact">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Thank you </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>The police department will contact you shortly.</p>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" tabindex="-1" role="dialog" id="info">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Important information before using our crime reporting system</h4>
                    </div>
                    <div class="modal-body">
                        <p> <span class="glyphicon glyphicon-ok"></span> Using t​his online citizen police report system allows you to submit a report immediately and keep track of the proggres made
                            on the cases.

                        </p>
                        <p> <span class="glyphicon glyphicon-alert"></span> Filing a false police report is a crime.

                        </p>

                        <p> <span class="glyphicon glyphicon-transfer"></span>
                            All cases filed using the Citizens Crime Reporting System will be reviewed.
                            Upon review, if further investigation of your case is needed, you may be contacted.
                        </p>


                        <p> <span class="glyphicon glyphicon-minus"></span>
                            Reports filed on behalf of a third party. i.e. another person or for public property, will not be accepted.
                            Reports must be filed by the actual complainant, owner or authorized representative.
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-pushpin"></span>
                            This page lets you report: Stolen Licence Plate(s)​​​​​,Theft from a Vehicle, Theft of or Damage to Property,
                            Frauds & Scams, Drug Activity, Shoplifting or provide information on existing cases.


                        </p>

                        ​​​​​

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>









    </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="feedback">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">How would you rate our page?</h4>
                    </div>
                    <form method="post" action="citizenPanel" id="sendEmail">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input class="form-control" placeholder="Enter email" name="emailF">
                                        </div>
                                        <span class="invalidFeedback"><?php echo isset($sendEmail['emailError']) ? $sendEmail['emailError'] : null; ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Subject</label>
                                        <input type="text" class="form-control" placeholder="Enter subject" name="subjectF">
                                        <span class="invalidFeedback"><?php echo isset($sendEmail['subjectError']) ? $sendEmail['subjectError'] : null; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Message</label>
                                        <textarea name="messageF" class="form-control" rows="9" cols="25" placeholder="Message"></textarea>
                                        <span class="invalidFeedback"><?php echo isset($sendEmail['messageError']) ? $sendEmail['messageError'] : null; ?></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submitF" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- <script>
        document.getElementById('sendEmail').addEventListener('click', function(e){
            e.preventDefault();
        })
    </script> -->



    <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Emergency Report</h4>
                </div>
                <div class="modal-body">
                    <form action="citizenPanel" enctype="multipart/form-data" method="POST">
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
                        <textarea class="textReport" name="textfield" placeholder="Add Message"
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




    <footer id="footer">
        <pr>Copyright Adminstrap, &copy; 2021</pr>
    </footer>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="../Assets/js/bootstrap.min.js"></script>

</body>