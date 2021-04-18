<?php


class SignIn extends Controller{

    public function __construct()
    {
        $this->userModel=$this->Model('UserModel');
    }

    public function register(){
        $data=[
            'name'=>'',
            'lastName'=>'',
            'email'=>'',
            'birthday'=>'',
            'gender'=>'',
            'password'=>'',
            'confirmPassword'=>'',
            'nameError'=>'',
            'lastNameError'=>'',
            'emailError'=>'',
            'birthdayError'=>'',
            'genderError'=>'',
            'passwordError'=>'',
            'confirmPasswordError'=>''
        ];

        if ($_SERVER['REQUEST_METHOD']=='POST'){
//            if(isset($_POST[submit]))

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data=[
                'name'=>trim($_POST('name')),
                'lastName'=>trim($_POST('lastName')),
                'email'=>trim($_POST('email')),
                'birthday'=>trim($_POST('birthday')),
                'gender'=>trim($_POST('gender')),
                'password'=>trim($_POST('password')),
                'confirmPassword'=>trim($_POST('confirmPassword')),
                'nameError'=>'',
                'lastNameError'=>'',
                'emailError'=>'',
                'birthdayError'=>'',
                'genderError'=>'',
                'passwordError'=>'',
                'confirmPasswordError'=>''
            ];

            //Validimi i username
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            if(empty ($data['name'])){
                $data['nameError']='Please enter name.';
            }else if (!preg_match($nameValidation, $data['name'])){
                $data['nameError']='Name can only contain letters and numbers.';
            }

            // validimi i lastname

            if(empty ($data['lastName'])){
                $data['lastNameError']='Please enter last name.';
            }else if (!preg_match($nameValidation, $data['lastName'])){
                $data['lastName']='lastName can only contain letters and numbers.';
            }

            //Validimi i emailit
            if(empty ($data['name'])) {
                $data['nameError'] = 'Pleas enter email.';
            }else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $data['emailError']='Pleasr enter the correct format';
            }else{
                //Check if the email exists.
                if($this->userModel->findUserByEmail($data['email'])){
                    $data['emailError']='Email is already taken.';
                }
            }



        }

            return $data;
    }

    public function login(){
        $data=[
            'usernameError'=>'',
            'passwordError'=>''
        ];

        return $data;

    }


}