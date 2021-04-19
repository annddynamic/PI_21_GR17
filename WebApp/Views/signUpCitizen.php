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

        .invalidFeedback {
            color: red;
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
    <form action="signUpCitizen" method="post">
        <h2 class="text-center">Sign Up <small>Citizen account</small></h2>
        <br>
        <div class="form-group pull-left">
            <label>First Name</label>
            <input type="text" class="form-control " placeholder="First Name" value="<?php echo isset($data['name']) ? $data['name'] : null; ?>" name="name" ">
            <span class="invalidFeedback"><?php echo isset($data['nameError']) ? $data['nameError'] : null; ?></span>
        </div>
        <div class="form-group pull-right ">
            <label>Last Name</label>
            <input type="text" class="form-control" value="<?php echo $data['lastName']; ?>" placeholder="Last Name" name="lastName">
            <span class="invalidFeedback"> <?php echo $data['lastNameError']; ?></span>
        </div>
        <div style="height: 100px"></div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" value="<?php echo $data['email']; ?>" name="email" class="form-control" placeholder="Email">
            <span class="invalidFeedback"><?php echo $data['emailError']; ?></span>
        </div>

        <div class="form-group">
            <label>Birthday</label>
            <input type="date" value="<?php echo $data['birthday']; ?>" name="birthday" class="form-control">
            <span class="invalidFeedback"><?php echo $data['birthdayError']; ?></span>
        </div>


        <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="gender">
                <option value aria-disabled="true">Select your gender..</option>
                <option value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'male') ? 'selected' : ''; ?>>Male</option>
                <option value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'female') ? 'selected' : ''; ?>>Female</option>
                <option value="other" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'other') ? 'selected' : ''; ?>>Other</option>
            </select>
            <span class="invalidFeedback"><?php echo $data['genderError']; ?></span>
        </div>


        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            <span class="invalidFeedback"><?php echo $data['passwordError']; ?></span>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input name="confirmPassword" type="password" class="form-control" id="confirm_password"
                   placeholder="Confirm password">
            <span class="invalidFeedback"><?php echo $data['confirmPasswordError']; ?></span>
        </div>

        <div class="form-group">
            <button value="submit" type="submit" class="btn btn-primary btn-block">Sign up</button>
        </div>


    </form>
</div>


</body>

</html>
