<?php

// use PHPMailer\PHPMailer\PHPMailer;

class citizenPanelController extends Controller
{
    

    public function __construct()
    {

         $this->citizenModel = new CitizenModel();
         $this->userModel= new UserModel();

    }

    public function getData(){

        $data=[

            'sendEmail' => $this->sendEmail(),
            'editUser' => $this->changeData()
        ];
        
        return $data;
    }

   
    public function sendEmail(){

        $data = [
            'to' => '',
            'subject' => '',
            'message' => '',
            'emailError' => '',
            'subjectError' => '',
            'messageError' => ''
                
        ];

        if(isset($_POST['submitF'])){


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'to' => trim($_POST['emailF']),
                'subject' => trim($_POST['subjectF']),
                'message' => trim($_POST['messageF']),
                'emailError' => '',
                'subjectError' => '',
                'messageError' => '',
            ];

            if(empty($data['to'])){
                $data['emailError']='Please enter receiver';
            }else if(filter_var($data['to'], FILTER_VALIDATE_EMAIL) === FALSE ){
                $data['emailError'] = 'Please enter valid email';
            }

            if(empty($data['subject'])){
                $data['subjectError'] = 'Please enter subject';
            }

            if(empty($data['message'])){
                $data['messageError'] = 'Please enter message';
            }
           

            if(empty($data['emailError']) && empty($data['subjectError']) && empty($data['messageError']) ){

                // require_once('PHPMailerAutoload.php');
                
                 $mail = new PHPMailer();
 
//                $mail->SMTPDebug = 4;                               // Enable verbose debug output
//
//                $mail->isSMTP();                                      // Set mailer to use SMTP
//                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//                $mail->SMTPAuth = true;                               // Enable SMTP authentication
//                $mail->Username = 'anndidika2001@gmail.com';                 // SMTP username
//                $mail->Password = 'say my name';                           // SMTP password
//                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//                $mail->Port = 587;                                    // TCP port to connect to
//
//                $mail->setFrom('anndidika2001@gmail.com', 'CrimeReportSystem');
//                $mail->addAddress($data['to'] );     // Add a recipient
////                $mail->addAddress('ellen@example.com');               // Name is optional
//                // $mail->addCC('cc@example.com');
//                // $mail->addBCC('bcc@example.com');
//
//                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//                $mail->isHTML(true);                                  // Set email format to HTML
//
//                $mail->Subject = $data['subject'];
//                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//                $mail->AltBody = $data['message'];


                $mail->isSMTP();
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->SMTPSecure='ssl';
                $mail->Host='smtp.gmail.com';
                $mail->Port='465';
                $mail->isHTML();
                $mail->Username='crimereportsystem69@gmail.com';
                $mail->Password='alfa alfa123';
                $mail->SetFrom('crimereportsystem69@gmail.com','Crime-Report-System');
                $mail->addReplyTo('crimereportsystem69@gmail.com');
                $mail->Subject=$data['subject'];
                $mail->Body=$data['message'];
                $mail->AddAddress($data['to']);
                $mail->Send();



            }
            
        }   
        
        return $data;
    }

    public function changeData(){

        $data=[
            'newEmail'=>'',
            'newEmailError'=>'',
            'currentPassword'=>'',
            'currentPasswordError'=>'',
            'newPassword'=>'',
            'newPasswordError'=>'',
            'confirmPassword'=>'',
            'confirmPasswordError'=>'',
        ];

        if(isset($_POST['change'])){

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data=[
                'currentPassword'=>trim($_POST['Cpassword']),
                'newPassword'=>trim($_POST['Npassword']),
                'confirmPassword'=>trim($_POST['password']),
                'newEmail'=>trim($_POST['nEmail']),
                'currentPasswordError'=>'',
                'newPasswordError'=>'',
                'confirmPasswordError'=>'',
                'newEmailError'=>'',

            ];

            if(empty($data['newEmail'])){
                $data['newEmailError']='Please enter email!';
            }else if(filter_var($data['newEmail'], FILTER_VALIDATE_EMAIL) === FALSE ){
                $data['newEmailError'] = 'Please enter valid email';
            }else if($this->userModel->findUserByEmailUsers($data['newEmail'])) {
                $data['newEmailError'] = 'Email is already taken!';
            }


            if(empty($data['currentPassword'])){
                $data['currentPasswordError']='Please enter current password!';
            }else if(!password_verify($data['currentPassword'], $_SESSION['password'])){
                $data['currentPasswordError']='Your password is incorrect!';
            }


            $passwordValidation = "/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{8,})\S$/";
            // Checks that a password has a minimum of 8 characters,
            // at least 1 uppercase letter, 1 lowercase letter,
            // and 1 number with no spaces.

            if (empty($data['newPassword'])) {
                $data['newPasswordError'] = 'Please enter password!';
            } else if (!preg_match($passwordValidation, $data['newPassword'])) {
                $data['newPasswordError'] = 'Password did not meet the criteria. Try again!';
            }else if(password_verify($data['newPassword'], $_SESSION['password'])){
                $data['newPasswordError'] = 'Password can not be the same as the old one!';
            }

            //Validate password on length and numeric value
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password!';
            } else {
                if ($data['newPassword'] != $data['confirmPassword']) {
                        $data['confirmPasswordError'] = 'Password do not match, please try again!';
                }
            }


            if (
                empty($data['newEmailError']) && empty($data['currentPasswordError']) &&
                empty($data['newPasswordError']) && empty($data['confirmPasswordError'])){


                $data['newPassword'] = password_hash($data['newPassword'], PASSWORD_DEFAULT);

                //Register user from modal function

                if($this->citizenModel->ChangeData($data)){
                    $_SESSION['email']=$data['newEmail'];
                    $_SESSION['password']=$data['newPassword'];

                    header('location:citizenPanel');
                }else{
                    die('Something went wrong. ');
                }
            }


        }else{
            return $data;
        }

        return $data;
    }

}



?>  