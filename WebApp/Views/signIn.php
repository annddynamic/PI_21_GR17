<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>

    <link rel="stylesheet" href="../Assets/css/index.css">
    <title>Sign in</title>

    <style>

        *{
            overflow-y: hidden;
        }

        .login-form {
            width: 500px;
            margin: 1px auto;
            padding: 100px 0px;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 60px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>




</head>
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
                    <li><a href="index.php">Home</a></li>
                    <li class=""><a href="report">Report</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="signIn">Sign in</a></li>
                    <li><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#signUp" >Sign up</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>


<body>
<div class="login-form">
    <form action="signIn" method="POST">
        <h2 class="text-center">Sign in</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Username" >
            <span class="invalidFeedback"> <?php echo isset($data['emailError']) ? $data['emailError'] : null;?></span>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="invalidFeedback"><?php echo $data['passwordError'];?></span>
        </div>
        <div class="form-group">
            <button value="submit" id="submit" type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>

    </form>
    <p class="text-center"><a class="emergenciesButton" type = "button" data-toggle="modal" data-target="#signUp" > Create an Account</a></p>
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
