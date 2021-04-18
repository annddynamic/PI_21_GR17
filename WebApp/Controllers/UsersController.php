<?php


class UsersController extends Controller
{


    public function __construct()
    {
        $this->userModel = $this->Model('UserModel');
    }

    public function registerCitizen()
    {
        $data = [
            'name' => '',
            'lastName' => '',
            'email' => '',
            'birthday' => '',
            'gender' => '',
            'password' => '',
            'confirmPassword' => '',
            'nameError' => '',
            'lastNameError' => '',
            'emailError' => '',
            'birthdayError' => '',
            'genderError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'role_ID' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'lastName' => trim($_POST['lastName']),
                'email' => trim($_POST['email']),
                'birthday' => trim($_POST['birthday']),
                'gender' => trim($_POST['gender']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'nameError' => '',
                'lastNameError' => '',
                'emailError' => '',
                'birthdayError' => '',
                'genderError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
                'role_ID' => '3'
            ];

            //Validimi i username


            $nameValidation = "/^[a-zA-Z0-9]*$/";
            if (empty ($data['name'])) {
                $data['nameError'] = 'Please enter name.';
            } else if (!preg_match($nameValidation, $data['name'])) {
                $data['nameError'] = 'Name can only contain letters and numbers.';
            } else if (strlen($data['name']) > 10 || strlen($data['name']) <= 0) {
                $data['nameError'] = 'Name cannot be empty or null';
            }

            // validimi i lastname

            if (empty ($data['lastName'])) {
                $data['lastNameError'] = 'Please enter last name.';
            } else if (!preg_match($nameValidation, $data['lastName'])) {
                $data['lastName'] = 'Last name can only contain letters and numbers.';
            } else if (strlen($data['lastName']) > 10 || strlen($data['lastName']) <= 0) {
                $data['lastNameError'] = 'Last name cannot be empty or null';
            }

            //Validimi i emailit

            if (empty ($data['email'])) {
                $data['nameError'] = 'Please enter email.';
            } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if the email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Email is already taken.';
                }
            }

            // birthday format  validation
            $dateValidation = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";

            if (preg_match($dateValidation, $data['birthday'])) {
                $data['birthdayError'] = "";
            } else {
                $data['birthdayError'] = "Your birthday is not in valid format";
            }


            // Validimi i gender
            if (empty($data["gender"])) {
                $data['genderError'] = "Gender is required";
            } else {
                $data['genderError'] = "";
            }

            //Validate password on length and numeric value
            $passwordValidation = "/^(.{0,15}|{^a-z]*|{^\d}*)$/i";

            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter password';
            } elseif (strlen($data['password'] < 6)) {
                $data['passwordError'] = 'Password must be at least 8 characters';
            } else if (!preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password must have at least one numeric value ';
            }

            //Validate password on length and numeric value
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Password do not match, pleas try again.';
                }
            }
            //Make sure that errors are empty
            if (
                empty($data['nameError']) && empty($data['lastNameError']) &&
                empty($data['emailError']) && empty($data['birthdayError']) &&
                empty($data['genderError']) && empty($data['passwordError']) &&
                empty($data['confirmPasswordError'])) {

                //Hash password, qe mos me mujt me e bo copy paswordin

                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from modal function

                if ($this->userModel->register($data)) {

                    // Redirect to the login page

                    header('location:index.php');
                } else {
                    die('Something went wrong. ');
                }


            }

        }

        return $data;
    }

    public function login() {
        $data = [
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];
        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => ''

            ];

//
            if (empty($data['email'])) {

                $data['emailError'] = 'Please enter your email';

            }

            if (empty($data['password'])) {

                $data['passwordError'] = 'Please enter your Password';

            }
//
            if (empty($data['email']) && empty($data['password'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {

                    $data['passwordError'] = 'Password or email is incorrect. Pleas try again';
//                    return $data;
                }
            }


        }else{
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => ''
            ];
        }

        return $data;
    }


    public function createUserSession($user)
    {
        session_start();
        $_SESSION['user_id'] = $user->uID;
        $_SESSION['email'] = $user->email;

    }
}