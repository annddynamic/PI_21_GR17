<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../Asets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="../../Asets/img/fav.png"/>

    <link rel="stylesheet" href="index.css">
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
                    <li class=""><a href="report.php">Report</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signIn.php">Sign in</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>


<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Sign Up <small>Police account</small></h2>
        <br>
        <div class="form-group pull-left">
            <label>First Name</label>
            <input type="text" class="form-control " placeholder="First Name" required="required">
        </div>
        <div class="form-group pull-right ">
            <label>Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" required="required">
        </div>
        <div style="height: 80px"></div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" required="required">
        </div>

        <div class="form-group">
            <label>Country</label>
            <input type="text" class="form-control" placeholder="Country">
        </div>

        <div class="form-group pull-left">
            <label>City</label>
            <input type="text" class="form-control " placeholder="City" required="required">
        </div>
        <div class="form-group pull-right ">
            <label>Zip Code</label>
            <input type="text" class="form-control" placeholder="Zip Code" required="required">
        </div>
        <div style="height: 80px"></div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Address">
        </div>

        <div class="form-group">
            <label>Birthday</label>
            <input type="date" class="form-control" required="required">
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select class="form-control" required="required">
                <option value aria-disabled="true">Select your gender..</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>


        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" required="required" minlength="8">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm password" required="required">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
        </div>

        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox" required="required">I accept terms and
                agreement</label>
        </div>
    </form>
</div>

<script>
    var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>

</body>

</html>
