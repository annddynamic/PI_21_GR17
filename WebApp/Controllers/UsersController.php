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
                $data['emailError'] = 'Please enter email.';
            } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if the email exists.
                if ($this->userModel->findUserByEmailUsers($data['email']) || $this->userModel->findUserByEmailPending($data['email'])) {
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

                if ($this->userModel->registerCitizen($data)) {

                    // Redirect to the login page

                    header('location:index.php');
                } else {
                    die('Something went wrong. ');
                }
            }
        }
        return $data;
    }

    public function registerPolice()
    {
        $data = [
            'name' => '',
            'lastName' => '',
            'email' => '',
            'country' => '',
            'city' => '',
            'zipCode' => '',
            'phoneNumber' => '',
            'street' => '',
            'birthday' => '',
            'gender' => '',
            'password' => '',
            'confirmPassword' => '',
            'nameError' => '',
            'lastNameError' => '',
            'emailError' => '',
            'countryError' => '',
            'cityError' => '',
            'zipCodeError' => '',
            'phoneNumberError' => '',
            'streetError' => '',
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
                'gender' => trim($_POST['gender']),
                'birthday' => trim($_POST['birthday']),
                'country' => trim($_POST['country']),
                'city' => trim($_POST['city']),
                'zipCode' => trim($_POST['zipCode']),
                'phoneNumber' => trim($_POST['phoneNumber']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'street' => trim($_POST['street']),
                'nameError' => '',
                'lastNameError' => '',
                'emailError' => '',
                'countryError' => '',
                'cityError' => '',
                'zipCodeError' => '',
                'phoneNumberError' => '',
                'birthdayError' => '',
                'genderError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
                'streetError' => '',
                'role_ID' => '2'
            ];

            //Validimi i name

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $text = "Please enter your name.";
            $words = preg_split($nameValidation, $text);

            if (empty ($data['name'])) {
                foreach ($words as $word) {
                    $data['nameError'] = $data['nameError'] . $word;
                }
            } else if (!preg_match($nameValidation, $data['name'])) {
                $data['nameError'] = 'Name can only contain letters and numbers.';
            } else if (strlen($data['name']) > 10) {
                $data['nameError'] = 'Name cannot be longer than 10 characters.';
            }

            // validimi i lastname
            if (empty ($data['lastName'])) {
                $data['lastNameError'] = 'Please enter last name.';
            } else if (!preg_match($nameValidation, $data['lastName'])) {
                $data['lastName'] = 'Last name can only contain letters and numbers.';
            } else if (strlen($data['lastName']) > 10) {
                $data['lastNameError'] = 'Surname cannot be longer than 10 characters.';
            }

            //Validimi i emailit
            if (empty ($data['email'])) {
                $data['emailError'] = 'Please enter email.';
            } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {

                //Check if the email exists.
                if ($this->userModel->findUserByEmailUsers($data['email']) || $this->userModel->findUserByEmailPending($data['email'])) {
                    $data['emailError'] = 'Email is already taken.';
                }
            }

            // birthday format  validation
            $dateValidation = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";

            if (preg_match($dateValidation, $data['birthday'])) {
                $data['birthdayError'] = "";
            } else {
                $data['birthdayError'] = "Your birthday is not in valid format.";
            }


            // Validimi i gender
            if (empty($data["gender"])) {
                $data['genderError'] = "Gender is required.";
            } else {
                $data['genderError'] = "";
            }


            // validimi i Country

            $countriesString = "Albania, Afghanistan, Algeria, Andorra, Austria, Australia, Bahamas, Bulgaria, Belgium, Brazil, Beliza, Croatia, Canada, Chile, Denmark, Egypt, Macedonia, Ecuador, Finland, Ghana, Germany, Honduras, Israel, India, Jordan, Kosova, Kenya, Laos, Lebanon, Mexico, Norway, Oman, Pakistan, Poland, Portugal, Russia, Slovenia, Spain, Turkey, UK, USA, America";

            $countriesArr = explode(", ", $countriesString);

            if (empty($data['country'])) {
                $data['countryError'] = "Please enter country.";
            } else if ($data['country'] == 'Kosovo') {
                $data['country'];
                $pattern = '/Kosovo/i';
                preg_replace($pattern, 'Kosova', $data['country']);
            } else {
                if (!in_array($data['country'], $countriesArr)) {
                    $data['countryError'] = "Your country was not in our list, try again.";
                }
            }

            // Validimi i city
            if (empty ($data['city'])) {
                $data['cityError'] = 'Please enter your city.';
            }

            // Validate phone number
            if ($this->validate_phone_number($data['phoneNumber']) == true) {
                $data['phoneNumberError'] = "";
            } else {
                $data['phoneNumberError'] = "Your phone number is invalid, try again.";
            }


            // validimi i zip
            if ($this->numbers_only($data['zipCode']) == true) {
                $data['zipCodeError'] = '';
            } elseif (empty($data['zipCode'])) {
                $data['zipCodeError'] = 'Please enter zip code.';
            } else {
                $data['zipCodeError'] = 'Zip code is invalid, try again.';
            }

            //Validimi i streets

            if (empty ($data['street'])) {
                $data['streetError'] = 'Please enter street.';
            }


            //Validate password on length and numeric value
            $passwordValidation = "/^(.{0,15}|{^a-z]*|{^\d}*)$/i";

            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter password.';
            } elseif (strlen($data['password'] < 6)) {
                $data['passwordError'] = 'Password must be at least 8 characters.';
            } else if (!preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password must have at least one numeric value.';
            }

            //Validate password on length and numeric value
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Password do not match, pleas try again.';
                }
            }


            //Make sure that errors are empty
            if (
                empty($data['nameError']) && empty($data['lastNameError']) &&
                empty($data['emailError']) && empty($data['countryError']) &&
                empty($data['cityError']) && empty($data['zipCodeError']) &&
                empty($data['phoneNumberError']) && empty($data['birthdayError']) &&
                empty($data['genderError']) && empty($data['passwordError']) &&
                empty($data['confirmPasswordError'])) {

                //Hash password, qe mos me mujt me e bo copy paswordin

                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from modal function

                if ($this->userModel->registerPolice($data)) {

                    // Redirect to the login page

                    header('location:index.php');
                } else {
                    die('Something went wrong. ');
                }
            }
        }
        return $data;
    }

    public function login()
    {
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
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or email is incorrect. Pleas try again';
                    return $data;
                }
            }

        } else {
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
        echo session_id();
        $_SESSION['user_id'] = $user->uID;
        $_SESSION['email'] = $user->email;

    }


    // Validate phone number

    public function validate_phone_number($phone)
    {
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        // Remove "-" from number
        $phone_to_check = str_replace("-", "", $filtered_phone_number);

        // Check the lenght of number
        // This can be customized if you want phone number from a specific country
        if (strlen($phone_to_check) < 9 || strlen($phone_to_check) > 14) {
            return false;
        } else {
            return true;
        }
    }

    private function numbers_only($zipCode)
    {
        if (empty($zipCode)) {
            return false;
        }
        return preg_match('/^([0-9]*)$/', $zipCode);
    }
}