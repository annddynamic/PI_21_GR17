<?php

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="../Assets/img/fav.png"/>
    <link rel="stylesheet" href="../Assets/css/index.css">

    <title>Sign Up</title>

    <style>

        .login-form {
            height: 500px !important;
            width: 600px;
            margin: 65px auto;
            /*padding: 100px 0px;*/
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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="citizenPanel">Citizen Panel</a>
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
</header>


<body>
<div class="login-form">
    <form action="manageAccount" method="post">
        <h2 class="text-center">Manage your Account!</h2>
        <br>

        <div class="form-group">
            <label>Email</label>
            <input disabled type="text" value="<?php echo $_SESSION['email']; ?>" class="form-control" >
            <span class="invalidFeedback"></span>

        </div>

        <div class="form-group">
            <label>Current password</label>
            <input type="password" class="form-control"  placeholder="Enter Current Password" name="Cpassword">
            <span class="invalidFeedback"></span>

        </div>

        <div class="form-group">
            <label>New password</label>
            <input type="password" class="form-control"  placeholder="Enter New Password" name="Npassword">
            <span class="invalidFeedback"></span>
        </div>

        <div class="form-group">
            <label>Confirm new password</label>
            <input type="password" class="form-control"  placeholder="Confirm Password"
                   name="password">
            <span class="invalidFeedback"></span>

        </div>

        <div class="form-group">
            <button type="submit" name="change" class="btn btn-primary btn-block">Sign up</button>
        </div>


    </form>
</div>

</body>

</html>
