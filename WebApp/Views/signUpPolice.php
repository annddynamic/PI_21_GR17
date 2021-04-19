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
                    <li><a href="signIn">Sign in</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>


<body>
<div class="login-form">
    <form action="signUpPolice" method="post">
        <h2 class="text-center">Sign Up <small>Police account</small></h2>
        <br>
        <div class="form-group pull-left">
            <label>First Name</label>
            <input type="text" class="form-control " placeholder="First Name" name="name">
            <span class="invalidFeedback"><?php echo isset($data['nameError']) ? $data['nameError'] : null; ?></span>

        </div>
        <div class="form-group pull-right ">
            <label>Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" name="lastName">
            <span class="invalidFeedback"> <?php echo $data['lastNameError']; ?></span>

        </div>
        <div style="height: 80px"></div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
            <span class="invalidFeedback"><?php echo $data['emailError']; ?></span>

        </div>

        <div class="form-group">
            <label>Country</label>
            <input type="text" class="form-control" placeholder="Country" name="country">
            <span class="invalidFeedback"> <?php echo $data['countryError']; ?></span>

        </div>

        <div class="form-group pull-left">
            <label>City</label>
            <input type="text" class="form-control " placeholder="City" name="city">
            <span class="invalidFeedback"> <?php echo $data['cityError']; ?></span>

        </div>
        <div class="form-group pull-right ">
            <label>Zip Code</label>
            <input type="text" class="form-control" placeholder="Zip Code" name="zipCode">
            <span class="invalidFeedback"> <?php echo $data['zipCodeError']; ?></span>

        </div>
        <div style="height: 80px"></div>

        <div class="form-group">
            <label>Street</label>
            <input type="text" class="form-control" placeholder="Street" name="street">
            <span class="invalidFeedback"> <?php echo $data['streetError']; ?></span>

        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" placeholder="Phone Number" name="phoneNumber">
            <span class="invalidFeedback"> <?php echo $data['phoneNumberError']; ?></span>
        </div>

        <div class="form-group">
            <label>Birthday</label>
            <input type="date" class="form-control" name="birthday">
            <span class="invalidFeedback"><?php echo $data['birthdayError']; ?></span>
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="gender">
                <option value aria-disabled="true">Select your gender..</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <span class="invalidFeedback"><?php echo $data['genderError']; ?></span>

        </div>


        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            <span class="invalidFeedback"><?php echo $data['passwordError']; ?></span>

        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password"
                   name="confirmPassword">
            <span class="invalidFeedback"><?php echo $data['confirmPasswordError']; ?></span>

        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
        </div>


    </form>
</div>

</body>

</html>
